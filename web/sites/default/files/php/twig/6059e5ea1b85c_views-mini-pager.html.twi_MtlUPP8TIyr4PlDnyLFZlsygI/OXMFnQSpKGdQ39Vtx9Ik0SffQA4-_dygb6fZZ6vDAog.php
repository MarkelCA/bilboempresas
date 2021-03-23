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

/* core/themes/claro/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_3936839e94d4830e04000386debf6bbdefd138023d215dee567c7f4d1ea1a88b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "if" => 20, "spaceless" => 25];
        $filters = ["escape" => 21, "t" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'spaceless'],
                ['escape', 't'],
                []
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
        // line 14
        $context["pager_action_classes"] = [0 => "pager__link", 1 => "pager__link--mini", 2 => "pager__link--action-link"];
        // line 20
        if (($this->getAttribute(($context["items"] ?? null), "previous", []) || $this->getAttribute(($context["items"] ?? null), "next", []))) {
            // line 21
            echo "  <nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "pager"], "method"), "setAttribute", [0 => "role", 1 => "navigation"], "method"), "setAttribute", [0 => "aria-labelledby", 1 => ($context["heading_id"] ?? null)], "method")), "html", null, true);
            echo ">
    <h4";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method"), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "pager__items", 1 => "js-pager__items"], "method")), "html", null, true);
            echo ">
      ";
            // line 24
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 25
                echo "        ";
                ob_start(function () { return ''; });
                // line 26
                echo "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\">
            <a";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", []), "addClass", [0 => ($context["pager_action_classes"] ?? null)], "method"), "setAttribute", [0 => "title", 1 => t("Go to previous page")], "method"), "setAttribute", [0 => "href", 1 => $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])], "method")), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 32
                echo "      ";
            }
            // line 33
            echo "
      ";
            // line 34
            if ($this->getAttribute(($context["items"] ?? null), "current", [])) {
                // line 35
                echo "        <li class=\"pager__item pager__item--mini pager__item--current\">
          <span class=\"visually-hidden\">
            ";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Current page"));
                echo "
          </span>
          ";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "current", [])), "html", null, true);
                echo "
        </li>
      ";
            }
            // line 42
            echo "
      ";
            // line 43
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 44
                echo "        ";
                ob_start(function () { return ''; });
                // line 45
                echo "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--next\">
            <a";
                // line 46
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", []), "addClass", [0 => ($context["pager_action_classes"] ?? null)], "method"), "setAttribute", [0 => "title", 1 => t("Go to next page")], "method"), "setAttribute", [0 => "href", 1 => $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])], "method")), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 47
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 51
                echo "      ";
            }
            // line 52
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 52,  138 => 51,  131 => 47,  127 => 46,  124 => 45,  121 => 44,  119 => 43,  116 => 42,  110 => 39,  105 => 37,  101 => 35,  99 => 34,  96 => 33,  93 => 32,  86 => 28,  82 => 27,  79 => 26,  76 => 25,  74 => 24,  70 => 23,  64 => 22,  59 => 21,  57 => 20,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/views/views-mini-pager.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/views/views-mini-pager.html.twig");
    }
}
