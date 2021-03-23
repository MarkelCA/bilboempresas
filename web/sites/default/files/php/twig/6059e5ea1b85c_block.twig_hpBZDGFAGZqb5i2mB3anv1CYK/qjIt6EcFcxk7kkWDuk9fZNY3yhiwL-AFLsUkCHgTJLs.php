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

/* @radix/block/block.twig */
class __TwigTemplate_2922c730ce31e33d02409182c41ce79eee3215c7d69214fd8f2e06c120bdfc50 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "if" => 17, "block" => 23];
        $filters = ["merge" => 15, "clean_class" => 13, "replace" => 14, "escape" => 18, "without" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'clean_class', 'replace', 'escape', 'without'],
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
        // line 11
        $context["classes"] = twig_array_merge([0 => "block", 1 => ((        // line 13
($context["bundle"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null))))) : ("")), 2 => ((        // line 14
($context["id"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), ["_" => "-"])))) : (""))], ((        // line 15
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 16
        echo "
";
        // line 17
        if (($context["html_tag"] ?? null)) {
            // line 18
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "id"), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
";
        }
        // line 20
        echo "
  ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 22
        if (($context["label"] ?? null)) {
            // line 23
            echo "    ";
            $this->displayBlock('label', $context, $blocks);
            // line 26
            echo "  ";
        }
        // line 27
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        if (($context["html_tag"] ?? null)) {
            // line 34
            echo "  </";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null)), "html", null, true);
            echo ">
";
        }
    }

    // line 23
    public function block_label($context, array $blocks = [])
    {
        // line 24
        echo "      <h2";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h2>
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
        return "@radix/block/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  122 => 29,  113 => 24,  110 => 23,  102 => 34,  100 => 33,  97 => 32,  95 => 29,  89 => 27,  86 => 26,  83 => 23,  81 => 22,  77 => 21,  74 => 20,  67 => 18,  65 => 17,  62 => 16,  60 => 15,  59 => 14,  58 => 13,  57 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/block/block.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/src/components/block/block.twig");
    }
}
