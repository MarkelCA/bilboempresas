<?php
// drush php-script importData
// to use the function declared in ControllerNoticias.
$controller = new Drupal\noticias\Controller\ControllerNoticias; 
// First we delete all the new to reset the content type and dont get repeted news
$controller->drop_news();
$controller->import_noticias(10);
