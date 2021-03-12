<?php

namespace Drupal\ckeditor_div\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "default ckeditor button" plugin.
 *
 * NOTE: The plugin ID ('id' key) corresponds to the CKEditor plugin name.
 * It is the first argument of the CKEDITOR.plugins.add() function in the
 * plugin.js file.
 *
 * @CKEditorPlugin(
 *   id = "div",
 *   label = @Translation("Div Container Manager")
 * )
 */
class DivPlugin extends CKEditorPluginBase {

  /**
   *  Get path to library folder.
   */
  public function getLibraryPath() {
    return 'libraries/div';
  }

  /**
   * {@inheritdoc}
   *
   * NOTE: The keys of the returned array corresponds to the CKEditor button
   * names. They are the first argument of the editor.ui.addButton() or
   * editor.ui.addRichCombo() functions in the plugin.js file.
   */
  public function getButtons() {
    // Make sure that the path to the image matches the file structure of
    // the CKEditor plugin you are implementing.
    return [
      'CreateDiv' => [
        'label' => t('Create Div'),
        'image' => $this->getLibraryPath() . '/icons/creatediv.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return $this->getLibraryPath() . '/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
