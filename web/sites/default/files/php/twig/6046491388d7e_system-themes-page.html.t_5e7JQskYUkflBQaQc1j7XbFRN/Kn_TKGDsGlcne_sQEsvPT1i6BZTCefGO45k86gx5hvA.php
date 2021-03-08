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

/* core/themes/claro/templates/system-themes-page.html.twig */
class __TwigTemplate_b2cfe7ac8c2dfa277d434e24719acad6a5eb55e1b82066524813471d0f27c9fb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 37, "set" => 39, "if" => 50];
        $filters = ["escape" => 36, "safe_join" => 89, "t" => 103, "render" => 103];
        $functions = ["create_attribute" => 86];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join', 't', 'render'],
                ['create_attribute']
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
        // line 36
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 38
            echo "    ";
            // line 39
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 41
$context["theme_group"], "state", []))), 2 => "clearfix"];
            // line 45
            echo "
    ";
            // line 47
            $context["card_alignment"] = ((($this->getAttribute($context["theme_group"], "state", []) == "installed")) ? ("horizontal") : ("vertical"));
            // line 49
            echo "
    ";
            // line 50
            if ( !$this->getAttribute($context["loop"], "first", [])) {
                // line 51
                echo "      <hr>
    ";
            }
            // line 53
            echo "
    <div";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme_group"], "attributes", []), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "title", [])), "html", null, true);
            echo "</h2>
      <div class=\"card-list ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["card_alignment"] ?? null) == "horizontal")) ? ("card-list--two-cols") : ("card-list--four-cols")));
            echo "\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 58
                echo "          ";
                // line 59
                $context["theme_classes"] = [0 => (($this->getAttribute(                // line 60
$context["theme"], "is_default", [])) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 61
$context["theme"], "is_admin", [])) ? ("theme-admin") : ("")), 2 => "card", 3 => ("card--" . $this->sandbox->ensureToStringAllowed(                // line 63
($context["card_alignment"] ?? null))), 4 => "card-list__item"];
                // line 67
                echo "          ";
                // line 68
                $context["theme_title_classes"] = [0 => "card__content-item", 1 => "heading-f"];
                // line 73
                echo "          ";
                // line 74
                $context["theme_description_classes"] = [0 => "card__content-item"];
                // line 78
                echo "          <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["theme"], "attributes", []), "addClass", [0 => ($context["theme_classes"] ?? null)], "method"), "setAttribute", [0 => "aria-labelledby", 1 => $this->getAttribute($context["theme"], "title_id", [])], "method"), "setAttribute", [0 => "aria-describedby", 1 => (($this->getAttribute($context["theme"], "description_id", [])) ? ($this->getAttribute($context["theme"], "description_id", [])) : (null))], "method")), "html", null, true);
                echo ">
            ";
                // line 79
                if ($this->getAttribute($context["theme"], "screenshot", [])) {
                    // line 80
                    echo "              <div class=\"card__image\">
                ";
                    // line 81
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "screenshot", [])), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 84
                echo "            <div class=\"card__content-wrapper\">
              <div class=\"card__content\">
                <h3";
                // line 86
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["id" => $this->getAttribute($context["theme"], "title_id", [])]), "addClass", [0 => ($context["theme_title_classes"] ?? null)], "method")), "html", null, true);
                echo " id=";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "title_id", [])), "html", null, true);
                echo ">";
                // line 87
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "name", [])), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "version", [])), "html", null, true);
                // line 88
                if ($this->getAttribute($context["theme"], "notes", [])) {
                    // line 89
                    echo "                    (";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "notes", [])), ", "));
                    echo ")";
                }
                // line 91
                echo "</h3>

                ";
                // line 93
                if (($this->getAttribute($context["theme"], "description", []) && $this->getAttribute($context["theme"], "description_id", []))) {
                    // line 94
                    echo "                  <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["id" => (($this->getAttribute($context["theme"], "description_id", [])) ? ($this->getAttribute($context["theme"], "description_id", [])) : (null))]), "addClass", [0 => ($context["theme_description_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
                    ";
                    // line 95
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "description", [])), "html", null, true);
                    echo "
                  </div>";
                }
                // line 98
                echo "</div>

              <div class=\"card__footer\">
                ";
                // line 101
                if ($this->getAttribute($context["theme"], "module_dependencies", [])) {
                    // line 102
                    echo "                  <div class=\"theme-info__requires\">
                    ";
                    // line 103
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Requires: @module_dependencies", ["@module_dependencies" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "module_dependencies", [])))]));
                    echo "
                  </div>
                ";
                }
                // line 106
                echo "                ";
                // line 107
                echo "                ";
                if ($this->getAttribute($context["theme"], "incompatible", [])) {
                    // line 108
                    echo "                  <small class=\"incompatible\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "incompatible", [])), "html", null, true);
                    echo "</small>
                ";
                } else {
                    // line 110
                    echo "                    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "operations", [])), "html", null, true);
                    echo "
                ";
                }
                // line 112
                echo "              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "      </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 119,  224 => 116,  215 => 112,  209 => 110,  203 => 108,  200 => 107,  198 => 106,  192 => 103,  189 => 102,  187 => 101,  182 => 98,  177 => 95,  172 => 94,  170 => 93,  166 => 91,  161 => 89,  159 => 88,  155 => 87,  150 => 86,  146 => 84,  140 => 81,  137 => 80,  135 => 79,  130 => 78,  128 => 74,  126 => 73,  124 => 68,  122 => 67,  120 => 63,  119 => 61,  118 => 60,  117 => 59,  115 => 58,  111 => 57,  107 => 56,  103 => 55,  99 => 54,  96 => 53,  92 => 51,  90 => 50,  87 => 49,  85 => 47,  82 => 45,  80 => 41,  79 => 39,  77 => 38,  60 => 37,  55 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/system-themes-page.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/system-themes-page.html.twig");
    }
}
