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

/* core/themes/claro/templates/content-edit/image-widget.html.twig */
class __TwigTemplate_2eb2ce2caf7a2d72699c9192f59d71a142395fe6cf64bb3f205d8b48eea9aad1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 27];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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

    protected function doGetParent(array $context)
    {
        // line 25
        return "@claro/content-edit/file-managed-file.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "form-managed-file--image"], "method");
        // line 25
        $this->parent = $this->loadTemplate("@claro/content-edit/file-managed-file.html.twig", "core/themes/claro/templates/content-edit/image-widget.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/content-edit/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  59 => 27,  53 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/content-edit/image-widget.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/content-edit/image-widget.html.twig");
    }
}