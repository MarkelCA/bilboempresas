<?php

$databases['default']['default'] = array (
  'database' => 'bilboempresas',
  'username' => 'produccion',
  'password' => 'produccion',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);


$settings['trusted_host_patterns'] = [
  '^desarrollo\.com$',
  '^.+\.desarrollo\.com$',
];


$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
if (class_exists('Kint')){
  \Kint::$max_depth = 4;
}

$settings['skip_permissions_hardening'] = TRUE;

