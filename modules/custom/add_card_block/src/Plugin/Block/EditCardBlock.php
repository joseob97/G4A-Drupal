<?php

namespace Drupal\add_card_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\node\Entity\Node;

/**
 * Provides an 'Edit Card' Block.
 *
 * @Block(
 *   id = "edit_card_block",
 *   admin_label = @Translation("Edit Card Block"),
 * )
 */
class EditCardBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $nid = \Drupal::request()->query->get('nid');
    if ($nid && is_numeric($nid)) {
      $node = Node::load($nid);
      if ($node && $node->bundle() == 'tarjeta') {
        
        return \Drupal::service('entity.form_builder')->getForm($node, 'default');
      }
    }
    return [
      '#markup' => $this->t('No valid card node specified.'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    $nid = \Drupal::request()->query->get('nid');
    if ($nid && is_numeric($nid)) {
      $node = Node::load($nid);
      if ($node && $node->bundle() == 'tarjeta' && $node->getOwnerId() == $account->id()) {
        return AccessResult::allowed();
      }
    }
    return AccessResult::forbidden();
  }

}
