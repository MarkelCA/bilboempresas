<?php

namespace Drupal\vardumper\Caster;

use Symfony\Component\VarDumper\Caster\Caster;
use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * Class DrupalCaster.
 */
class DrupalCaster extends DrupalCasterBase {

  /**
   * @param $object
   * @param array $array
   * @param \Symfony\Component\VarDumper\Cloner\Stub $stub
   * @param $isNested
   *
   * @return array
   */
  public static function castUser($object, array $array, Stub $stub, $isNested) {
    foreach ($object->getRoles() as $key => $role) {
      $array[Caster::PREFIX_PROTECTED . 'roles'][$key] = static::generateLink('/admin/people/permissions/' . $role, $role);
    }

    return $array;
  }

}
