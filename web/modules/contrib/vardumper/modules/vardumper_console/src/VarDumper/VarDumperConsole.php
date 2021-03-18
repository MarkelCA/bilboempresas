<?php

namespace Drupal\vardumper_console\VarDumper;

use Drupal\vardumper\VarDumper\VarDumperDebug;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

/**
 * The VarDumperConsole class.
 */
class VarDumperConsole extends VarDumperDebug {

  /**
   * {@inheritdoc}.
   */
  public function dump($var, $name = '') {
    $cloner = new VarCloner();
    $dumper = new CliDumper('php://stdout');

    $html = $this->border(strip_tags($this->getHeaders($name, $this->getDebugInformation()))) . "\n";
    file_put_contents('php://stdout', $html);
    $dumper->dump($cloner->cloneVar($var));
  }

  /**
   * Helper method to add a border around the header in console.
   */
  private function border($string, $character = '*') {
    $string = $character . ' ' . $string . ' ' . $character;
    $line = str_repeat($character, mb_strlen($string));

    return implode("\n", [$line, $string, $line]);
  }

}
