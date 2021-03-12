This module enables the Div Container Manager plugin for CKEditor.

Installation
------------

### With Composer

This assumes you've already configured your composer.json file to install libraries into your /libraries folder. See [Using Composer to manage Drupal site dependencies](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies "Using Composer to manage Drupal site dependencies") for reference.

Add the cksource/div package information to your project's composer.json file, inside the repositories block:

        "repositories": [
            {
                "type": "package",
                "package": {
                    "name": "cksource/div",
                    "version": "4.8.0",
                    "type": "drupal-library",
                    "dist": {
                        "url": "https://download.ckeditor.com/div/releases/div_4.8.0.zip",
                        "type": "zip"
                    }
                }
            }
        ]
    

Then use the following composer require commands:

    composer require cksource/div:^4.8
    composer require drupal/cksource_div

### Without Composer

Download the [CKEditor Div plugin](https://download.ckeditor.com/div/releases/div_4.8.0.zip "CKEditor Div plugin"), unzip it, and place the folder inside your /libraries folder. Make sure the plugin.js file is located at `/libraries/div/plugin.js`.

Download the module and [install it in the usual way](https://www.drupal.org/docs/8/extending-drupal-8/installing-drupal-8-modules "Installing Drupal 8 Modules").