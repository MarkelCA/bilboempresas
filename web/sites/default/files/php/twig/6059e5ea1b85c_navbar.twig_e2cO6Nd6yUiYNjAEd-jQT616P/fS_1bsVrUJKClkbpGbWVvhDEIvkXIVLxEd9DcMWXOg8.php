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

/* @radix/navbar/navbar.twig */
class __TwigTemplate_c0c481947d0ae735d10981cf4136093735cc11fa3915208943a0b010a9f0b4cc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 20, "if" => 25, "block" => 29];
        $filters = ["escape" => 18, "join" => 24];
        $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'join'],
                ['attach_library']
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("radix/navbar"), "html", null, true);
        echo "

";
        // line 20
        $context["container"] = (((($context["container"] ?? null) == "fixed")) ? ("container") : (false));
        // line 21
        $context["placement"] = (($context["placement"]) ?? (""));
        // line 22
        $context["color"] = (($context["color"]) ?? ("light"));
        // line 23
        echo "
<nav class=\"navbar navbar-expand-lg justify-content-between navbar-";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placement"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null)), " "), "html", null, true);
        echo "\">
  ";
        // line 25
        if (($context["container"] ?? null)) {
            // line 26
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        $this->displayBlock('branding', $context, $blocks);
        // line 32
        echo "
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\">
    ";
        // line 38
        $this->displayBlock('left', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('right', $context, $blocks);
        // line 45
        echo "  </div>

  ";
        // line 47
        if (($context["container"] ?? null)) {
            // line 48
            echo "    </div>
  ";
        }
        // line 50
        echo "</nav>
";
    }

    // line 29
    public function block_branding($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["branding"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 38
    public function block_left($context, array $blocks = [])
    {
        // line 39
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 42
    public function block_right($context, array $blocks = [])
    {
        // line 43
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@radix/navbar/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 43,  143 => 42,  136 => 39,  133 => 38,  126 => 30,  123 => 29,  118 => 50,  114 => 48,  112 => 47,  108 => 45,  106 => 42,  103 => 41,  101 => 38,  93 => 32,  91 => 29,  88 => 28,  82 => 26,  80 => 25,  72 => 24,  69 => 23,  67 => 22,  65 => 21,  63 => 20,  58 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/navbar/navbar.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/src/components/navbar/navbar.twig");
    }
}
