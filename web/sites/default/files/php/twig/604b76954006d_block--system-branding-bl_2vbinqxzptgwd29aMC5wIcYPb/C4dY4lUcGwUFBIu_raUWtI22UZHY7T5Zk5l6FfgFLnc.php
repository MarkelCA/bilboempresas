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

/* themes/contrib/radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_2e61ae813e097fc42cea437ab9467faa887a6526a0647e2f21066629a1ae9f04 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 7];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
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
        // line 7
        $this->loadTemplate("themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 7, "1921115082")->display(twig_array_merge($context, ["html_tag" => "div"]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/templates/block/block--system-branding-block.html.twig");
    }
}


/* themes/contrib/radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_2e61ae813e097fc42cea437ab9467faa887a6526a0647e2f21066629a1ae9f04___1921115082 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 12];
        $filters = [];
        $functions = ["path" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                ['path']
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
        return "@radix/block/block.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@radix/block/block.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        $this->loadTemplate("@radix/navbar/navbar-brand.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 12)->display(twig_array_merge($context, ["text" =>         // line 13
($context["site_name"] ?? null), "image" =>         // line 14
($context["site_logo"] ?? null), "width" => 30, "height" => "auto", "path" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"), "alt" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 18
($context["elements"] ?? null), "content", []), "site_name", []), "#markup", [], "array") . " logo")]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 18,  143 => 14,  142 => 13,  140 => 12,  137 => 11,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/templates/block/block--system-branding-block.html.twig");
    }
}
