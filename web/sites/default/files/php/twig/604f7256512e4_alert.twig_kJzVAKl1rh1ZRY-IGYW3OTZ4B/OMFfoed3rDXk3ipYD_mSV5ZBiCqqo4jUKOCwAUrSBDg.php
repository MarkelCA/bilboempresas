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

/* @radix/alert/alert.twig */
class __TwigTemplate_4be432682656fe44932ac64c7069751bdd09ae5d800d53d850aa1c3dda7f52b3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 21, "block" => 25];
        $filters = ["merge" => 18, "escape" => 20, "join" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'escape', 'join'],
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
        $context["dismissible"] = (($context["dismissible"]) ?? (true));
        // line 14
        $context["classes"] = twig_array_merge([0 => "alert", 1 => ((        // line 16
($context["type"] ?? null)) ? (("alert-" . $this->sandbox->ensureToStringAllowed(($context["type"] ?? null)))) : ("")), 2 => ((        // line 17
($context["dismissible"] ?? null)) ? ("alert-dismissible") : (""))], ((        // line 18
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 19
        echo "
<div class=\"";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " "), "html", null, true);
        echo "\" role=\"alert\">
  ";
        // line 21
        if (($context["heading"] ?? null)) {
            // line 22
            echo "    <h4 class=\"alert-heading\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "</h4>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "
  ";
        // line 29
        if (($context["dismissible"] ?? null)) {
            // line 30
            echo "    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
  ";
        }
        // line 34
        echo "</div>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@radix/alert/alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  99 => 25,  94 => 34,  88 => 30,  86 => 29,  83 => 28,  81 => 25,  78 => 24,  72 => 22,  70 => 21,  66 => 20,  63 => 19,  61 => 18,  60 => 17,  59 => 16,  58 => 14,  56 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/alert/alert.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/src/components/alert/alert.twig");
    }
}
