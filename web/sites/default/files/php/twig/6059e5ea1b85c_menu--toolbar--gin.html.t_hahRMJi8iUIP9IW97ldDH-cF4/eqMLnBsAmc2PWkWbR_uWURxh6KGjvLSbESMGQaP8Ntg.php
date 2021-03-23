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

/* themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig */
class __TwigTemplate_80b62afc2409a15f764ed338631137e3bea5fa52d0a3894680971bbe79de1a28 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 41];
        $filters = ["escape" => 35, "t" => 60];
        $functions = ["url" => 55, "file_url" => 56, "link" => 98];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 't'],
                ['url', 'file_url', 'link']
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
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, false, ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null)));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__parent__ = null, $__menu_name__ = null, $__icon_default__ = null, $__icon_path__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "parent" => $__parent__,
            "menu_name" => $__menu_name__,
            "icon_default" => $__icon_default__,
            "icon_path" => $__icon_path__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "toolbar-menu"], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 39
                echo "    ";
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
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = [0 => "menu-item", 1 => (($this->getAttribute(                    // line 43
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 45
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 46
$context["item"], "gin_id", [])) ? (("menu-item__" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "gin_id", [])))) : (""))];
                    // line 49
                    echo "
      ";
                    // line 51
                    echo "        ";
                    // line 52
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && ($this->getAttribute($context["loop"], "index", []) == 1)) && ($this->getAttribute($context["item"], "gin_id", []) != "admin_toolbar_tools-help"))) {
                        // line 53
                        echo "          <li class=\"menu-item menu-item--expanded menu-item__tools\">
            ";
                        // line 54
                        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
                            // line 55
                            echo "              <a href=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
                            echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
                <img src=\"";
                            // line 56
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null))]), "html", null, true);
                            echo "\" class=\"toolbar-icon-home\" />
              </a>
            ";
                        } else {
                            // line 59
                            echo "              <a href=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
                            echo "\" class=\"toolbar-icon toolbar-icon-admin-toolbar-tools-help toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
                ";
                            // line 60
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                            echo "
              </a>
            ";
                        }
                        // line 63
                        echo "          </li>
        ";
                    }
                    // line 65
                    echo "
        ";
                    // line 66
                    if (((($context["menu_level"] ?? null) == 0) && ($this->getAttribute($context["item"], "gin_id", []) == "help-main"))) {
                        // line 67
                        echo "          <li class=\"menu-item menu-item__spacer menu-item--no-link\"></li>
        ";
                    }
                    // line 69
                    echo "
        ";
                    // line 71
                    echo "        ";
                    if (((($context["menu_level"] ?? null) == 1) && ($this->getAttribute($context["loop"], "index", []) == 1))) {
                        // line 72
                        echo "          <li class=\"menu-item-title\">
            <h2 class=\"toolbar-menu__title\">
              <a href=\"";
                        // line 74
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "title", [])), "html", null, true);
                        echo "</a>
            </h2>
          </li>
          <li class=\"menu-item\">
            <a href=\"";
                        // line 78
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                        echo "\" class=\"toolbar-icon\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overview"));
                        echo "</a>
          </li>
        ";
                    } elseif (((                    // line 80
($context["menu_level"] ?? null) > 1) && ($this->getAttribute($context["loop"], "index", []) == 1))) {
                        // line 81
                        echo "          <li class=\"menu-item-title\">
            <h3 class=\"toolbar-menu__sub-title\">
              <a href=\"";
                        // line 83
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "title", [])), "html", null, true);
                        echo "</a>
            </h3>
          </li>
          <li class=\"menu-item\">
            <a href=\"";
                        // line 87
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                        echo "\" class=\"toolbar-icon\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overview"));
                        echo "</a>
          </li>
        ";
                    }
                    // line 90
                    echo "      ";
                    // line 91
                    echo "
      <li";
                    // line 92
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 93
                    if (((($this->getAttribute($context["item"], "gin_id", []) == "admin_toolbar_tools-help") && (($context["icon_default"] ?? null) == false)) && (($context["icon_path"] ?? null) != ""))) {
                        // line 94
                        echo "          <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
                        echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
                        // line 95
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null))]), "html", null, true);
                        echo "\" class=\"toolbar-icon-home\" />
          </a>
        ";
                    } elseif (($this->getAttribute(                    // line 97
$context["item"], "gin_id", []) == "admin_toolbar_tools-help")) {
                        // line 98
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => "toolbar-icon-default"]]), "html", null, true);
                        echo "
        ";
                    } else {
                        // line 100
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "
        ";
                    }
                    // line 102
                    echo "        ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 103
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), $context["item"], ($context["menu_name"] ?? null)));
                        echo "
        ";
                    }
                    // line 105
                    echo "      </li>
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
                // line 107
                echo "    </ul>
  ";
            }
            // line 109
            echo "
  ";
            // line 110
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 111
                echo "    ";
                // line 112
                echo "    <a href=\"#\" class=\"toolbar-menu__trigger trigger\" role=\"button\" aria-pressed=\"false\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
                echo "</a>
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
        return "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 112,  295 => 111,  293 => 110,  290 => 109,  286 => 107,  271 => 105,  265 => 103,  262 => 102,  256 => 100,  250 => 98,  248 => 97,  243 => 95,  238 => 94,  236 => 93,  232 => 92,  229 => 91,  227 => 90,  219 => 87,  210 => 83,  206 => 81,  204 => 80,  197 => 78,  188 => 74,  184 => 72,  181 => 71,  178 => 69,  174 => 67,  172 => 66,  169 => 65,  165 => 63,  159 => 60,  154 => 59,  148 => 56,  143 => 55,  141 => 54,  138 => 53,  135 => 52,  133 => 51,  130 => 49,  128 => 46,  127 => 45,  126 => 44,  125 => 43,  124 => 41,  122 => 40,  104 => 39,  100 => 37,  94 => 35,  91 => 34,  88 => 33,  85 => 32,  67 => 31,  60 => 29,  57 => 24,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig", "/var/www/html/bilboempresas/web/themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig");
    }
}
