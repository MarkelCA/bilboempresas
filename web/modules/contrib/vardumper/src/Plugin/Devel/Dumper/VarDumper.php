<?php

namespace Drupal\vardumper\Plugin\Devel\Dumper;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\devel\Plugin\Devel\Dumper\VarDumper as DevelVarDumper;
use Drupal\vardumper\VarDumper\Dumper\HtmlDrupalDumper;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

/**
 * Provides a Symfony VarDumper dumper plugin.
 *
 * @DevelDumper(
 *     id="var_dumper",
 *     label=@Translation("Symfony var-dumper"),
 *     description=@Translation("Wrapper for <a href='https://github.com/symfony/var-dumper'>Symfony var-dumper</a> debugging tool through <a href='https://drupal.org/project/vardumper'>VarDumper module</a>."),
 * )
 */
class VarDumper extends DevelVarDumper implements ContainerFactoryPluginInterface {

  /**
   * @var \Drupal\vardumper\VarDumper\Dumper\HtmlDrupalDumper
   */
  protected $dumper;

  /**
   * These are the pattern lines used in the header, before displaying the export.
   *
   * @var string
   */
  protected $header1 = '<em>Dump called from <strong>%s</strong>, line <strong>%d</strong> at <strong>%s</strong>.</em>';
  protected $header2 = '<em><strong>%s</strong> :: Dump called from <strong>%s</strong>, line <strong>%d</strong> at <strong>%s</strong>.</em>';

  /**
   * VarDumper constructor.
   *
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @param \Drupal\vardumper\VarDumper\Dumper\HtmlDrupalDumper $dumper
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, HtmlDrupalDumper $dumper) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->dumper = $dumper;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('vardumper_html_drupal_dumper')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function export($input, $name = NULL) {
    $cloner = $this->getVarCloner();
    $dumper = 'cli' === \PHP_SAPI ? new CliDumper() : $this->dumper;

    $output = fopen('php://memory', 'r+b');
    $dumper->dump($cloner->cloneVar($input), $output);
    $output = stream_get_contents($output, -1, 0);

    $html = $this->getHeaders($name, $this->getDebugInformation()) . $output;

    return $this->setSafeMarkup($html);
  }

  /**
   * Get information for the getHeaders method.
   */
  public function getDebugInformation() {
    $_ = array_reverse(debug_backtrace());

    while ($d = array_pop($_)) {
      if ((mb_strpos($d['file'], 'src/VarDumper') === FALSE) && (mb_strpos($d['file'], 'vardumper') === FALSE)) {
        break;
      }
    }

    return $d;
  }

  /**
   * Generate headers.
   */
  public function getHeaders($name, $d) {
    $time = explode(' ', microtime());
    $time = date('H:i:s') . '.' . round($time[0], 4) * 10000;

    $result = sprintf($this->header1, $d['file'], $d['line'], $time);

    if (!empty($name)) {
      $result = sprintf($this->header2, $name, $d['file'], $d['line'], $time);
    }

    return $result;
  }

  /**
   * Get the VarCloner.
   *
   * @return \Symfony\Component\VarDumper\Cloner\VarCloner
   */
  private function getVarCloner() {
    $cloner = new VarCloner();
    $myCasters = [
      'Drupal\Core\Session\UserSession' => 'Drupal\vardumper\Caster\DrupalCaster::castUser',
    ];
    $cloner->addCasters($myCasters);

    return $cloner;
  }

}
