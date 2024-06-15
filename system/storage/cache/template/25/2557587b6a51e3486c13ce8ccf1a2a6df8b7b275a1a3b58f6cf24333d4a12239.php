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

/* multishop/template/common/language.twig */
class __TwigTemplate_ac6fe0a62bb54aad4ef923407d9630732b6fed2f96b2f7e34016a2dc70ce0a10 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "
  <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
     
        <div class=\"btn-group\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 7
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null))) {
                    // line 8
                    echo "              <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    echo "</button>
            ";
                }
                // line 10
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "




                        
                        
                        
       <div class=\"dropdown-menu dropdown-menu-right\">
          ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 21
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 21) != ($context["code"] ?? null))) {
                    // line 22
                    echo "
            <button class=\"dropdown-item\" type=\"button\">";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 23);
                    echo "</button>
              
            ";
                }
                // line 26
                echo "         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
    
     </div>
     <input type=\"hidden\" name=\"code\" value=\"\" />
     <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 31
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "multishop/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  100 => 27,  94 => 26,  88 => 23,  85 => 22,  82 => 21,  78 => 20,  67 => 11,  61 => 10,  55 => 8,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if languages | length > 1 %}

  <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
     
        <div class=\"btn-group\">
        {% for language in languages %}
            {% if language.code == code %}
              <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">{{language.name}}</button>
            {% endif %}
        {% endfor %}





                        
                        
                        
       <div class=\"dropdown-menu dropdown-menu-right\">
          {% for language in languages %}
            {% if language.code != code %}

            <button class=\"dropdown-item\" type=\"button\">{{language.name}}</button>
              
            {% endif %}
         {% endfor %}
        </div>
    
     </div>
     <input type=\"hidden\" name=\"code\" value=\"\" />
     <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
  </form>

{% endif %}", "multishop/template/common/language.twig", "");
    }
}
