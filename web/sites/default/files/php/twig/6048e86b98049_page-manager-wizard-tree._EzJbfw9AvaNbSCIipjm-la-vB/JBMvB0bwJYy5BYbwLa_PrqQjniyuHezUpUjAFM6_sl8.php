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

/* modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig */
class __TwigTemplate_77a883cba0aba06b2b17524f6bd2191afc7b3d61f1d3353e7e78d390de22328d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 20, "macro" => 28, "if" => 30, "for" => 33, "set" => 35];
        $filters = ["escape" => 18];
        $functions = ["attach_library" => 18, "link" => 43];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['attach_library', 'link']
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
        echo "
";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("page_manager_ui/page_variants"), "html", null, true);
        echo "

";
        // line 20
        $context["page_manager"] = $this;
        // line 21
        echo "
";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["page_manager"]->getwizard_tree(($context["tree"] ?? null), ($context["step"] ?? null), 0));
        echo "

";
    }

    // line 28
    public function getwizard_tree($__items__ = null, $__step__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "step" => $__step__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "  ";
            $context["page_manager"] = $this;
            // line 30
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 31
                echo "    <ul class=\"page__section__";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)), "html", null, true);
                echo "\">

    ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    echo "      ";
                    if ((($context["step"] ?? null) === $this->getAttribute($context["item"], "step", []))) {
                        // line 35
                        echo "        ";
                        $context["active_class"] = " current_variant";
                        // line 36
                        echo "      ";
                    } else {
                        // line 37
                        echo "        ";
                        $context["active_class"] = "";
                        // line 38
                        echo "      ";
                    }
                    // line 39
                    echo "      <li class=\"page__section_item__";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null)), "html", null, true);
                    echo "\">
        <label class=\"page__section__label\">
          ";
                    // line 41
                    if ($this->getAttribute($context["item"], "url", [])) {
                        // line 42
                        echo "            ";
                        if ((($context["step"] ?? null) === $this->getAttribute($context["item"], "step", []))) {
                            // line 43
                            echo "              <strong>";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                            echo "</strong>
            ";
                        } else {
                            // line 45
                            echo "              ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                            echo "
            ";
                        }
                        // line 47
                        echo "          ";
                    } else {
                        // line 48
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "
          ";
                    }
                    // line 50
                    echo "        </label>
        ";
                    // line 51
                    if ($this->getAttribute($context["item"], "children", [])) {
                        // line 52
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["page_manager"]->getwizard_tree($this->getAttribute($context["item"], "children", []), ($context["step"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 54
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "    </ul>
  ";
            }
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
        return "modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 56,  164 => 54,  158 => 52,  156 => 51,  153 => 50,  147 => 48,  144 => 47,  138 => 45,  132 => 43,  129 => 42,  127 => 41,  120 => 39,  117 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  101 => 33,  95 => 31,  92 => 30,  89 => 29,  75 => 28,  68 => 26,  65 => 21,  63 => 20,  58 => 18,  55 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig", "/var/www/html/bilboempresas/web/modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig");
    }
}
