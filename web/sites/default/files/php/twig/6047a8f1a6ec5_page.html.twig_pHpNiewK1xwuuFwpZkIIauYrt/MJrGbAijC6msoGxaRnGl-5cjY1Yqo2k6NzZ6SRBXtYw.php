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

/* themes/contrib/radix/templates/page/page.html.twig */
class __TwigTemplate_ea570872694453478e35f03071e9569b25e7011e71fb484b6c2ca049f734809d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 8, "if" => 37];
        $filters = ["escape" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed', 'if'],
                ['escape'],
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
        echo "<div class=\"page\">
  ";
        // line 8
        $this->loadTemplate("themes/contrib/radix/templates/page/page.html.twig", "themes/contrib/radix/templates/page/page.html.twig", 8, "141197897")->display(twig_array_merge($context, ["placement" => "sticky-top", "container" => "fixed", "color" => "light", "utility_classes" => [0 => "bg-light"]]));
        // line 35
        echo "
  <main class=\"pt-5 pb-5\">
    ";
        // line 37
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 38
            echo "      <header class=\"page__header mb-3\">
        <div class=\"container\">
          ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        </div>
      </header>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 46
            echo "      <div class=\"page__content\">
        <div class=\"container\">
          ";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 52
        echo "  </main>

  ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 55
            echo "    <footer class=\"page__footer\">
      <div class=\"container\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </div>
      </div>
    </footer>
  ";
        }
        // line 63
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 63,  104 => 58,  99 => 55,  97 => 54,  93 => 52,  86 => 48,  82 => 46,  80 => 45,  77 => 44,  70 => 40,  66 => 38,  64 => 37,  60 => 35,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/page/page.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/templates/page/page.html.twig");
    }
}


/* themes/contrib/radix/templates/page/page.html.twig */
class __TwigTemplate_ea570872694453478e35f03071e9569b25e7011e71fb484b6c2ca049f734809d___141197897 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["escape" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 8
        return "@radix/navbar/navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@radix/navbar/navbar.twig", "themes/contrib/radix/templates/page/page.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_branding($context, array $blocks = [])
    {
        // line 16
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])) {
            // line 17
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])), "html", null, true);
            echo "
      ";
        }
        // line 19
        echo "    ";
    }

    // line 21
    public function block_left($context, array $blocks = [])
    {
        // line 22
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_left", [])) {
            // line 23
            echo "        <div class=\"mr-auto\">
          ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_left", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 27
        echo "    ";
    }

    // line 29
    public function block_right($context, array $blocks = [])
    {
        // line 30
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_right", [])) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_right", [])), "html", null, true);
            echo "
      ";
        }
        // line 33
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 33,  239 => 31,  236 => 30,  233 => 29,  229 => 27,  223 => 24,  220 => 23,  217 => 22,  214 => 21,  210 => 19,  204 => 17,  201 => 16,  198 => 15,  188 => 8,  112 => 63,  104 => 58,  99 => 55,  97 => 54,  93 => 52,  86 => 48,  82 => 46,  80 => 45,  77 => 44,  70 => 40,  66 => 38,  64 => 37,  60 => 35,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/page/page.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/templates/page/page.html.twig");
    }
}
