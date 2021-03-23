<?php
// drush php-script importData
// to use the function declared in ControllerNoticias.
$controller = new Drupal\noticias\Controller\ControllerNoticias; 
$controller->import_data();
