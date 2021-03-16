<?php

namespace Drupal\nodeaccess\Form;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

/**
 * Builds the configuration form.
 */
class GrantsForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'nodeaccess_grants_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, Node $node = NULL) {
    $form_values = $form_state->getValues();
    $settings = \Drupal::configFactory()->get('nodeaccess.settings');
    $nid = $node->id();
    $role_alias = $settings->get('role_alias');
    $role_map = $settings->get('role_map');
    $allowed_roles = [];
    $user = $this->currentUser();
    $allowed_grants = $settings->get('grants');
    foreach ($role_alias as $id => $role) {
      if ($role['allow']) {
        $allowed_roles[] = $id;
      }
    }
    if (!$form_values) {
      $form_values = [];
      // Load all roles.
      foreach ($role_alias as $id => $role) {
        $rid = $role_map[$id];
        $result = db_query("SELECT na.grant_view, na.grant_update, na.grant_delete
        FROM {node_access} na where na.gid = :rid AND na.realm = :realm AND na.nid = :nid", [
          ':rid' => $rid,
          ':realm' => 'nodeaccess_rid',
          ':nid' => $nid,
        ])->fetchAssoc();
        if (!empty($result)) {
          $form_values['rid'][$rid] = [
            'name' => $role['alias'],
            'grant_view' => (boolean) $result['grant_view'],
            'grant_update' => (boolean) $result['grant_update'],
            'grant_delete' => (boolean) $result['grant_delete'],
          ];
        }
        else {
          $form_values['rid'][$rid] = [
            'name' => $role['alias'],
            'grant_view' => FALSE,
            'grant_update' => FALSE,
            'grant_delete' => FALSE,
          ];
        }
      }

      // Load users from node_access.
      $results = db_query("SELECT uid, name, grant_view, grant_update, grant_delete
        FROM {node_access}
        LEFT JOIN {users_field_data} ON uid = gid
        WHERE nid = :nid AND realm = :realm
        ORDER BY name", [
          ':nid' => $nid,
          ':realm' => 'nodeaccess_uid',
        ]);
      foreach ($results as $account) {
        $form_values['uid'][$account->uid] = [
          'name' => $account->name,
          'keep' => 1,
          'grant_view' => $account->grant_view,
          'grant_update' => $account->grant_update,
          'grant_delete' => $account->grant_delete,
        ];
      }
    }
    else {
      // Perform search.
      if ($form_values['keys']) {
        $uids = [];
        $sql = "SELECT uid, name FROM {users_field_data} WHERE uid in (:uids[])";
        if (isset($form_values['uid']) && is_array($form_values['uid'])) {
          $uids = array_keys($form_values['uid']);
        }
        if (!in_array($form_values['keys'], $uids)) {
          array_push($uids, $form_values['keys']);
        }
        $params = [':uids[]' => $uids];
        $result = db_query($sql, $params);
        foreach ($result as $account) {
          $form_values['uid'][$account->uid] = [
            'name' => $account->name,
            'keep' => 0,
          ];
        }
      }
      // Calculate default grants for found users.
      $db = \Drupal::database();
      if (isset($form_values['uid']) && is_array($form_values['uid'])) {
        if (strstr($db->version(), 'MariaDB') !== FALSE) {
          $cast_type = 'int';
        }
        else {
          $cast_type = 'unsigned';
        }
        foreach (array_keys($form_values['uid']) as $uid) {
          if (!$form_values['uid'][$uid]['keep']) {
            foreach (['grant_view', 'grant_update', 'grant_delete'] as $grant_type) {
              $form_values['uid'][$uid][$grant_type] = $db->queryRange('
                SELECT count(*) FROM {node_access} na
                LEFT JOIN {user__roles} r ON (na.gid = CAST(r.roles_target_id as ' . $cast_type . '))
                WHERE na.nid = :nid
                  AND na.realm = :realm
                  AND r.entity_id = :uid
                  AND :grant_type = :one',
                0,
                1,
                [
                  ':nid' => $nid,
                  ':realm' => 'nodeaccess_rid',
                  ':uid' => $uid,
                  ':grant_type' => $grant_type,
                  ':one' => 1,
                ])->fetchField() ||
                $db->queryRange('
                  SELECT count(*) FROM {node_access}
                  WHERE nid = :nid
                    AND realm = :realm
                    AND gid = :gid
                    AND :grant_type = :one',
                  0,
                  1,
                  [
                    ':nid' => $nid,
                    ':realm' => 'nodeaccess_uid',
                    ':grant_type' => $grant_type,
                    ':gid' => $uid,
                    ':one' => 1,
                  ]
                  )->fetchField();
            }
            $form_values['uid'][$uid]['keep'] = TRUE;
          }
        }
      }
    }

    $form_values['rid'] = isset($form_values['rid']) ? $form_values['rid'] : [];
    $form_values['uid'] = isset($form_values['uid']) ? $form_values['uid'] : [];
    $roles = $form_values['rid'];
    $users = $form_values['uid'];
    $form['nid'] = [
      '#type' => 'hidden',
      '#value' => $nid,
    ];

    // If $preserve is TRUE, the fields the user is not allowed to view or
    // edit are included in the form as hidden fields to preserve them.
    $preserve = $settings->get('preserve');
    // Roles table.
    if (count($allowed_roles)) {
      $header = [];
      $header[] = $this->t('Role');
      if ($allowed_grants['view']) {
        $header[] = $this->t('View');
      }
      if ($allowed_grants['edit']) {
        $header[] = $this->t('Edit');
      }
      if ($allowed_grants['delete']) {
        $header[] = $this->t('Delete');
      }
      $form['rid'] = [
        '#type' => 'table',
        '#header' => $header,
        '#tree' => TRUE,
      ];
      foreach ($allowed_roles as $id) {
        $rid = $role_map[$id];
        $form['rid'][$rid]['name'] = [
          '#markup' => $role_alias[$id]['alias'],
        ];
        if ($allowed_grants['view']) {
          $form['rid'][$rid]['grant_view'] = [
            '#type' => 'checkbox',
            '#default_value' => $roles[$rid]['grant_view'],
          ];
        }
        if ($allowed_grants['edit']) {
          $form['rid'][$rid]['grant_update'] = [
            '#type' => 'checkbox',
            '#default_value' => $roles[$rid]['grant_update'],
          ];
        }
        if ($allowed_grants['delete']) {
          $form['rid'][$rid]['grant_delete'] = [
            '#type' => 'checkbox',
            '#default_value' => $roles[$rid]['grant_delete'],
          ];
        }
      }
    }

    // Autocomplete returns errors if users don't have access to profiles.
    if ($user->hasPermission('access user profiles')) {
      $form['keys'] = [
        '#type' => 'entity_autocomplete',
        '#default_value' => isset($form_values['keys']) ? $form_values['keys'] : '',
        '#size' => 40,
        '#target_type' => 'user',
        '#title' => $this->t('Enter names to search for users'),
      ];
    }
    else {
      $form['keys'] = [
        '#type' => 'textfield',
        '#default_value' => isset($form_values['keys']) ? $form_values['keys'] : '',
        '#size' => 40,
      ];
    }
    $form['keys']['#prefix'] = '<p><div class="container-inline">';
    $form['search'] = [
      '#type' => 'submit',
      '#value' => $this->t('Search'),
      '#submit' => ['::searchUser'],
      '#suffix' => '</div></p>',
    ];
    // Users table.
    if (count($users)) {
      $header = [];
      $header[] = $this->t('User');
      $header[] = $this->t('Keep?');
      if ($allowed_grants['view']) {
        $header[] = $this->t('View');
      }
      if ($allowed_grants['edit']) {
        $header[] = $this->t('Edit');
      }
      if ($allowed_grants['delete']) {
        $header[] = $this->t('Delete');
      }
      $form['uid'] = [
        '#type' => 'table',
        '#header' => $header,
      ];
      foreach ($users as $uid => $account) {
        $form['uid'][$uid]['name'] = [
          '#markup' => $account['name'],
        ];
        $form['uid'][$uid]['keep'] = [
          '#type' => 'checkbox',
          '#default_value' => $account['keep'],
        ];
        if ($allowed_grants['view']) {
          $form['uid'][$uid]['grant_view'] = [
            '#type' => 'checkbox',
            '#default_value' => $account['grant_view'],
          ];
        }
        if ($allowed_grants['edit']) {
          $form['uid'][$uid]['grant_update'] = [
            '#type' => 'checkbox',
            '#default_value' => $account['grant_update'],
          ];
        }
        if ($allowed_grants['delete']) {
          $form['uid'][$uid]['grant_delete'] = [
            '#type' => 'checkbox',
            '#default_value' => $account['grant_delete'],
          ];
        }
      }
    }
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save Grants'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $uids = $form_state->getValue('uid');
    // Delete unkept users.
    if (!empty($uids) && is_array($uids)) {
      foreach ($uids as $uid => $row) {
        if (!$row['keep']) {
          unset($uids[$uid]);
        }
      }
      $form_state->setValue('uid', $uids);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Update configuration.
    $values = $form_state->getValues();
    $nid = $values['nid'];
    $grants = [];
    $node = Node::load($nid);

    foreach (['uid', 'rid'] as $type) {
      $realm = 'nodeaccess_' . $type;
      if (isset($values[$type]) && is_array($values[$type])) {
        foreach ($values[$type] as $gid => $line) {
          $grant = [
            'gid' => $gid,
            'realm' => $realm,
            'grant_view' => empty($line['grant_view']) ? 0 : $line['grant_view'],
            'grant_update' => empty($line['grant_update']) ? 0 : $line['grant_update'],
            'grant_delete' => empty($line['grant_delete']) ? 0 : $line['grant_delete'],
          ];
          if ($grant['grant_view'] || $grant['grant_update'] || $grant['grant_delete']) {
            $grants[] = $grant;
          }
        }
      }
    }
    // Save role and user grants to our own table.
    \Drupal::database()->delete('nodeaccess')
      ->condition('nid', $nid)
      ->execute();
    foreach ($grants as $grant) {
      $id = db_insert('nodeaccess')
        ->fields([
          'nid' => $nid,
          'gid' => $grant['gid'],
          'realm' => $grant['realm'],
          'grant_view' => $grant['grant_view'],
          'grant_update' => $grant['grant_update'],
          'grant_delete' => $grant['grant_delete'],
        ])
        ->execute();
    }
    \Drupal::entityTypeManager()->getAccessControlHandler('node')->writeGrants($node);
    drupal_set_message($this->t('Grants saved.'));

    $tags = ['node:' . $node->id()];
    Cache::invalidateTags($tags);
  }

  /**
   * Helper function to search usernames.
   */
  public function searchUser(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $form_state->setRebuild();
    $form_state->setStorage($values);
  }

}
