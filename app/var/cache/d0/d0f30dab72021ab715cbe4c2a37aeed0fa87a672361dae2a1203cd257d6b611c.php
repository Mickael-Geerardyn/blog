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
<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getId", [], "method", false, false, false, 8), "html", null, true);
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
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getTitle", [], "method", false, false, false, 21), "html", null, true);
        echo "</h2>
                        <hr class=\"star-primary\">
                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/img/portfolio/cabin.png\"
                             class=\"img-responsive img-centered\" alt=\"\">
                        <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getHeading", [], "method", false, false, false, 25), "html", null, true);
        echo "</p>
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getContent", [], "method", false, false, false, 26), "html", null, true);
        echo "</p>
                        <ul class=\"list-inline item-details\">
                            <li>Auteur:
                                <strong>";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "postAuthor", [], "any", false, false, false, 29), "getFirstname", [], "method", false, false, false, 29) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "postAuthor", [], "any", false, false, false, 29), "getLastname", [], "method", false, false, false, 29)), "html", null, true);
        echo "
                                </strong>
                            </li>
                            <li>Date:
                                <strong>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getCreatedAt", [], "method", false, false, false, 33), "d/m/Y"), "html", null, true);
        echo "
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "postComments", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 42
            echo "                            <div class=\"modal-body\">
                                <h3>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getTitle", [], "method", false, false, false, 43), "html", null, true);
            echo "</h3>
                                <p>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 44), "html", null, true);
            echo "</p>
                                <ul class=\"list-inline item-details\">
                                    <li>Auteur:
                                        <strong>";
            // line 47
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "commentAuthor", [], "any", false, false, false, 47), "getFirstname", [], "method", false, false, false, 47) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "commentAuthor", [], "any", false, false, false, 47), "getLastname", [], "method", false, false, false, 47)), "html", null, true);
            echo "
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getCreatedAt", [], "method", false, false, false, 51), "d/m/Y"), "html", null, true);
            echo "</strong>
                                    </li>
                                </ul>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                        <br><br>
                        <div class=\"row\">
                            ";
        // line 59
        if (array_key_exists("loggedInUser", $context)) {
            // line 60
            echo "                            <div class=\"col-lg-8 col-lg-offset-2\">
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name=\"sentComment\" method=\"POST\"
                                      action=\"";
            // line 64
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
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
                                                  required
                                                  data-validation-required-message=\"Veuillez rédiger votre
                                                      commentaire.\"
                                                  data-dashlane-rid=\"1745ba34006beafb\"
                                                  data-form-type=\"other\"></textarea>
                                        <p class=\"help-block text-danger\"></p>
                                        <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRFToken\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            // line 89
            echo "\" >
                                        <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "getEmail", [], "method", false, false, false, 90), "html", null, true);
            // line 92
            echo "\" >
                                        <input type=\"hidden\" name=\"postTitle\" id=\"postTitle\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getTitle", [], "method", false, false, false, 93), "html", null, true);
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
                            ";
        } else {
            // line 107
            echo "                                <h4>Connectez-vous ou inscrivez-vous pour soumettre un commentaire</h4>
                        <br>
                                <form class=\"form\" method=\"POST\" action=\"";
            // line 109
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
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
        // line 119
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
        return array (  219 => 119,  206 => 109,  202 => 107,  185 => 93,  182 => 92,  180 => 90,  177 => 89,  175 => 88,  148 => 64,  142 => 60,  140 => 59,  135 => 56,  124 => 51,  117 => 47,  111 => 44,  107 => 43,  104 => 42,  100 => 41,  89 => 33,  82 => 29,  76 => 26,  72 => 25,  67 => 23,  62 => 21,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
\t<a class=\"btn btn-primary\" href=\"#page-top\">
\t\t<i class=\"fa fa-chevron-up\"></i>
\t</a>
</div>
<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal{{ postObject.getId() }}\" tabindex=\"-1\" role=\"dialog\"
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
                        <h2>{{ postObject.getTitle() }}</h2>
                        <hr class=\"star-primary\">
                        <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/img/portfolio/cabin.png\"
                             class=\"img-responsive img-centered\" alt=\"\">
                        <p>{{ postObject.getHeading() }}</p>
                        <p>{{ postObject.getContent() }}</p>
                        <ul class=\"list-inline item-details\">
                            <li>Auteur:
                                <strong>{{ postObject.postAuthor.getFirstname()~\" \"~postObject.postAuthor.getLastname() }}
                                </strong>
                            </li>
                            <li>Date:
                                <strong>{{ postObject.getCreatedAt()|date(\"d/m/Y\") }}
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href=\"http://startbootstrap.com\">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        {% for comment in postObject.postComments %}
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
                            {% if loggedInUser is defined %}
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
                                                  required
                                                  data-validation-required-message=\"Veuillez rédiger votre
                                                      commentaire.\"
                                                  data-dashlane-rid=\"1745ba34006beafb\"
                                                  data-form-type=\"other\"></textarea>
                                        <p class=\"help-block text-danger\"></p>
                                        <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRFToken\" value=\"{{ CSRFToken
                                        }}\" >
                                        <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"{{ loggedInUser
                                            .getEmail()
                                        }}\" >
                                        <input type=\"hidden\" name=\"postTitle\" id=\"postTitle\" value=\"{{ postObject.getTitle() }}\" >
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

", "modals/modals.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\modals\\modals.html.twig");
    }
}
