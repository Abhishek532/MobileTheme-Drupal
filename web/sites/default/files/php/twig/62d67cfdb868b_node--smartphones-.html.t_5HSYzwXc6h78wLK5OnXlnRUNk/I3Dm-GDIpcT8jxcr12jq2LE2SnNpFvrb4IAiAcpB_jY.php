<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mobtheme/node--smartphones-.html.twig */
class __TwigTemplate_842cb594c1359e4ecaee8d91b4aa0197 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<div class=\"nodeclass\">
    <br><br><br>

    <div class=\"box1\">
        <div class=\"nodename\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_name_of_phone", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</div>
        <div class=\"nodebrand\">by ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_brand", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</div>
        <div class=\"nodetags\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tag", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</div>
        <div class=\"nodecost\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</div>
        <div class=\"nodeav\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_availability", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</div>
        <div class=\"btn\"><a href=\"https://www.google.com\"><input type=\"button\"  value=\"Buy Now\" id=\"mybutton\"></a></div>
        <br><br><br><br><br>
    </div>

    <div class=\"box2\">
        ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_phone_image", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mobtheme/node--smartphones-.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"nodeclass\">
    <br><br><br>

    <div class=\"box1\">
        <div class=\"nodename\">{{content.field_name_of_phone}}</div>
        <div class=\"nodebrand\">by {{ content.field_brand}}</div>
        <div class=\"nodetags\">{{content.field_tag}}</div>
        <div class=\"nodecost\"{{content.field_price}}</div>
        <div class=\"nodeav\">{{content.field_availability}}</div>
        <div class=\"btn\"><a href=\"https://www.google.com\"><input type=\"button\"  value=\"Buy Now\" id=\"mybutton\"></a></div>
        <br><br><br><br><br>
    </div>

    <div class=\"box2\">
        {{content.field_phone_image}}
    </div>
</div>
", "themes/custom/mobtheme/node--smartphones-.html.twig", "/var/www/html/web/themes/custom/mobtheme/node--smartphones-.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
