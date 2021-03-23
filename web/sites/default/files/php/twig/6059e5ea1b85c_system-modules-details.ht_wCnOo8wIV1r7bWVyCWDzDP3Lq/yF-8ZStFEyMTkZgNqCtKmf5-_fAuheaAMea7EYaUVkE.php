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

/* modules/contrib/module_filter/templates/system-modules-details.html.twig */
class __TwigTemplate_89e45d84d73cf343b9f0dec0b114bdace621f6e12157e8bde094fec8fc26aee1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 36, "set" => 37, "if" => 52];
        $filters = ["t" => 30, "escape" => 38];
        $functions = ["cycle" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['t', 'escape'],
                ['cycle']
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
        // line 27
        echo "<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
  <tr>
    <th class=\"checkbox visually-hidden\">";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Installed"));
        echo "</th>
    <th class=\"name visually-hidden\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
    <th class=\"description visually-hidden priority-low\">";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 37
            echo "    ";
            $context["zebra"] = twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index0", [])));
            // line 38
            echo "    <tr";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["module"], "attributes", []), "addClass", [0 => ($context["zebra"] ?? null)], "method")), "html", null, true);
            echo ">
      <td class=\"checkbox\">
        ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "checkbox", [])), "html", null, true);
            echo "
      </td>
      <td class=\"module\">
        <label id=\"";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "id", [])), "html", null, true);
            echo "\" for=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "enable_id", [])), "html", null, true);
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "name", [])), "html", null, true);
            echo "</label>
      </td>
      <td class=\"description expand priority-low\">
        <details class=\"js-form-wrapper form-wrapper\" id=\"";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "enable_id", [])), "html", null, true);
            echo "-description\">
          <summary aria-controls=\"";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "enable_id", [])), "html", null, true);
            echo "-description\" role=\"button\" aria-expanded=\"false\"><span class=\"text module-description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "description", [])), "html", null, true);
            echo "</span></summary>
          <div class=\"details-wrapper\">
            <div class=\"details-description\">
              <div class=\"requirements\">
                <div class=\"admin-requirements\">";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Machine name: <span dir=\"ltr\" class=\"module-machine-name table-filter-text-source\">@machine-name</span>", ["@machine-name" => $this->getAttribute($context["module"], "machine_name", [])]));
            echo "</div>
                ";
            // line 52
            if ($this->getAttribute($context["module"], "version", [])) {
                // line 53
                echo "                  <div class=\"admin-requirements\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version: @module-version", ["@module-version" => $this->getAttribute($context["module"], "version", [])]));
                echo "</div>
                ";
            }
            // line 55
            echo "                ";
            if ($this->getAttribute($context["module"], "requires", [])) {
                // line 56
                echo "                  <div class=\"admin-requirements requires\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Requires: @module-list", ["@module-list" => $this->getAttribute($context["module"], "requires", [])]));
                echo "</div>
                ";
            }
            // line 58
            echo "                ";
            if ($this->getAttribute($context["module"], "required_by", [])) {
                // line 59
                echo "                  <div class=\"admin-requirements required-by\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Required by: @module-list", ["@module-list" => $this->getAttribute($context["module"], "required_by", [])]));
                echo "</div>
                ";
            }
            // line 61
            echo "                ";
            if ($this->getAttribute($context["module"], "path", [])) {
                // line 62
                echo "                  <div class=\"admin-requirements module-path\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Module path: @module-list", ["@module-list" => $this->getAttribute($context["module"], "path", [])]));
                echo "</div>
                ";
            }
            // line 64
            echo "              </div>
              ";
            // line 65
            if ($this->getAttribute($context["module"], "links", [])) {
                // line 66
                echo "                <div class=\"links\">
                  ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "help", 1 => "permissions", 2 => "configure"]);
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 68
                    echo "                    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["module"], "links", []), $context["link_type"], [], "array")), "html", null, true);
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                </div>
              ";
            }
            // line 72
            echo "            </div>
          </div>
        </details>
      </td>
    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/module_filter/templates/system-modules-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 78,  194 => 72,  190 => 70,  181 => 68,  177 => 67,  174 => 66,  172 => 65,  169 => 64,  163 => 62,  160 => 61,  154 => 59,  151 => 58,  145 => 56,  142 => 55,  136 => 53,  134 => 52,  130 => 51,  121 => 47,  117 => 46,  107 => 43,  101 => 40,  95 => 38,  92 => 37,  75 => 36,  68 => 32,  64 => 31,  60 => 30,  55 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/module_filter/templates/system-modules-details.html.twig", "/var/www/html/bilboempresas/web/modules/contrib/module_filter/templates/system-modules-details.html.twig");
    }
}
