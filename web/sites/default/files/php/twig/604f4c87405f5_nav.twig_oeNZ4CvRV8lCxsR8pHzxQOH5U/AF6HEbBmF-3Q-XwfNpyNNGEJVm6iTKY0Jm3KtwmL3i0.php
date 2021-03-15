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

/* @radix/nav/nav.twig */
class __TwigTemplate_f53511b866d6e370ddc547143bfb48c50fd2ec9b5e5b764826df0bf646b8073f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 13, "if" => 15, "set" => 16, "block" => 32, "for" => 33, "include" => 49];
        $filters = ["merge" => 28, "escape" => 31, "join" => 45];
        $functions = ["link" => 47];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'set', 'block', 'for', 'include'],
                ['merge', 'escape', 'join'],
                ['link']
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
        $context["menus"] = $this;
        // line 14
        echo "
";
        // line 15
        if ((($context["alignment"] ?? null) == "right")) {
            // line 16
            echo "  ";
            $context["alignment"] = "justify-content-end";
        } elseif ((        // line 17
($context["alignment"] ?? null) == "center")) {
            // line 18
            echo "  ";
            $context["alignment"] = "justify-content-center";
        } elseif ((        // line 19
($context["alignment"] ?? null) == "vertical")) {
            // line 20
            echo "  ";
            $context["alignment"] = "flex-column";
        } else {
            // line 22
            echo "  ";
            $context["alignment"] = "";
        }
        // line 24
        echo "
";
        // line 25
        $context["style"] = ((($context["style"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["style"] ?? null)))) : (""));
        // line 26
        $context["fill"] = ((($context["fill"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["fill"] ?? null)))) : (""));
        // line 27
        echo "
";
        // line 28
        $context["nav_classes"] = twig_array_merge([0 => "nav", 1 => ($context["style"] ?? null), 2 => ($context["alignment"] ?? null), 3 => ($context["fill"] ?? null)], ((($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 29
        echo "
";
        // line 30
        if (($context["items"] ?? null)) {
            // line 31
            echo "  <ul";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["nav_classes"] ?? null)], "method")), "html", null, true);
            echo ">
    ";
            // line 32
            $this->displayBlock('items', $context, $blocks);
            // line 59
            echo "  </ul>
";
        }
        // line 61
        echo "
";
    }

    // line 32
    public function block_items($context, array $blocks = [])
    {
        // line 33
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "        ";
            $context["nav_item_classes"] = [0 => "nav-item", 1 => (($this->getAttribute(            // line 36
$context["item"], "in_active_trail", [])) ? ("active") : ("")), 2 => ((($this->getAttribute(            // line 37
$context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) ? ("dropdown") : (""))];
            // line 39
            echo "        ";
            $context["nav_link_classes"] = [0 => "nav-link"];
            // line 40
            echo "        ";
            if (twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", []))) {
                // line 41
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", [])));
                // line 42
                echo "        ";
            } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", [])) {
                // line 43
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null)), [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", [])]);
                // line 44
                echo "        ";
            }
            // line 45
            echo "        <li class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["nav_item_classes"] ?? null)), " "), "html", null, true);
            echo "\">
          ";
            // line 46
            if (($this->getAttribute($context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) {
                // line 47
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null)), [0 => "dropdown-toggle"]), "data-toggle" => "dropdown"]), "html", null, true);
                echo "
            ";
                // line 48
                if ($this->getAttribute($context["item"], "below", [])) {
                    // line 49
                    echo "              ";
                    $this->loadTemplate("@radix/dropdown/dropdown-menu.twig", "@radix/nav/nav.twig", 49)->display(twig_array_merge($context, ["items" => $this->getAttribute(                    // line 50
$context["item"], "below", [])]));
                    // line 52
                    echo "            ";
                }
                // line 53
                echo "          ";
            } else {
                // line 54
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                echo "
          ";
            }
            // line 56
            echo "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@radix/nav/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 58,  188 => 56,  182 => 54,  179 => 53,  176 => 52,  174 => 50,  172 => 49,  170 => 48,  165 => 47,  163 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  138 => 37,  137 => 36,  135 => 34,  117 => 33,  114 => 32,  109 => 61,  105 => 59,  103 => 32,  98 => 31,  96 => 30,  93 => 29,  91 => 28,  88 => 27,  86 => 26,  84 => 25,  81 => 24,  77 => 22,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  56 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/nav/nav.twig", "/var/www/html/bilboempresas/web/themes/contrib/radix/src/components/nav/nav.twig");
    }
}
