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

/* @radix/navbar/navbar-brand.twig */
class __TwigTemplate_f726babd1dd6496340e1bb8b1e6a96127d4061a5bff459677f4a32a1105cc467 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 17, "set" => 18, "if" => 20, "macro" => 36];
        $filters = ["join" => 18, "escape" => 21, "default" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'macro'],
                ['join', 'escape', 'default'],
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
        // line 17
        $context["navbar_brand"] = $this;
        // line 18
        $context["utility_classes"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null)), " ");
        // line 19
        echo "
";
        // line 20
        if (($context["path"] ?? null)) {
            // line 21
            echo "  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null)), "html", null, true);
            echo "\" class=\"navbar-brand d-flex align-items-center ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null)), "html", null, true);
            echo "\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "html", null, true);
            echo "\">
    ";
            // line 22
            if (($context["image"] ?? null)) {
                // line 23
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["navbar_brand"]->getimage(($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)));
                echo "
    ";
            }
            // line 25
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "html", null, true);
            echo "
  </a>
";
        } else {
            // line 28
            echo "  <span class=\"navbar-brand h1 mb-0 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null)), "html", null, true);
            echo "\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "html", null, true);
            echo "\">
    ";
            // line 29
            if (($context["image"] ?? null)) {
                // line 30
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["navbar_brand"]->getimage(($context["image"] ?? null), ($context["alt"] ?? null)));
                echo "
    ";
            }
            // line 32
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "html", null, true);
            echo "
  </span>
";
        }
        // line 35
        echo "
";
    }

    // line 36
    public function getimage($__src__ = null, $__width__ = null, $__height__ = null, $__alt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "src" => $__src__,
            "width" => $__width__,
            "height" => $__height__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 37
            echo "  <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["src"] ?? null)), "html", null, true);
            echo "\" width=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["width"]) || array_key_exists("width", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), 30)) : (30)), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["height"]) || array_key_exists("height", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "auto")) : ("auto")), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["alt"]) || array_key_exists("alt", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["alt"] ?? null)), "")) : ("")), "html", null, true);
            echo "\" class=\"mr-2\" />
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@radix/navbar/navbar-brand.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  115 => 36,  110 => 35,  103 => 32,  97 => 30,  95 => 29,  88 => 28,  81 => 25,  75 => 23,  73 => 22,  64 => 21,  62 => 20,  59 => 19,  57 => 18,  55 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/navbar/navbar-brand.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/src/components/navbar/navbar-brand.twig");
    }
}
