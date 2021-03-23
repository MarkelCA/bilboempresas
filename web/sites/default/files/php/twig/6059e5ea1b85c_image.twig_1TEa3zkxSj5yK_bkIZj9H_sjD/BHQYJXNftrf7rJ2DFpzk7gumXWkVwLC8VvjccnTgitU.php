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

/* @radix/image/image.twig */
class __TwigTemplate_3f7dd08002f895dbb379eb7fc011367833819e7222b8c17a9d568029fb854d66 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 12];
        $filters = ["merge" => 17, "escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['merge', 'escape'],
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
        $context["classes"] = twig_array_merge([0 => ((        // line 13
($context["responsive"] ?? null)) ? ("img-fluid") : ("img-thumbnail")), 1 => (((        // line 14
($context["align"] ?? null) == "left")) ? ("float-left") : ("")), 2 => (((        // line 15
($context["align"] ?? null) == "right")) ? ("float-right") : ("")), 3 => (((        // line 16
($context["align"] ?? null) == "center")) ? ("mx-auto d-block") : (""))], ((        // line 17
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 18
        echo "
<img";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " />
";
    }

    public function getTemplateName()
    {
        return "@radix/image/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  62 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 14,  56 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/image/image.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/src/components/image/image.twig");
    }
}
