<?php

namespace Drupal\add_card_block\Controller;

use Drupal\Core\Controller\ControllerBase;

class EditCardController extends ControllerBase {

  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => \Drupal::service('renderer')->render(['#type' => 'block', '#id' => 'edit_card_block']),
    ];
  }

}
