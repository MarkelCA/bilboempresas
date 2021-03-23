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

/* themes/contrib/gin/templates/page/page--node.html.twig */
class __TwigTemplate_079b5f75e2ca0d6da7feb6c85ce50b8e85be231dce8bd75404e064a3c0c6710f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "if" => 66];
        $filters = ["escape" => 48, "without" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'without'],
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
        // line 42
        $context["page_title_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null)) . "_page_title");
        // line 43
        $context["local_actions_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null)) . "_local_actions");
        // line 44
        echo "
<div class=\"page-wrapper__node-edit-form\">
  <header class=\"region region-sticky\">
    <div class=\"layout-container region-sticky__items\">
      ";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), ($context["page_title_block"] ?? null), [], "array")), "html", null, true);
        echo "
      ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), ($context["local_actions_block"] ?? null), [], "array")), "html", null, true);
        echo "
    </div>
  </header>

  <div class=\"content-header clearfix\">
    <div class=\"layout-container\">
      ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), $this->sandbox->ensureToStringAllowed(($context["page_title_block"] ?? null))), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"sticky-shadow\"></div>

  <div class=\"layout-container\">
    ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_content", [])), "html", null, true);
        echo "
    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
      ";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 67
            echo "        <div class=\"help\">
          ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 71
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), $this->sandbox->ensureToStringAllowed(($context["local_actions_block"] ?? null))), "html", null, true);
        echo "
    </main>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/page/page--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 71,  103 => 68,  100 => 67,  98 => 66,  94 => 65,  88 => 62,  78 => 55,  69 => 49,  65 => 48,  59 => 44,  57 => 43,  55 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/page/page--node.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/gin/templates/page/page--node.html.twig");
    }
}
