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
class __TwigTemplate_8242e619d64175f2c39f8451ad39b024e36c064a1fac571ebd61f89d4b32e424 extends \Twig\Template
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
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 10
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 10) == ($context["code"] ?? null))) {
                    // line 11
                    echo "                <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 11);
                    echo "</button>
              ";
                }
                // line 13
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 

                <div class=\"dropdown-menu dropdown-menu-right\">
                        
                        
                        
             ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["languages"] ?? null), function ($__language__) use ($context, $macros) { $context["language"] = $__language__; return (twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 19) != ($context["code"] ?? null)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 20
                echo "
                <button name=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 21);
                echo "\" class=\"dropdown-item language-select\" type=\"button\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 21);
                echo "</button>
              
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </div>
    
     </div>
     <input type=\"hidden\" name=\"code\" value=\"\" />
     <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 28
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
        return array (  101 => 28,  95 => 24,  84 => 21,  81 => 20,  77 => 19,  64 => 13,  58 => 11,  55 => 10,  51 => 9,  42 => 3,  39 => 2,  37 => 1,);
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
                        
                        
                        
             {% for language in languages| filter(language => language.code != code) %}

                <button name=\"{{ language.code }}\" class=\"dropdown-item language-select\" type=\"button\">{{language.name}}</button>
              
              {% endfor %}
        </div>
    
     </div>
     <input type=\"hidden\" name=\"code\" value=\"\" />
     <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
  </form>

{% endif %}", "multishop/template/common/language.twig", "");
    }
}
