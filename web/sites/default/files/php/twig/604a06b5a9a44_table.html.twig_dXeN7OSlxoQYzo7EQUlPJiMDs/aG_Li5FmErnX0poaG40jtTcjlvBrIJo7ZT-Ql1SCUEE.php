<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/gin/templates/dataset/table.html.twig */
class __TwigTemplate_e27d49758085a7a188f9ecf1bd23ac1e0a338b7da14930c09d5a1028711198b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 44, "for" => 48, "set" => 66];
        $filters = ["escape" => 43, "render" => 64, "clean_class" => 74];
        $functions = ["cycle" => 92];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'render', 'clean_class'],
                ['cycle']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 42
        echo "<div class=\"layer-wrapper\">
  <table";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 44
        if (($context["caption"] ?? null)) {
            // line 45
            echo "      <caption>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null)), "html", null, true);
            echo "</caption>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colgroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 49
            echo "      ";
            if ($this->getAttribute($context["colgroup"], "cols", [])) {
                // line 50
                echo "        <colgroup";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["colgroup"], "attributes", [])), "html", null, true);
                echo ">
          ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["colgroup"], "cols", []));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 52
                    echo "            <col";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["col"], "attributes", [])), "html", null, true);
                    echo " />
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "        </colgroup>
      ";
            } else {
                // line 56
                echo "        <colgroup";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["colgroup"], "attributes", [])), "html", null, true);
                echo " />
      ";
            }
            // line 58
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
    ";
        // line 60
        if (($context["header"] ?? null)) {
            // line 61
            echo "      <thead>
        <tr>
          ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 64
                echo "            ";
                if (twig_in_filter("<a", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["cell"], "content", []))))) {
                    // line 65
                    echo "              ";
                    // line 66
                    $context["cell_classes"] = [0 => "th__item", 1 => (($this->getAttribute(                    // line 68
$context["cell"], "active_table_sort", [])) ? ("is-active") : (""))];
                    // line 71
                    echo "            ";
                } else {
                    // line 72
                    echo "              ";
                    // line 73
                    $context["cell_classes"] = [0 => ("th__" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 74
$context["cell"], "content", []))))), 1 => (($this->getAttribute(                    // line 75
$context["cell"], "active_table_sort", [])) ? ("is-active") : (""))];
                    // line 78
                    echo "            ";
                }
                // line 79
                echo "            <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["cell"], "attributes", []), "addClass", [0 => ($context["cell_classes"] ?? null)], "method")), "html", null, true);
                echo ">";
                // line 80
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "content", [])), "html", null, true);
                // line 81
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                echo ">
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </tr>
      </thead>
    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if (($context["rows"] ?? null)) {
            // line 88
            echo "      <tbody>
        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 90
                echo "          ";
                // line 91
                $context["row_classes"] = [0 => (( !                // line 92
($context["no_striping"] ?? null)) ? (twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index0", [])))) : (""))];
                // line 95
                echo "          <tr";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
                echo ">
            ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 97
                    echo "              ";
                    $context["currentIndex"] = $this->getAttribute($context["loop"], "index", []);
                    // line 98
                    echo "              ";
                    $context["theadValue"] = null;
                    // line 99
                    echo "
              ";
                    // line 100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 101
                        echo "                ";
                        if (($this->getAttribute($context["loop"], "index", []) == ($context["currentIndex"] ?? null))) {
                            // line 102
                            echo "                  ";
                            if (twig_in_filter("<a", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["value"], "content", []))))) {
                                // line 103
                                echo "                    ";
                                $context["theadValue"] = "td__item";
                                // line 104
                                echo "                  ";
                            } else {
                                // line 105
                                echo "                    ";
                                $context["theadValue"] = \Drupal\Component\Utility\Html::getClass($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["value"], "content", []))));
                                // line 106
                                echo "                  ";
                            }
                            // line 107
                            echo "                ";
                        }
                        // line 108
                        echo "              ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "
              ";
                    // line 110
                    $context["cell_classes"] = [0 => ((($context["theadValue"] ?? null)) ? (("td__" . $this->sandbox->ensureToStringAllowed(($context["theadValue"] ?? null)))) : (""))];
                    // line 111
                    echo "
              <";
                    // line 112
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["cell"], "attributes", []), "addClass", [0 => ($context["cell_classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    // line 113
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "content", [])), "html", null, true);
                    // line 114
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                    echo ">
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "          </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "      </tbody>
    ";
        } elseif (        // line 119
($context["empty"] ?? null)) {
            // line 120
            echo "      <tbody>
        <tr class=\"odd\">
          <td colspan=\"";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_columns"] ?? null)), "html", null, true);
            echo "\" class=\"empty message\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "</td>
        </tr>
      </tbody>
    ";
        }
        // line 126
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 127
            echo "      <tfoot>
        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 129
                echo "          <tr";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
                echo ">
            ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", []));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 131
                    echo "              <";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "attributes", [])), "html", null, true);
                    echo ">";
                    // line 132
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "content", [])), "html", null, true);
                    // line 133
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                    echo ">
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "      </tfoot>
    ";
        }
        // line 139
        echo "  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/dataset/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 139,  387 => 137,  380 => 135,  371 => 133,  369 => 132,  364 => 131,  360 => 130,  355 => 129,  351 => 128,  348 => 127,  345 => 126,  336 => 122,  332 => 120,  330 => 119,  327 => 118,  312 => 116,  295 => 114,  293 => 113,  289 => 112,  286 => 111,  284 => 110,  281 => 109,  267 => 108,  264 => 107,  261 => 106,  258 => 105,  255 => 104,  252 => 103,  249 => 102,  246 => 101,  229 => 100,  226 => 99,  223 => 98,  220 => 97,  203 => 96,  198 => 95,  196 => 92,  195 => 91,  193 => 90,  176 => 89,  173 => 88,  171 => 87,  168 => 86,  163 => 83,  154 => 81,  152 => 80,  147 => 79,  144 => 78,  142 => 75,  141 => 74,  140 => 73,  138 => 72,  135 => 71,  133 => 68,  132 => 66,  130 => 65,  127 => 64,  123 => 63,  119 => 61,  117 => 60,  114 => 59,  108 => 58,  102 => 56,  98 => 54,  89 => 52,  85 => 51,  80 => 50,  77 => 49,  73 => 48,  70 => 47,  64 => 45,  62 => 44,  58 => 43,  55 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/dataset/table.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/gin/templates/dataset/table.html.twig");
    }
}
