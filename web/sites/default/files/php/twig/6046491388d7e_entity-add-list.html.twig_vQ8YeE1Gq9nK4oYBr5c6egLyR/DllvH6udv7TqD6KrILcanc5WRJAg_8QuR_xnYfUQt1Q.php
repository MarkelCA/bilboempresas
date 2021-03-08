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

/* @gin/admin/entity-add-list.html.twig */
class __TwigTemplate_8f5fd8195985e99881211f278d13ec4a5b7799883ba82f981a651d33ade0fb7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 19, "if" => 23, "for" => 30];
        $filters = ["escape" => 26];
        $functions = ["create_attribute" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['create_attribute']
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
        // line 19
        $context["item_classes"] = [0 => "admin-item"];
        // line 23
        if ( !twig_test_empty(($context["bundles"] ?? null))) {
            // line 24
            echo "<div class=\"panel\">
  ";
            // line 25
            if (($context["title"] ?? null)) {
                // line 26
                echo "    <h3 class=\"panel__title\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h3>
  ";
            }
            // line 28
            echo "
  <dl";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "admin-list", 1 => "panel__content"], "method")), "html", null, true);
            echo ">
    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bundles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                // line 31
                echo "      ";
                // line 35
                echo "      ";
                $context["bundle_attributes"] = (($this->getAttribute($this->getAttribute($this->getAttribute($context["bundle"], "add_link", []), "url", []), "getOption", [0 => "attributes"], "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["bundle"], "add_link", []), "url", []), "getOption", [0 => "attributes"], "method")) : ([]));
                // line 36
                echo "      ";
                $context["link_attributes"] = $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute($this->sandbox->ensureToStringAllowed(($context["bundle_attributes"] ?? null))), "addClass", [0 => "admin-item__link"], "method");
                // line 37
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                echo ">
        <a class=\"admin-item__link\" href=\"";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["bundle"], "add_link", []), "url", [])), "html", null, true);
                echo "\"></a>
        <dt class=\"admin-item__title\">
          ";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["bundle"], "add_link", []), "text", [])), "html", null, true);
                echo "
        </dt>
        ";
                // line 43
                echo "        ";
                if ($this->getAttribute($context["bundle"], "description", [])) {
                    // line 44
                    echo "          <dd class=\"admin-item__description\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bundle"], "description", [])), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 46
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "  </dl>
</div>
";
        } elseif ( !twig_test_empty(        // line 50
($context["add_bundle_message"] ?? null))) {
            // line 51
            echo "  <p>
    ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["add_bundle_message"] ?? null)), "html", null, true);
            echo "
  </p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gin/admin/entity-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  126 => 51,  124 => 50,  120 => 48,  113 => 46,  107 => 44,  104 => 43,  99 => 40,  94 => 38,  89 => 37,  86 => 36,  83 => 35,  81 => 31,  77 => 30,  73 => 29,  70 => 28,  64 => 26,  62 => 25,  59 => 24,  57 => 23,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gin/admin/entity-add-list.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/gin/templates/admin/entity-add-list.html.twig");
    }
}
