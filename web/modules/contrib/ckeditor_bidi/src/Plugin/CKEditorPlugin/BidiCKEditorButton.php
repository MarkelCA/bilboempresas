<?php

namespace Drupal\ckeditor_bidi\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "bidi" plugin.
 *
 * NOTE: The plugin ID ('id' key) corresponds to the CKEditor plugin name.
 * It is the first argument of the CKEDITOR.plugins.add() function in the
 * plugin.js file.
 *
 * @CKEditorPlugin(
 *   id = "bidi",
 *   label = @Translation("Bidi CKEditor Buttons")
 * )
 */
class BidiCKEditorButton extends CKEditorPluginBase {

  /**
   * Implements CKEditorPluginInterface::getButtons().
   *
   * Returns the buttons that this plugin provides, along with metadata.
   *
   * The metadata is used by the CKEditor module to generate a visual CKEditor
   * toolbar builder UI.
   *
   * @return array
   *   An array of buttons that are provided by this plugin. This will
   *   only be used in the administrative section for assembling the toolbar.
   *   Each button should be keyed by its CKEditor button name (you can look up
   *   the button name up in the plugin.js file), and should contain an array of
   *   button properties, including:
   *   - label: A human-readable, translated button name.
   *   - image: An image for the button to be used in the toolbar.
   *   - image_rtl: If the image needs to have a right-to-left version, specify
   *     an alternative file that will be used in RTL editors.
   *   - image_alternative: If this button does not render as an image, specify
   *     an HTML string representing the contents of this button.
   *   - image_alternative_rtl: Similar to image_alternative, but a
   *     right-to-left version.
   *   - attributes: An array of HTML attributes which should be added to this
   *     button when rendering the button in the administrative section for
   *     assembling the toolbar.
   *   - multiple: Boolean value indicating if this button may be added multiple
   *     times to the toolbar. This typically is only applicable for dividers
   *     and group indicators.
   *
   *   NOTE: The keys of the returned array corresponds to the CKEditor button
   *   names. They are the first argument of the editor.ui.addButton() or
   *   editor.ui.addRichCombo() functions in the plugin.js file.
   */
  public function getButtons() {
    // Make sure that the path to the image matches the file structure of
    // the CKEditor plugin you are implementing.
    $path = drupal_get_path('module', 'ckeditor_bidi') . '/js/plugins/bidi';

    return [
      'BidiLtr' => [
        'label' => $this->t('Text direction from left to right'),
        'image' => $path . '/icons/bidiltr.png',
      ],
      'BidiRtl' => [
        'label' => $this->t('Text direction from right to left'),
        'image' => $path . '/icons/bidirtl.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'ckeditor_bidi') . '/js/plugins/bidi/plugin.js';
  }

  /**
   * Implements CKEditorPluginInterface::isInternal().
   *
   * Indicates if this plugin is part of the optimized CKEditor build.
   *
   * Plugins marked as internal are implicitly loaded as part of CKEditor.
   *
   * @return bool
   *   The value.
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
