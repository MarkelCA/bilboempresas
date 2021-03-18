<?php

namespace Drupal\vardumper_watchdog\VarDumper;

use Drupal\Component\Utility\Unicode;
use Drupal\vardumper\VarDumper\VarDumperDebug;

/**
 * The VarDumperWatchdog class.
 */
class VarDumperWatchdog extends VarDumperDebug {

  /**
   * {@inheritdoc}
   */
  public function dump($var, $name = '') {

    // Permission are not checked in this submodule, see 'View site reports' permission.
    $html = $this->getHeaders($name, $this->getDebugInformation()) . $this->getDebug($var);

    // Locale issue https://www.drupal.org/project/drupal/issues/1885192:
    // field locales_source.source is not suitable for long texts and huge config objects.
    if (\Drupal::moduleHandler()->moduleExists('locale') &&
      $length = Unicode::strlen($html) >= 64000) {
      \Drupal::logger('vardumper_watchdog')->debug(
        'Cannot log objects longer than 64Kb if Locale module is enabled. Currents size is @size. See <a href=https://www.drupal.org/project/drup al/issues/1885192>https://www.drupal.org/project/drupal/issues/1885192</a>. @excerpt...',
        ['@size' => $length, '@excerpt' => mb_substr(strip_tags($html), 0, 256)]
      );
    }
    else {
      \Drupal::logger('vardumper_watchdog')->debug($html);
    }
  }

}
