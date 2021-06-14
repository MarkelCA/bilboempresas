<?php
// drush php-script deleteNoticias to delete all the Noticias type nodes
$controller = new Drupal\noticias\Controller\ControllerNoticias; 
$controller->drop_news();
