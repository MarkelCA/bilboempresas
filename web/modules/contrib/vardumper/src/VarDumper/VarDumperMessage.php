<?php

namespace Drupal\vardumper\VarDumper;

use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Render\Markup;

class VarDumperMessage extends VarDumperDebug {
  /**
   * The messenger.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;

  /**
   * {@inheritdoc}.
   */
  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  /**
   * {@inheritdoc}.
   */
  public function dump($var, $name = '') {
    if (!$this->hasPermission()) {
      return;
    }
    $html = $this->getHeaders($name, $this->getDebugInformation()) . $this->getDebug($var);

    $this->messenger->addStatus(Markup::create($html));
  }

}
