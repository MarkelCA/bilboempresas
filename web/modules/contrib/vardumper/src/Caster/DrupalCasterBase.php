<?php

namespace Drupal\vardumper\Caster;

/**
 * Class DrupalCasterBase.
 */
class DrupalCasterBase {
  protected static function generateLink($url, $name) {
    return "link:{$url}|{$name}";
  }

}
