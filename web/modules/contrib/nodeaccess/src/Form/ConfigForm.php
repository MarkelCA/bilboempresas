<?php

namespace Drupal\nodeaccess\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\NodeType;
use Drupal\Component\Utility\HTML;

/**
 * Builds the configuration form.
 */
class ConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    return ['nodeaccess.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'nodeaccess_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $settings = $this->config('nodeaccess.settings');
    $role_alias = $settings->get('role_alias');
    $allowed_grants = $settings->get('grants');
    $allowed_types = $settings->get('allowed_types');
    $role_header = [
      $this->t('Allow Role'),
      $this->t('Alias'),
      $this->t('Weight'),
    ];
    $header = [
      $this->t('ROLE'),
      $this->t('VIEW'),
      $this->t('EDIT'),
      $this->t('DELETE'),
    ];
    $node_types = NodeType::loadMultiple();
    $roles = user_roles();

    $form['priority'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Give node grants priority'),
      '#default_value' => $settings->get('priority'),
      '#description' => $this->t('If you are only using this access control module, you can safely ignore this. If you are using multiple access control modules, and you want the grants given on individual nodes to override any grants given by other modules, you should check this box.'),
    ];

    // Select whether to preserve hidden grants.
    $form['preserve'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Preserve hidden grants'),
      '#default_value' => $settings->get('preserve'),
      '#description' => '<small>' . $this->t('If you check this box, any hidden grants are preserved when you save grants. Otherwise all grants users are not allowed to view or edit are revoked on save.') . '</small>',
    ];

    // Select permissions you want to allow users to view and edit.
    $form['grants'] = [
      '#type' => 'details',
      '#open' => FALSE,
      '#title' => $this->t('Allowed Grants'),
      '#tree' => TRUE,
      '#description' => '<small>' . $this->t('The selected grants will be listed on individual node grants. If you wish for certain grants to be hidden from users on the node grants tab, make sure they are not selected here.') . '</small>',
    ];
    $form['grants']['view'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('View'),
      '#default_value' => $allowed_grants['view'],
    ];
    $form['grants']['edit'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Edit'),
      '#default_value' => $allowed_grants['edit'],
    ];
    $form['grants']['delete'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Delete'),
      '#default_value' => $allowed_grants['delete'],
    ];

    // Select roles the permissions of which you want to allow users to
    // view and edit, and the aliases and weights of those roles.
    $form['role'] = [
      '#type' => 'details',
      '#open' => FALSE,
      '#title' => $this->t('Allowed Roles'),
      '#tree' => TRUE,
      '#description' => $this->t('The selected roles will be listed on individual node grants. If you wish for certain roles to be hidden from users on the node grants tab, make sure they are not selected here. You may also provide an alias for each role to be displayed to the user and a weight to order them by. This is useful if your roles have machine-readable names not intended for human users.'),
    ];
    $form['role']['alias'] = [
      '#type' => 'table',
      '#header' => $role_header,
      '#tabledrag' => [
        [
          'action' => 'order',
          'relationship' => 'sibling',
          'group' => 'role-weight',
        ],
      ],
    ];
    foreach ($role_alias as $id => $role) {
      $form['role']['alias'][$id]['allow'] = [
        '#type' => 'checkbox',
        '#title' => HTML::escape($role['name']),
        '#default_value' => $role['allow'],
      ];
      $form['role']['alias'][$id]['alias'] = [
        '#type' => 'textfield',
        '#default_value' => $role['alias'],
        '#size' => 50,
        '#maxlength' => 50,
      ];
      $form['role']['alias'][$id]['weight'] = [
        '#type' => 'weight',
        '#default_value' => $role['weight'],
        '#delta' => 10,
        '#attributes' => ['class' => ['role-weight']],
      ];
      $form['role']['alias'][$id]['name'] = [
        '#type' => 'hidden',
        '#value' => $role['name'],
      ];
      $form['role']['alias'][$id]['#weight'] = $role['weight'];
      $form['role']['alias'][$id]['#attributes']['class'][] = 'draggable';
    }

    // Generate fieldsets for each node type.
    foreach ($node_types as $type => $bundle) {
      $user_perms = $settings->get($type);
      $form[$type] = [
        '#type' => 'details',
        '#open' => FALSE,
        '#title' => $bundle->label(),
        '#tree' => TRUE,
        '#description' => $this->t('The settings selected for the node author will define what permissions the node author has. This cannot be changed on individual node grants.'),
      ];

      $form[$type]['show'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Show grant tab for this node type'),
        '#default_value' => isset($allowed_types[$type]) ? $allowed_types[$type] : 0,
      ];

      $form[$type]['user_permissions'] = [
        '#type' => 'table',
        '#header' => $header,
      ];

      // Set default role permissions for node type.
      foreach ($roles as $id => $role) {
        $form[$type]['user_permissions'][$id] = [
          'label' => [
            '#plain_text' => $role->label(),
          ],
          'grant_view' => [
            '#type' => 'checkbox',
            '#default_value' => isset($user_perms[$id]['grant_view']) ? $user_perms[$id]['grant_view'] : 0,
          ],
          'grant_update' => [
            '#type' => 'checkbox',
            '#default_value' => isset($user_perms[$id]['grant_update']) ? $user_perms[$id]['grant_update'] : 0,
          ],
          'grant_delete' => [
            '#type' => 'checkbox',
            '#default_value' => isset($user_perms[$id]['grant_delete']) ? $user_perms[$id]['grant_delete'] : 0,
          ],
        ];
      }
      $form[$type]['user_permissions']['author'] = [
        'label' => [
          '#plain_text' => $this->t('Author'),
        ],
        'grant_view' => [
          '#type' => 'checkbox',
          '#default_value' => isset($user_perms['author']['grant_view']) ? $user_perms['author']['grant_view'] : 0,
        ],
        'grant_update' => [
          '#type' => 'checkbox',
          '#default_value' => isset($user_perms['author']['grant_update']) ? $user_perms['author']['grant_update'] : 0,
        ],
        'grant_delete' => [
          '#type' => 'checkbox',
          '#default_value' => isset($user_perms['author']['grant_delete']) ? $user_perms['author']['grant_delete'] : 0,
        ],
      ];

    }
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Update configuration.
    $values = $form_state->getValues();
    $node_types = NodeType::loadMultiple();
    $allowed_types = [];

    $settings = $this->config('nodeaccess.settings')
      ->set('priority', $values['priority'])
      ->set('preserve', $values['preserve'])
      ->set('grants', $values['grants']);
    foreach ($node_types as $type => $bundle) {
      $config = $values[$type]['user_permissions'];
      $allowed_types[$type] = $values[$type]['show'];
      $settings->set($type, $config);
    }
    $settings->set('allowed_types', $allowed_types);
    // Save allowed roles, role aliases and weights.
    $settings->set('role_alias', $values['role']['alias']);
    $settings->save();
    node_access_needs_rebuild(TRUE);
    parent::submitForm($form, $form_state);
  }

}
