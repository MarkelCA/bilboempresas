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

/* core/themes/claro/templates/fieldset.html.twig */
class __TwigTemplate_0b04350fb80a53d5049cbfbde3db5a25727e0db82efaa8cbfaaa4c310bc897c9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "if" => 50];
        $filters = ["escape" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
        // line 11
        $context["classes"] = [0 => "fieldset", 1 => (($this->getAttribute(        // line 13
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method")) ? ("fieldset--group") : ("")), 2 => "js-form-item", 3 => "form-item", 4 => "js-form-wrapper", 5 => "form-wrapper"];
        // line 21
        $context["wrapper_classes"] = [0 => "fieldset__wrapper", 1 => (($this->getAttribute(        // line 23
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method")) ? ("fieldset__wrapper--group") : (""))];
        // line 27
        $context["legend_span_classes"] = [0 => "fieldset__label", 1 => (($this->getAttribute(        // line 29
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method")) ? ("fieldset__label--group") : ("")), 2 => ((        // line 30
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 31
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 35
        $context["legend_classes"] = [0 => "fieldset__legend", 1 => ((($this->getAttribute(        // line 37
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method") &&  !$this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method"))) ? ("fieldset__legend--group") : ("")), 2 => (($this->getAttribute(        // line 38
($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method")) ? ("fieldset__legend--composite") : ("")), 3 => (((        // line 39
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 43
        $context["description_classes"] = [0 => "fieldset__description"];
        // line 47
        echo "
<fieldset";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 50
        echo "  ";
        if ($this->getAttribute(($context["legend"] ?? null), "title", [])) {
            // line 51
            echo "  <legend";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["legend"] ?? null), "attributes", []), "addClass", [0 => ($context["legend_classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <span";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["legend_span"] ?? null), "attributes", []), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["legend"] ?? null), "title", [])), "html", null, true);
            echo "</span>
  </legend>
  ";
        }
        // line 55
        echo "
  <div";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 57
        if (($context["inline_items"] ?? null)) {
            // line 58
            echo "      <div class=\"container-inline\">
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (($context["prefix"] ?? null)) {
            // line 62
            echo "      <span class=\"fieldset__prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "</span>
    ";
        }
        // line 64
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
    ";
        // line 65
        if (($context["suffix"] ?? null)) {
            // line 66
            echo "      <span class=\"fieldset__suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
    ";
        }
        // line 68
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 69
            echo "      <div class=\"fieldset__error-message\">
        ";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 73
        echo "    ";
        if ($this->getAttribute(($context["description"] ?? null), "content", [])) {
            // line 74
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if (($context["inline_items"] ?? null)) {
            // line 78
            echo "      </div>
    ";
        }
        // line 80
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 80,  161 => 78,  159 => 77,  156 => 76,  148 => 74,  145 => 73,  139 => 70,  136 => 69,  133 => 68,  127 => 66,  125 => 65,  120 => 64,  114 => 62,  112 => 61,  109 => 60,  105 => 58,  103 => 57,  99 => 56,  96 => 55,  88 => 52,  83 => 51,  80 => 50,  76 => 48,  73 => 47,  71 => 43,  69 => 39,  68 => 38,  67 => 37,  66 => 35,  64 => 31,  63 => 30,  62 => 29,  61 => 27,  59 => 23,  58 => 21,  56 => 13,  55 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/fieldset.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/fieldset.html.twig");
    }
}
