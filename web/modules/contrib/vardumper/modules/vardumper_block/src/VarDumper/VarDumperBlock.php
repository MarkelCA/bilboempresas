<?php

namespace Drupal\vardumper_block\VarDumper;

use Drupal\Core\Render\Markup;
use Drupal\vardumper\VarDumper\VarDumperDebug;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * The VarDumperBlock class.
 */
class VarDumperBlock extends VarDumperDebug {

  /**
   * The Session service.
   *
   * @var Session
   */
  protected $session;

  /**
   * {@inheritdoc}.
   */
  public function __construct(SessionInterface $session) {
    $this->session = $session;
  }

  /**
   * {@inheritdoc}.
   */
  public function dump($var, $name = '') {
    if (!$this->hasPermission()) {
      return;
    }
    $html = $this->getHeaders($name, $this->getDebugInformation()) . $this->getDebug($var);
    $this->session->getFlashBag()->add('vardumper', Markup::create($html));
  }

}
