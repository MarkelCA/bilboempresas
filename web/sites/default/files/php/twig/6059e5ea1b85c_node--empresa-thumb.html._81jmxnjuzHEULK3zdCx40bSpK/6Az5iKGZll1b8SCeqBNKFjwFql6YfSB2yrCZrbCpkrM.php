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

/* themes/custom/betheme/templates/content/node--empresa-thumb.html.twig */
class __TwigTemplate_55d81c43cfcd505f303da8a994bded76004180902dd123091bbd418918c02e6e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "block" => 21];
        $filters = ["clean_class" => 13, "escape" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
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
        // line 8
        $context["classes"] = [0 => "node", 1 => (($this->getAttribute(        // line 10
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 2 => (($this->getAttribute(        // line 11
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 3 => (( !$this->getAttribute(        // line 12
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 4 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 13
($context["node"] ?? null), "bundle", []))), 5 => ((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 14
($context["node"] ?? null), "bundle", []))) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))];
        // line 17
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "</article>
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        // line 22
        echo "     ";
        // line 23
        echo "     ";
        // line 24
        echo "     <h1 class=\"nombre_empresa text-uppercase text-center bg-secondary text-white\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_nombre_comercial", [])), "html", null, true);
        echo "</h1>
     <div class=\"logo-empresa mx-auto col-8 col-sm-4  md-col-3 \">";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_company_thumbnail", [])), "html", null, true);
        echo "</div>
     <div class=\"datos-empresa w-100 sm-col-12\">
         <div class=\"datos-texto\">
             <div class=\"descripion-empresa\">";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_descripcion_de_la_empresa", [])), "html", null, true);
        echo "</div>
             <div class=\"direccion_pabellon\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_direccion_no_del_pabellon_", [])), "html", null, true);
        echo "</div>
             <div class=\"telefono-contacto\">";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono_de_contacto", [])), "html", null, true);
        echo "</div>
             <div class=\"productos-empresa\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_productos", [])), "html", null, true);
        echo "</div>
             <div class=\"servicios-emresa\">";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_servicios", [])), "html", null, true);
        echo "</div>
             <div class=\"pagina-web\">";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_pagina_web", [])), "html", null, true);
        echo "</div>
             <div class=\"comollegar\">";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_como_llegar", [])), "html", null, true);
        echo "</div>
         </div>
         <div class=\"mapa mx-auto sm-col-12\">";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_mapa", [])), "html", null, true);
        echo "</div>
     </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/betheme/templates/content/node--empresa-thumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  96 => 25,  91 => 24,  89 => 23,  87 => 22,  84 => 21,  79 => 39,  77 => 21,  72 => 19,  68 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/betheme/templates/content/node--empresa-thumb.html.twig", "/var/www/html/bilboempresas/web/themes/custom/betheme/templates/content/node--empresa-thumb.html.twig");
    }
}
