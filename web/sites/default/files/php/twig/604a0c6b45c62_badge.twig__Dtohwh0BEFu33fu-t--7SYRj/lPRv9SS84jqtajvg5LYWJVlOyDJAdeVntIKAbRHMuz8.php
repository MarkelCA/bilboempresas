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

/* @radix/badge/badge.twig */
class __TwigTemplate_e17f67cac4b2f30cd68a6ce5a0b2ff3f6b50bc13dc306695217dfa57810de9f8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "if" => 21, "block" => 29];
        $filters = ["merge" => 17, "render" => 23, "escape" => 27, "join" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'render', 'escape', 'join'],
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
        // line 14
        $context["classes"] = twig_array_merge([0 => "badge", 1 => ((        // line 16
($context["type"] ?? null)) ? (("badge-" . $this->sandbox->ensureToStringAllowed(($context["type"] ?? null)))) : (""))], ((        // line 17
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 18
        echo "
";
        // line 19
        $context["html_tag"] = (($context["html_tag"]) ?? ("span"));
        // line 20
        echo "
";
        // line 21
        if (($context["url"] ?? null)) {
            // line 22
            echo "  ";
            $context["html_tag"] = "a";
            // line 23
            echo "  ";
            $context["url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["url"] ?? null)));
        }
        // line 25
        echo "
";
        // line 26
        if (($context["content"] ?? null)) {
            // line 27
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null)), "html", null, true);
            echo " ";
            ((($context["url"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("href=" . ($context["url"] ?? null)), "html", null, true))) : (print ("")));
            echo " class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " "), "html", null, true);
            echo "\">

  ";
            // line 29
            $this->displayBlock('content', $context, $blocks);
            // line 32
            echo "
  </";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 35
        echo "

";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@radix/badge/badge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  108 => 29,  102 => 35,  97 => 33,  94 => 32,  92 => 29,  82 => 27,  80 => 26,  77 => 25,  73 => 23,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  58 => 17,  57 => 16,  56 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/badge/badge.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/src/components/badge/badge.twig");
    }
}
