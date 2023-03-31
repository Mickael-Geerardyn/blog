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

/* modals/modals.html.twig */
class __TwigTemplate_463c5412dc60fa4de69975b5e5771fd038087b8b10571bffb0e98082089f5354 extends Template
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
        echo "<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
\t<a class=\"btn btn-primary\" href=\"#page-top\">
\t\t<i class=\"fa fa-chevron-up\"></i>
\t</a>
</div>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["latestPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 9), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
     aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <h2>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getTitle", [], "method", false, false, false, 22), "html", null, true);
            echo "</h2>
                        <hr class=\"star-primary\">
                        <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
            echo "assets/img/portfolio/cabin.png\"
                             class=\"img-responsive img-centered\" alt=\"\">
                        <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getHeading", [], "method", false, false, false, 26), "html", null, true);
            echo "</p>
                        <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getContent", [], "method", false, false, false, 27), "html", null, true);
            echo "</p>
                        <ul class=\"list-inline item-details\">
                            <li>Auteur:
                                <strong>";
            // line 30
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postAuthor", [], "any", false, false, false, 30), "getFirstname", [], "method", false, false, false, 30) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postAuthor", [], "any", false, false, false, 30), "getLastname", [], "method", false, false, false, 30)), "html", null, true);
            echo "
                                </strong>
                            </li>
                            <li>Date:
                                <strong>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCreatedAt", [], "method", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo "
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        ";
            // line 42
            if ( !twig_test_empty(($context["loggedInUser"] ?? null))) {
                // line 43
                echo "                            <div class=\"row\">
                            <form class=\"form\" method=\"POST\" action=\"";
                // line 44
                echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
                echo "index.php?action=update-post-page\">
                                <div class=\"form-group col-xs-12\">
                                    <button type=\"submit\" class=\"btn btn-success btn-lg\">Modifier l'article
                                    </button>
                                </div>
                                <input type=\"hidden\" name=\"postId\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 49), "html", null, true);
                echo "\">
                            </form>
                            </div>
                        ";
            }
            // line 53
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "postComments", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 54
                echo "                            <div class=\"modal-body\">
                                <h3>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getTitle", [], "method", false, false, false, 55), "html", null, true);
                echo "</h3>
                                <p>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 56), "html", null, true);
                echo "</p>
                                <ul class=\"list-inline item-details\">
                                    <li>Auteur:
                                        <strong>";
                // line 59
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "commentAuthor", [], "any", false, false, false, 59), "getFirstname", [], "method", false, false, false, 59) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "commentAuthor", [], "any", false, false, false, 59), "getLastname", [], "method", false, false, false, 59)), "html", null, true);
                echo "
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 63), "d/m/Y"), "html", null, true);
                echo "</strong>
                                    </li>
                                </ul>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                        <br><br>
                        <div class=\"row\">
                            ";
            // line 70
            if ( !twig_test_empty(($context["loggedInUser"] ?? null))) {
                // line 71
                echo "                            <div class=\"col-lg-8 col-lg-offset-2\">
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name=\"sentComment\" method=\"POST\"
                                      action=\"";
                // line 75
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
                echo "index.php?action=send-new-comment\">
                                    <div class=\"row control-group\">
                                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                            <label>Titre</label>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Title\" id=\"Title\"
                                                   required=\"\" data-validation-required-message=\"Veuillez entrer un
                                                   titre\" name=\"title\"
                                                   data-dashlane-rid=\"0840ea6118458db9\"
                                                   data-kwimpalastatus=\"alive\" data-kwimpalaid=\"1678747375732-0\"
                                                   aria-invalid=\"false\" data-form-type=\"title\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                    </div>
                                    <div class=\"row control-group\">
                                    <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                        <label>Commentaire</label>
                                        <textarea rows=\"5\" class=\"form-control\" placeholder=\"Commentaire\"
                                                  id=\"Commentaire\" name=\"content\"
                                                  required></textarea>
                                        <p class=\"help-block text-danger\"></p>
                                        <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRFToken\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
                // line 96
                echo "\" >
                                        <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "getEmail", [], "method", false, false, false, 97), "html", null, true);
                // line 98
                echo "\" >
                                        <input type=\"hidden\" name=\"postTitle\" id=\"postTitle\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 99), "html", null, true);
                // line 100
                echo "\" >
                                    </div>
                                    </div>

                                    <br>
                                    <div id=\"success\"></div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-xs-12\">
                                            <button type=\"submit\" class=\"btn btn-success btn-lg\">Envoyer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            ";
            } else {
                // line 115
                echo "                                <h4>Connectez-vous ou inscrivez-vous pour soumettre un commentaire</h4>
                        <br>
                                <form class=\"form\" method=\"POST\" action=\"";
                // line 117
                echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
                echo "index.php?action=login-page\">
                                    <div class=\"form-group col-xs-12\">
                                        <button type=\"submit\" class=\"btn btn-success btn-lg\"
                                            data-dashlane-rid=\"55f933ab7c0de50e\" data-dashlane-label=\"true\"
                                            data-form-type=\"action\">Se connecter
                                        </button>
                                    </div>
                                </form>
                                </div>
                            ";
            }
            // line 127
            echo "                        </div>
                        <br><br>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa
\t\t\t\t\t\tfa-times\"></i> Fermer la fenêtre
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modals/modals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 127,  230 => 117,  226 => 115,  209 => 100,  207 => 99,  204 => 98,  202 => 97,  199 => 96,  197 => 95,  174 => 75,  168 => 71,  166 => 70,  162 => 68,  151 => 63,  144 => 59,  138 => 56,  134 => 55,  131 => 54,  126 => 53,  119 => 49,  111 => 44,  108 => 43,  106 => 42,  95 => 34,  88 => 30,  82 => 27,  78 => 26,  73 => 24,  68 => 22,  52 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
\t<a class=\"btn btn-primary\" href=\"#page-top\">
\t\t<i class=\"fa fa-chevron-up\"></i>
\t</a>
</div>
{% for post in latestPosts %}
<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal{{ post.getId() }}\" tabindex=\"-1\" role=\"dialog\"
     aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <h2>{{ post.getTitle() }}</h2>
                        <hr class=\"star-primary\">
                        <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/img/portfolio/cabin.png\"
                             class=\"img-responsive img-centered\" alt=\"\">
                        <p>{{ post.getHeading() }}</p>
                        <p>{{ post.getContent() }}</p>
                        <ul class=\"list-inline item-details\">
                            <li>Auteur:
                                <strong>{{ post.postAuthor.getFirstname()~\" \"~post.postAuthor.getLastname() }}
                                </strong>
                            </li>
                            <li>Date:
                                <strong>{{ post.getCreatedAt()|date(\"d/m/Y\") }}
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        {% if loggedInUser is not empty %}
                            <div class=\"row\">
                            <form class=\"form\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=update-post-page\">
                                <div class=\"form-group col-xs-12\">
                                    <button type=\"submit\" class=\"btn btn-success btn-lg\">Modifier l'article
                                    </button>
                                </div>
                                <input type=\"hidden\" name=\"postId\" value=\"{{ post.getId() }}\">
                            </form>
                            </div>
                        {% endif %}
                        {% for comment in post.postComments %}
                            <div class=\"modal-body\">
                                <h3>{{ comment.getTitle() }}</h3>
                                <p>{{ comment.getContent() }}</p>
                                <ul class=\"list-inline item-details\">
                                    <li>Auteur:
                                        <strong>{{ comment.commentAuthor.getFirstname()~\" \"~comment.commentAuthor.getLastname() }}
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>{{ comment.getCreatedAt()|date(\"d/m/Y\") }}</strong>
                                    </li>
                                </ul>
                            </div>
                        {% endfor %}
                        <br><br>
                        <div class=\"row\">
                            {% if loggedInUser is not empty %}
                            <div class=\"col-lg-8 col-lg-offset-2\">
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name=\"sentComment\" method=\"POST\"
                                      action=\"{{ _SERVER['BASE_URI'] }}index.php?action=send-new-comment\">
                                    <div class=\"row control-group\">
                                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                            <label>Titre</label>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Title\" id=\"Title\"
                                                   required=\"\" data-validation-required-message=\"Veuillez entrer un
                                                   titre\" name=\"title\"
                                                   data-dashlane-rid=\"0840ea6118458db9\"
                                                   data-kwimpalastatus=\"alive\" data-kwimpalaid=\"1678747375732-0\"
                                                   aria-invalid=\"false\" data-form-type=\"title\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                    </div>
                                    <div class=\"row control-group\">
                                    <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                        <label>Commentaire</label>
                                        <textarea rows=\"5\" class=\"form-control\" placeholder=\"Commentaire\"
                                                  id=\"Commentaire\" name=\"content\"
                                                  required></textarea>
                                        <p class=\"help-block text-danger\"></p>
                                        <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRFToken\" value=\"{{ CSRFToken
                                        }}\" >
                                        <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"{{ loggedInUser.getEmail()
                                        }}\" >
                                        <input type=\"hidden\" name=\"postTitle\" id=\"postTitle\" value=\"{{ post.getId()
                                        }}\" >
                                    </div>
                                    </div>

                                    <br>
                                    <div id=\"success\"></div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-xs-12\">
                                            <button type=\"submit\" class=\"btn btn-success btn-lg\">Envoyer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            {% else %}
                                <h4>Connectez-vous ou inscrivez-vous pour soumettre un commentaire</h4>
                        <br>
                                <form class=\"form\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=login-page\">
                                    <div class=\"form-group col-xs-12\">
                                        <button type=\"submit\" class=\"btn btn-success btn-lg\"
                                            data-dashlane-rid=\"55f933ab7c0de50e\" data-dashlane-label=\"true\"
                                            data-form-type=\"action\">Se connecter
                                        </button>
                                    </div>
                                </form>
                                </div>
                            {% endif %}
                        </div>
                        <br><br>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa
\t\t\t\t\t\tfa-times\"></i> Fermer la fenêtre
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endfor %}", "modals/modals.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\modals\\modals.html.twig");
    }
}
