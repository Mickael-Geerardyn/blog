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

/* main/landing-blog.html.twig */
class __TwigTemplate_a8617b9d2835948fe9461755258519626b1758f2671b50f7bb6458b63199ba91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "main/landing-blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!-- Portfolio Grid Section -->
    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Portfolio</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal1\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/cabin.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal2\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/cake.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal3\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/circus.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal4\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/game.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal5\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/safe.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal6\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/submarine.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>About</h2>
                    <hr class=\"star-light\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-lg-offset-2\">
                    <p>Freelancer is a free bootstrap theme created by Start
                        Bootstrap. The download includes the complete source
                        files including HTML, CSS, and JavaScript as well as
                        optional LESS stylesheets for easy customization.</p>
                </div>
                <div class=\"col-lg-4\">
                    <p>Whether you're a student looking to showcase your work, a
                        professional looking to attract clients, or a graphic
                        artist looking to share your projects, this template is
                        the perfect starting point!</p>
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#\" class=\"btn btn-lg btn-outline\">
                        <i class=\"fa fa-download\"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Contact Me</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Name</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Name\" id=\"name\" required
                                       data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Email Address</label>
                                <input type=\"email\" class=\"form-control\"
                                       placeholder=\"Email Address\" id=\"email\"
                                       required
                                       data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Phone Number</label>
                                <input type=\"tel\" class=\"form-control\"
                                       placeholder=\"Phone Number\" id=\"phone\"
                                       required
                                       data-validation-required-message=\"Please enter your phone number.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Message</label>
                                <textarea rows=\"5\" class=\"form-control\"
                                          placeholder=\"Message\" id=\"message\"
                                          required
                                          data-validation-required-message=\"Please enter a message.\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <br>
                        <div id=\"success\"></div>
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <button type=\"submit\"
                                        class=\"btn btn-success btn-lg\">Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "main/landing-blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!-- Portfolio Grid Section -->
    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Portfolio</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal1\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/cabin.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal2\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/cake.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal3\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/circus.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal4\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/game.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal5\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/safe.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal6\" class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"public/assets/img/portfolio/submarine.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>About</h2>
                    <hr class=\"star-light\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-lg-offset-2\">
                    <p>Freelancer is a free bootstrap theme created by Start
                        Bootstrap. The download includes the complete source
                        files including HTML, CSS, and JavaScript as well as
                        optional LESS stylesheets for easy customization.</p>
                </div>
                <div class=\"col-lg-4\">
                    <p>Whether you're a student looking to showcase your work, a
                        professional looking to attract clients, or a graphic
                        artist looking to share your projects, this template is
                        the perfect starting point!</p>
                </div>
                <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                    <a href=\"#\" class=\"btn btn-lg btn-outline\">
                        <i class=\"fa fa-download\"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Contact Me</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Name</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Name\" id=\"name\" required
                                       data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Email Address</label>
                                <input type=\"email\" class=\"form-control\"
                                       placeholder=\"Email Address\" id=\"email\"
                                       required
                                       data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Phone Number</label>
                                <input type=\"tel\" class=\"form-control\"
                                       placeholder=\"Phone Number\" id=\"phone\"
                                       required
                                       data-validation-required-message=\"Please enter your phone number.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Message</label>
                                <textarea rows=\"5\" class=\"form-control\"
                                          placeholder=\"Message\" id=\"message\"
                                          required
                                          data-validation-required-message=\"Please enter a message.\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <br>
                        <div id=\"success\"></div>
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <button type=\"submit\"
                                        class=\"btn btn-success btn-lg\">Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}


", "main/landing-blog.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\landing-blog.html.twig");
    }
}
