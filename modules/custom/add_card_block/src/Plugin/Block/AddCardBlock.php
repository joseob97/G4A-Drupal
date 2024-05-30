<?php

namespace Drupal\add_card_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\node\Entity\Node;

/**
 * Provides a 'Add Card' Block.
 *
 * @Block(
 *   id = "add_card_block",
 *   admin_label = @Translation("Add Card Block"),
 * )
 */
class AddCardBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    
    $node = Node::create(['type' => 'tarjeta']);
    
    return \Drupal::service('entity.form_builder')->getForm($node, 'default');
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    
    return AccessResult::allowedIf($account->isAuthenticated());
  }

}
