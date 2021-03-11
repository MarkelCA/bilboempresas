<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;

class ControllerOwner extends ControllerBase {

    public function edit() {
        return [
            '#markup' => 'editing'
        ];

    }

}
