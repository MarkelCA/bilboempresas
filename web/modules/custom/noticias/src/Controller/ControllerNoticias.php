<?php
namespace Drupal\noticias\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;

class ControllerNoticias extends ControllerBase {

    public function crear_noticia($campos, $datos) {

        $title = $datos[0];
        $body = $datos[1];
        $slug = $datos[2];
        $date = $datos[3];
        $status = $datos[4];

        $node = Node::create([
          'type'        => 'noticia',
          'title'       => $title,
          'body' => [
              'value' => $body,
              'format' => 'basic_html'
          ],
          'created' =>  strtotime($date), 
          'status' => $status,
          'path' => [
              'alias' => '/'.$slug
          ]
        ]);

        $node->save();
    }

    /*
     * En $ruta se indica desde la carpeta public
     */
    public function import_data($ruta) {
        // Numero maximo de articulos creados como prueba 
        $MAXIMO = 15;
        $fila = 1;
        $campos = [];
        if (($gestor = fopen("public://$ruta", "r")) !== FALSE) {
            while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {

                // Detener el import para devel
                if($fila === $MAXIMO) break;

                $numero = count($datos);
                //echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
                for ($c=0; $c < $numero; $c++) {

                    if($fila === 1 ) {
                        $campos = explode(';', $datos[$c]);
                        //echo $datos[$c] . "<br />\n";
                    }
                    else {
                        $datos_importados[] = $datos[$c];
                    }
                }

                if($fila > 1 ) 
                    $noticia = $this->crear_noticia($campos, $datos);

                $fila++;
            }
            fclose($gestor);
        }

        return $noticia;
      }

}
