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

/* themes/custom/betheme/templates/content/node--pabellon-ficha.html.twig */
class __TwigTemplate_61dc1d1d8e8f0f75dadf517417b7a77ef1adc862bf1a4a0c906098663000b653 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 10];
        $functions = ["kpr" => 55];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['kpr']
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
        echo "<div id=\"container-pabellon-ficha\" class='p-4'>
    <div class=\"row  mx-2 d-flex align-items-center font-weight-bold\">
        <div class=\"col-12 h1 text-center text-uppercase p-2\">
            ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_titulo_empresa", [])), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row mb-2 m-2 pb-4\">
        <div id='foto-portada' class=\"mb-3 mb-md-0 col-sm-12 col-md-6  \">
            ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_pabellon_fotos", [])), "html", null, true);
        echo "
        </div>
        <div id=\"informacion-de-venta\" class='col-sm-12 col-md-6 d-flex flex-column justify-content-around h4'>
            <div class=\"row text-xs-center text-sm-start \">
                <div class=\"col-12 col-sm-6 mb-3 mb-md-0\">
                    ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_venta", [])), "html", null, true);
        echo "
                </div>
                <div class=\"col-12 col-sm-6\">
                    ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_alquiler", [])), "html", null, true);
        echo "
                </div>

            </div>
            <div class=\"superficie row\">
                <div class=\"col-12 mb-3 mb-md-0\">
                    ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_superficie_pabellon", [])), "html", null, true);
        echo " 
                </div>
            </div>
        </div>
    </div>

    <div id=\"descripcion\" class=\"row  m-2\">
        ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_descripcion", [])), "html", null, true);
        echo "
    </div>

    <div id=\"galeria\" class=\"row m-2 d-flex\">
        ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_galeria_pabellon", [])), "html", null, true);
        echo "
    </div>
    <div id='ubication-info' class=\"row h5 m-2\">
        <div class=\"col-12\">
            ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_direccion_pabellon", [])), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row mapa-ubicacion p-2 m-2 \">
        <div class=\"col-12 d-flex justify-content-center border  \">
            ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_pabellon_mapa", [])), "html", null, true);
        echo "
        </div>
    </div>
</div>

<hr>
<pre><h2>Content: </h2>";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\devel\Twig\Extension\Debug')->dump($this->env, $context, [0 => $this->sandbox->ensureToStringAllowed(($context["content"] ?? null))]));
        echo "</pre>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/betheme/templates/content/node--pabellon-ficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  123 => 49,  115 => 44,  108 => 40,  101 => 36,  91 => 29,  82 => 23,  76 => 20,  68 => 15,  60 => 10,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/betheme/templates/content/node--pabellon-ficha.html.twig", "/var/www/html/bilboempresas/web/themes/custom/betheme/templates/content/node--pabellon-ficha.html.twig");
    }
}
