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

/* @claro/../images/src/hamburger-menu.svg */
class __TwigTemplate_0cd4c79c2c3170deafc9e5522c04251b43e8169d913cce98f6eaa0575e3a3736 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        // line 1
        echo "<svg fill=\"none\" height=\"16\" viewBox=\"0 0 16 16\" width=\"16\" xmlns=\"http://www.w3.org/2000/svg\"><path clip-rule=\"evenodd\" d=\"m15 9h-14c-.56016 0-1-.43984-1-1s.43984-1 1-1h14c.5602 0 1 .43984 1 1s-.4398 1-1 1zm0-5h-14c-.56016 0-1-.43984-1-1s.43984-1 1-1h14c.5602 0 1 .43984 1 1s-.4398 1-1 1zm-14 8h14c.5602 0 1 .4398 1 1s-.4398 1-1 1h-14c-.56016 0-1-.4398-1-1s.43984-1 1-1z\" fill=\"#0048dc\" fill-rule=\"evenodd\"/></svg>";
    }

    public function getTemplateName()
    {
        return "@claro/../images/src/hamburger-menu.svg";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@claro/../images/src/hamburger-menu.svg", "/var/www/html/bilboempresas/web/core/themes/claro/images/src/hamburger-menu.svg");
    }
}
