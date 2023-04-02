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

/* /landing-blog.html.twig */
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
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/base.html.twig", "/landing-blog.html.twig", 1);
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
                    <h2>";
        // line 9
        echo (( !twig_test_empty(($context["latestPosts"] ?? null))) ? ("Portfolio") : ("Rédiger ou modifier un article"));
        echo "</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            ";
        // line 13
        if ( !twig_test_empty(($context["latestPosts"] ?? null))) {
            // line 14
            echo "            <div class=\"row\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestPosts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 16
                echo "                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 17), "html", null, true);
                echo "\"
                       class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
                echo "assets/img/portfolio/cabin.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </div>
            ";
        } else {
            // line 32
            echo "                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" method=\"post\" action=\"";
            // line 36
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=";
            echo ((twig_test_empty(            // line 37
($context["postObject"] ?? null))) ? ("send-new-post") : ("send-update-post"));
            echo "\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Titre</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Titre\" id=\"title\" name=\"title\" value=\"";
            // line 43
            (( !twig_test_empty(            // line 42
($context["postObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 43
($context["postObject"] ?? null), "getTitle", [], "method", false, false, false, 43), "html", null, true))) : (print ("")));
            echo "\" required>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Chapô</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Chapô\" id=\"heading\" name=\"heading\"
                                       required value=\"";
            // line 52
            (( !twig_test_empty(($context["postObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getHeading", [], "method", false, false, false, 52), "html", null, true))) : (print ("")));
            echo "\"
                                       >
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Contenu</label>
                                <textarea rows=\"5\" class=\"form-control\"
                                          placeholder=\"Contenu de l'article\" id=\"content\" name=\"content\"
                                          required
                                          >";
            // line 63
            (( !twig_test_empty(($context["postObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getContent", [], "method", false, false, false, 63), "html", null, true))) : (print ("")));
            echo "</textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <br>
                        <div id=\"success\"></div>
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <button type=\"submit\"
                                        class=\"btn btn-success btn-lg\">Envoyer
                                </button>
                            </div>
                        </div>
                        <input type=\"hidden\" id=\"CSRFToken\" name=\"CSRFToken\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                       ";
            // line 77
            if ( !twig_test_empty(($context["postObject"] ?? null))) {
                // line 78
                echo "                           <input type=\"hidden\" id=\"postId\" name=\"postId\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getId", [], "method", false, false, false, 78), "html", null, true);
                echo "\">
                        ";
            }
            // line 80
            echo "                    </form>
                </div>
            </div>
            ";
        }
        // line 84
        echo "        </div>
    </section>

    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>A propos</h2>
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
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Me contacter</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" id=\"formContact\" method=\"post\" action=\"";
        // line 126
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=send-message\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Nom</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Nom\" id=\"name\" name=\"name\" required
                                       data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Courriel</label>
                                <input type=\"email\" class=\"form-control\"
                                       placeholder=\"Email\" id=\"email\" name=\"email\"
                                       required
                                       data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Numéro de téléphone</label>
                                <input type=\"tel\" class=\"form-control\"
                                       placeholder=\"Numéro de téléphone\" id=\"phone\" name=\"phone\"
                                       data-validation-required-message=\"Please enter your phone number.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Message</label>
                                <textarea rows=\"5\" class=\"form-control\"
                                          placeholder=\"Message\" id=\"message\" name=\"message\"
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
                                        class=\"btn btn-success btn-lg\">Envoyer
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
        return "/landing-blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 126,  181 => 84,  175 => 80,  169 => 78,  167 => 77,  163 => 76,  147 => 63,  133 => 52,  121 => 43,  120 => 42,  119 => 43,  111 => 37,  108 => 36,  102 => 32,  98 => 30,  87 => 25,  76 => 17,  73 => 16,  69 => 15,  66 => 14,  64 => 13,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}

{% block body %}
    <!-- Portfolio Grid Section -->
    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>{{ (latestPosts is not empty) ? \"Portfolio\" : \"Rédiger ou modifier un article\" }}</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            {% if latestPosts is not empty %}
            <div class=\"row\">
                {% for post in latestPosts %}
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#portfolioModal{{ post.getId() }}\"
                       class=\"portfolio-link\"
                       data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\"></i>
                            </div>
                        </div>
                        <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/img/portfolio/cabin.png\"
                             class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                {% endfor %}
            </div>
            {% else %}
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" method=\"post\" action=\"{{ _SERVER['BASE_URI']}}index.php?action={{
                    (postObject is empty)?'send-new-post':'send-update-post' }}\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Titre</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Titre\" id=\"title\" name=\"title\" value=\"{{ (postObject is not
                                empty) ? postObject.getTitle() : \"\" }}\" required>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Chapô</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Chapô\" id=\"heading\" name=\"heading\"
                                       required value=\"{{ (postObject is not empty) ? postObject.getHeading() : \"\" }}\"
                                       >
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Contenu</label>
                                <textarea rows=\"5\" class=\"form-control\"
                                          placeholder=\"Contenu de l'article\" id=\"content\" name=\"content\"
                                          required
                                          >{{ (postObject is not empty) ? postObject.getContent() : \"\" }}</textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <br>
                        <div id=\"success\"></div>
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <button type=\"submit\"
                                        class=\"btn btn-success btn-lg\">Envoyer
                                </button>
                            </div>
                        </div>
                        <input type=\"hidden\" id=\"CSRFToken\" name=\"CSRFToken\" value=\"{{ CSRFToken }}\">
                       {% if postObject is not empty %}
                           <input type=\"hidden\" id=\"postId\" name=\"postId\" value=\"{{ postObject.getId() }}\">
                        {% endif %}
                    </form>
                </div>
            </div>
            {% endif %}
        </div>
    </section>

    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>A propos</h2>
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
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Me contacter</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" id=\"formContact\" method=\"post\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=send-message\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Nom</label>
                                <input type=\"text\" class=\"form-control\"
                                       placeholder=\"Nom\" id=\"name\" name=\"name\" required
                                       data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Courriel</label>
                                <input type=\"email\" class=\"form-control\"
                                       placeholder=\"Email\" id=\"email\" name=\"email\"
                                       required
                                       data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Numéro de téléphone</label>
                                <input type=\"tel\" class=\"form-control\"
                                       placeholder=\"Numéro de téléphone\" id=\"phone\" name=\"phone\"
                                       data-validation-required-message=\"Please enter your phone number.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Message</label>
                                <textarea rows=\"5\" class=\"form-control\"
                                          placeholder=\"Message\" id=\"message\" name=\"message\"
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
                                        class=\"btn btn-success btn-lg\">Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}


", "/landing-blog.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\landing-blog.html.twig");
    }
}
