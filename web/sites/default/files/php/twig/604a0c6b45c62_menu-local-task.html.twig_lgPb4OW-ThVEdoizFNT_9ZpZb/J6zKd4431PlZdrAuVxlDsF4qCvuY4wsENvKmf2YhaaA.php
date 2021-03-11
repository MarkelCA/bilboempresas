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

/* core/themes/claro/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_5a65ffd08184512a2c4718a4b4fbfa7463a9253fbdb428d738ddb806371175aa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20, "include" => 22];
        $filters = ["escape" => 18, "t" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        // line 18
        echo "<li";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "tabs__tab", 1 => "js-tab", 2 => ((($context["is_active"] ?? null)) ? ("is-active") : ("")), 3 => ((($context["is_active"] ?? null)) ? ("js-active-tab") : (""))], "method")), "html", null, true);
        echo ">
  ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true);
        echo "
  ";
        // line 20
        if ((($context["is_active"] ?? null) && (($context["level"] ?? null) == "primary"))) {
            // line 21
            echo "    <button class=\"reset-appearance tabs__trigger\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs display toggle"));
            echo "\" data-drupal-nav-tabs-trigger>
      ";
            // line 22
            $this->loadTemplate("@claro/../images/src/hamburger-menu.svg", "core/themes/claro/templates/navigation/menu-local-task.html.twig", 22)->display($context);
            // line 23
            echo "    </button>
  ";
        }
        // line 25
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  73 => 23,  71 => 22,  66 => 21,  64 => 20,  60 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/navigation/menu-local-task.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/navigation/menu-local-task.html.twig");
    }
}
