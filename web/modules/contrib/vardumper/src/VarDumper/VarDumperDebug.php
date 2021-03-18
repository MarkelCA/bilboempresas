<?php

namespace Drupal\vardumper\VarDumper;

use Drupal\vardumper\VarDumper\Dumper\HtmlDrupalDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

class VarDumperDebug {
  protected $header1 = '<em>Dump called from <strong>%s</strong>, line <strong>%d</strong> at <strong>%s</strong>.</em>';
  protected $header2 = '<em><strong>%s</strong> :: Dump called from <strong>%s</strong>, line <strong>%d</strong> at <strong>%s</strong>.</em>';

  public function getDebug($var) {
    $memory = fopen('php://memory', 'r+b');
    $cloner = new VarCloner();
    $dumper = 'cli' === \PHP_SAPI ? new CliDumper() : new HtmlDrupalDumper();
    $dumper->dump($cloner->cloneVar($var), $memory);

    return stream_get_contents($memory, -1, 0);
  }

  public function getDebugInformation() {
    $_ = array_reverse(debug_backtrace());

    while ($d = array_pop($_)) {
      if ((mb_strpos($d['file'], 'src/VarDumper') === FALSE) && (mb_strpos($d['file'], 'vardumper') === FALSE)) {
        break;
      }
    }

    return $d;
  }

  public function getHeaders($name, $d) {
    $time = explode(' ', microtime());
    $time = date('H:i:s') . '.' . round($time[0], 4) * 10000;

    $result = sprintf($this->header1, $d['file'], $d['line'], $time);

    if (!empty($name)) {
      $result = sprintf($this->header2, $name, $d['file'], $d['line'], $time);
    }

    return $result;
  }

  public function hasPermission() {
    return \Drupal::currentUser()->hasPermission('access vardumper information');
  }

}
