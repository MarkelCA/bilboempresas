INTRODUCTION
------------
This module enables the BiDi plugin from CKEditor.com in your WYSIWYG.
The BiDi CKEditor plugin makes it possible to change the text direction
(HTML "dir" attribute) for a block-level content element ( such as a
paragraph, header, table or list ). It is useful for working with
bi-directional language content.

REQUIREMENTS
------------
CKEditor Module.

INSTALLATION
------------
1. Download this Drupal module (ckeditor_bidi) from:
   https://www.drupal.org/project/ckeditor_bidi
2. Place it in a proper place in your Drupal installation files tree, typically
   inside /modules directory. See
   https://www.drupal.org/docs/8/extending-drupal-8/installing-modules
   for details of other optional locations.
3. From version 8.x-2.x there is no need to manually download the CKEditor
   JavaScript BiDi plugin it is included with the module, inside its js
    directory.
4. Enable "CKEditor BiDi Buttons" module in Admin > Extend  (/admin/modules).
5. Configure/Activate: Go to admin section /admin/config/content/formats
   select text format to configure and activate BiDi buttons by dragging them
   into active buttons area of WYSIWYG toolbar.
