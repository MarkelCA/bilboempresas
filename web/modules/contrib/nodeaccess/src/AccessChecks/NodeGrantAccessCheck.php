<?php

namespace Drupal\nodeaccess\AccessChecks;

use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\node\Entity\Node;

/**
 * A custom access check for grants form.
 */
class NodeGrantAccessCheck implements AccessInterface {

  /**
   * A custom access check.
   */
  public function access($node, AccountInterface $account) {
    if (!$node) {
      return AccessResult::forbidden();
    }
    $nid = $node;
    $node = Node::load($nid);

    $config = \Drupal::configFactory()->get('nodeaccess.settings');
    $allowed_types = $config->get('allowed_types');
    if ($node && isset($allowed_types[$node->getType()]) && !empty($allowed_types[$node->getType()]) &&
        ($account->hasPermission('grant node permissions') || $account->hasPermission('administer nodeaccess'))) {
      return AccessResult::Allowed();
    }
    return AccessResult::forbidden();
  }

}
