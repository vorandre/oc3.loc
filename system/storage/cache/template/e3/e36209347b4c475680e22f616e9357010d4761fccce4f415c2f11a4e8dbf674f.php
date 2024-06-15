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

/* multishop/template/extension/module/slideshow.twig */
class __TwigTemplate_4869fe5d590290c14ae9e92f4b8e18906eb0807ab0449dd7eeb87913060481a2 extends \Twig\Template
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
        echo "<!-- Carousel Start -->
    
    
    ";
        // line 4
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 3)) {
            // line 5
            echo "        ";
            $context["length"] =  -2;
            // line 6
            echo "        ";
            $context["class"] = "col-lg-8";
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "        ";
            $context["length"] = twig_length_filter($this->env, ($context["banners"] ?? null));
            // line 9
            echo "        ";
            $context["class"] = "col-lg-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    
    
    
    <div class=\"container-fluid mb-3\">
        <div class=\"row px-xl-5\">
            <div class=\"";
        // line 16
        echo ($context["class"] ?? null);
        echo "\">
                <div id=\"header-carousel";
        // line 17
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null), 0, ($context["length"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 20
            echo "                        <li data-target=\"#header-carousel";
            echo ($context["module"] ?? null);
            echo "\" data-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) == 0)) {
                echo " 
                        class=\"active\" ";
            }
            // line 21
            echo "></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </ol>
                    <div class=\"carousel-inner\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null), 0, ($context["length"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 26
            echo "
                        <div class=\"carousel-item position-relative ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 27) == 0)) {
                echo "  active ";
            }
            echo "\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 28);
            echo "\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 31);
            echo "</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 33)) {
                // line 34
                echo "                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 34);
                echo "\">Shop Now</a>
                                    ";
            }
            // line 36
            echo "                                
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </div>
                </div>
            </div>
            ";
        // line 44
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 3)) {
            // line 45
            echo "            <div class=\"col-lg-4\">
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null),  -2, null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 47
                echo "                <div class=\"product-offer mb-30\" style=\"height: 200px;\">
                    <img class=\"img-fluid\" src=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 48);
                echo "\" alt=\"\">
                    <div class=\"offer-text\">
                        <h6 class=\"text-white text-uppercase\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 50);
                echo "</h6>
                        <h3 class=\"text-white mb-3\">Special Offer</h3>
                        ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 53);
                    echo "\" class=\"btn btn-primary\">Shop Now</a>
                        ";
                }
                // line 55
                echo "                    </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </div>
            ";
        }
        // line 60
        echo "        </div>
    </div>
                        
                                       



                       
            
    <!-- Carousel End -->";
    }

    public function getTemplateName()
    {
        return "multishop/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 60,  230 => 58,  222 => 55,  216 => 53,  214 => 52,  209 => 50,  204 => 48,  201 => 47,  197 => 46,  194 => 45,  192 => 44,  187 => 41,  169 => 36,  163 => 34,  161 => 33,  156 => 31,  150 => 28,  144 => 27,  141 => 26,  124 => 25,  120 => 23,  105 => 21,  95 => 20,  78 => 19,  73 => 17,  69 => 16,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel Start -->
    
    
    {% if banners|length > 3 %}
        {% set length = -2 %}
        {% set class = 'col-lg-8' %}
    {% else %}
        {% set length = banners|length %}
        {% set class = 'col-lg-12' %}
    {% endif%}
    
    
    
    <div class=\"container-fluid mb-3\">
        <div class=\"row px-xl-5\">
            <div class=\"{{class}}\">
                <div id=\"header-carousel{{ module }}\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        {% for banner in banners[0:length] %}
                        <li data-target=\"#header-carousel{{ module }}\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.index0 == 0 %} 
                        class=\"active\" {% endif %}></li>
                        {% endfor %}
                    </ol>
                    <div class=\"carousel-inner\">
                        {% for banner in banners[0:length] %}

                        <div class=\"carousel-item position-relative {% if loop.index0 == 0 %}  active {% endif %}\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"{{ banner.image }}\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">{{banner.title}}</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    {% if banner.link %}
                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"{{ banner.link }}\">Shop Now</a>
                                    {% endif %}
                                
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            {% if banners|length > 3 %}
            <div class=\"col-lg-4\">
                {% for banner in banners[-2:] %}
                <div class=\"product-offer mb-30\" style=\"height: 200px;\">
                    <img class=\"img-fluid\" src=\"{{banner.image}}\" alt=\"\">
                    <div class=\"offer-text\">
                        <h6 class=\"text-white text-uppercase\">{{banner.title}}</h6>
                        <h3 class=\"text-white mb-3\">Special Offer</h3>
                        {% if banner.link %}
                        <a href=\"{{banner.link}}\" class=\"btn btn-primary\">Shop Now</a>
                        {%endif%}
                    </div>
                </div>
              {% endfor%}
            </div>
            {% endif %}
        </div>
    </div>
                        
                                       



                       
            
    <!-- Carousel End -->", "multishop/template/extension/module/slideshow.twig", "");
    }
}
