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
class __TwigTemplate_7cc340d7312121e26dc0dbcf516ed87f781beaf10911cb041546e6f66c5151fa extends \Twig\Template
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
    <div class=\"container-fluid mb-3\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-12\">
                <div id=\"header-carousel\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#header-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#header-carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#header-carousel\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item position-relative active\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-1.jpg\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Men Fashion</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-2.jpg\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Women Fashion</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-3.jpg\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Kids Fashion</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Carousel End -->";
    }

    public function getTemplateName()
    {
        return "multishop/template/extension/module/slideshow.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel Start -->
    <div class=\"container-fluid mb-3\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-12\">
                <div id=\"header-carousel\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#header-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#header-carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#header-carousel\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item position-relative active\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-1.jpg\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Men Fashion</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-2.jpg\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Women Fashion</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-3.jpg\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Kids Fashion</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Carousel End -->", "multishop/template/extension/module/slideshow.twig", "");
    }
}
