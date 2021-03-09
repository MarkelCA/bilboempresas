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

/* core/themes/claro/templates/datetime-wrapper.html.twig */
class __TwigTemplate_06678f9dc2946b2d76e2b17005b48b7e49d27d3d0b0787ec90b03243895fa5bf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 12, "if" => 20];
        $filters = ["escape" => 21];
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
        // line 12
        $context["title_classes"] = [0 => "form-item__label", 1 => ((        // line 14
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 15
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => ((        // line 16
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 19
        echo "<div class=\"form-item form-datetime-wrapper\">
";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h4";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h4>
";
        }
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
";
        // line 24
        if (($context["errors"] ?? null)) {
            // line 25
            echo "  <div class=\"form-item__error-message\">
    ";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "
  </div>
";
        }
        // line 29
        if (($context["description"] ?? null)) {
            // line 30
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description_attributes"] ?? null), "addClass", [0 => "form-item__description"], "method")), "html", null, true);
            echo ">
    ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
            echo "
  </div>
";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  95 => 31,  90 => 30,  88 => 29,  82 => 26,  79 => 25,  77 => 24,  73 => 23,  65 => 21,  63 => 20,  60 => 19,  58 => 16,  57 => 15,  56 => 14,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/datetime-wrapper.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/datetime-wrapper.html.twig");
    }
}
