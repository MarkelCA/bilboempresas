# Vardumper for Drupal 8

Provides a way to display PHP variables in a pretty way.

By default, the module display the output in the message zone, just like the other common debugging modules.
If you enable the submodules (see below), you'll be able to "dump" in other locations like in a Drupal Block, the Drupal's watchdog or in the console.

Make sure to have the required Symfony libraries to get this module working.

See the examples below on how to use it, it's very easy to use.

## Installation

The module is relying on the VarDumper and http-foundation components of the Symfony project.
There easiest way to install this module is with composer. Here are the commands to run:

* composer config repositories.drupal composer https://packages.drupal.org/8
* composer require drupal/vardumper
* drush en vardumper -y
* Once the module and/or the submodules are enabled, don't forget to check for the new user permissions.

## Main module

* vardumper: Base module for displaying debug in the Drupal's message zone (via drupal_set_message)

## Sub modules

* vardumper_block: allows you to debug and use a Drupal Block to see the result.
* vardumper_console: allows you to debug in the console.
* vardumper_watchdog: allows you to debug and use the Drupal Watchdog to see the result.

## API functions

* vardumper($var, $name = '', $type = 'block')
* vardumper($var, $name = '', $type = 'console')
* vardumper($var, $name = '', $type = 'message')
* vardumper($var, $name = '', $type = 'watchdog')
* vardumperBlock($var, $name = '')
* vardumperConsole($var, $name = '')
* vardumperMessage($var, $name = '')
* vardumperWatchdog($var, $name = '')

## API function aliases

* vdp() for vardumper().
* vdpb() for vardumperBlock().
* vdpc() for vardumperConsole().
* vdpm() for vardumperMessage().
* vdpw() for vardumperWatchdog().

## Services

* vardumper: the original Symfony service
* vardumper_block: Debug variables and put the result as content of the "Debugging block" that you can place in any region of your theme.
* vardumper_console: Debug variables in the console.
* vardumper_message: Debug variables using drupal_set_message().
* vardumper_watchdog: Debug your variable in the watchdog.

## How to use

Enable the module vardumper and/or vardumper_block and/or vardumper_watchdog then...

    // If you want to debug a variable, you can do the following commands...
    // They will output the result in a Drupal message (via drupal_set_message)
    vardumperMessage($variable);
    // or via a service:
    \Drupal::service('vardumper_message')->dump($variable);

    // You can also output the result of your variable in a Drupal block: "Debugging block"
    // Pay attention that if your block is not enabled, you won't see anything !
    vardumperBlock($variable);
    // or via a service:
    \Drupal::service('vardumper_block')->dump($variable);

    // You can give your debug a name by adding a second argument:
    vardumperBlock($variable, 'variable A');
    vardumperConsole($variable, 'variable B');
    vardumperMessage($variable, 'variable C');
    vardumperWatchdog($variable, 'variable D');
    \Drupal::service('vardumper_block')->dump($variable, 'Variable A');
    \Drupal::service('vardumper_console')->dump($variable, 'Variable B');
    \Drupal::service('vardumper_message')->dump($variable, 'Variable C');
    \Drupal::service('vardumper_watchdog')->dump($variable, 'Variable D');

    // You can use aliases too
    vdpm($variable, 'variable A');
    vdpb($variable, 'variable B');
    vdpc($variable, 'variable C');
    vdpw($variable, 'Variable D');

## Dependencies & requirements

* Service Container Symfony, submodule of Service Container
* Composer Manager is required, it allows you to process the composer.json file automatically.
* Composer: the command line tool to download the dependencies.

## Related modules

* Devel: with dpm(), dpr(), etc etc...

## Devel integration

Vardumper implements a dumper plugin for the Devel module.
Just install both Vardumper and Devel then go to Devel's configuration page (/admin/config/development/devel) and choose "Symfony var-dumper" in the "Variables Dumper" section.
From now on every output provided by Devel (kpr(), dpm(), entities inspection, ...) will use Vardumper to render the data.
If you also install Webprofiler (submodule of Devel), every reference to classes turns into a link that will open your IDE to the correct file (take a look at the Webprofiler readme to learn how to configure this feature).
