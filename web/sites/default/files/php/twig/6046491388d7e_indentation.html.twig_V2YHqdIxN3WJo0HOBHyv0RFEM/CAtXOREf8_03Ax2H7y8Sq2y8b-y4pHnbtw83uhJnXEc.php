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

/* core/themes/claro/templates/admin/indentation.html.twig */
class __TwigTemplate_6bfaafab78f642b172445be31d50cd9a3bfbbfcc689ee5e743c169d6ce7a2fd0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 12];
        $filters = [];
        $functions = ["range" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                [],
                ['range']
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["size"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if ((($context["size"] ?? null) > 0)) {
                echo "<div class=\"js-indentation indentation\">
  <svg
    xmlns=\"http://www.w3.org/2000/svg\"
    class=\"tree\"
    width=\"25\"
    height=\"25\"
    viewBox=\"0 0 25 25\">
    <path
      class=\"tree__item tree__item-child-ltr tree__item-child-last-ltr tree__item-horizontal tree__item-horizontal-right\"
      d=\"M12,12.5 H25\"
      stroke=\"#888\"/>
    <path
      class=\"tree__item tree__item-child-rtl tree__item-child-last-rtl tree__item-horizontal tree__horizontal-left\"
      d=\"M0,12.5 H13\"
      stroke=\"#888\"/>
    <path
      class=\"tree__item tree__item-child-ltr tree__item-child-rtl tree__item-child-last-ltr tree__item-child-last-rtl tree__vertical tree__vertical-top\"
      d=\"M12.5,12 v-99\"
      stroke=\"#888\"/>
    <path
      class=\"tree__item tree__item-child-ltr tree__item-child-rtl tree__vertical tree__vertical-bottom\"
      d=\"M12.5,12 v99\"
      stroke=\"#888\"/>
  </svg>
</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/indentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/admin/indentation.html.twig", "/var/www/html/bilboempresas/web/core/themes/claro/templates/admin/indentation.html.twig");
    }
}
