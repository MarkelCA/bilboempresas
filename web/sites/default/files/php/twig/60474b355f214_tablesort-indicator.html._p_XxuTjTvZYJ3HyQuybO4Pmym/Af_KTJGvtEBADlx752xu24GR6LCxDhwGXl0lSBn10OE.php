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

/* core/themes/claro/templates/admin/tablesort-indicator.html.twig */
class __TwigTemplate_f1672cb47906e03f27a82776a119359985f4c2249033d5d824a25850a21bf622 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 19];
        $filters = ["escape" => 18, "t" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 13
        $context["classes"] = [0 => "tablesort", 1 => ("tablesort--" . $this->sandbox->ensureToStringAllowed(        // line 15
($context["style"] ?? null)))];
        // line 18
        echo "<span";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 19
        if (twig_in_filter(($context["style"] ?? null), [0 => "asc", 1 => "desc"])) {
            // line 20
            echo "    <span class=\"visually-hidden\">
      ";
            // line 21
            if ((($context["style"] ?? null) == "asc")) {
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sort ascending"));
                echo "
      ";
            } else {
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sort descending"));
                echo "
      ";
            }
            // line 26
            echo "    </span>
  ";
        }
        // line 28
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  80 => 26,  75 => 24,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  58 => 18,  56 => 15,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/admin/tablesort-indicator.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/admin/tablesort-indicator.html.twig");
    }
}
