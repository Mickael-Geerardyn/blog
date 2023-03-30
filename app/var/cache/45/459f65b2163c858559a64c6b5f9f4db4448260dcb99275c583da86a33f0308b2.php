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

/* /adminMain/blog-list.html.twig */
class __TwigTemplate_1ef3980e12a1bb6a63f62e9fc6c718f61c6ded19ad8e092b12f91143683777ba extends Template
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
        return "adminMain/admin-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("adminMain/admin-base.html.twig", "/adminMain/blog-list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<section class=\"content blog-page\">
    <div class=\"block-header\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-6 col-sm-12\">
                <h2>Liste
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
                    <li class=\"breadcrumb-item active\">Liste</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12 left-box\">
                ";
        // line 24
        echo "                ";
        if ( !twig_test_empty(($context["postsArray"] ?? null))) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["postsArray"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 26
                echo "                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getTitle", [], "method", false, false, false, 28), "html", null, true);
                echo "</h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: ";
                // line 30
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 30), "getFirstname", [], "method", false, false, false, 30) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 31
$context["post"], "author", [], "any", false, false, false, 31), "getLastname", [], "method", false, false, false, 31)), "html", null, true);
                echo "</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-amber\"></i>Technology</a></li>
                            ";
                // line 33
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["post"], "getUpdatedAt", [], "method", false, false, false, 33))) {
                    // line 34
                    echo "                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Mis à jour le: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 35
$context["post"], "getUpdatedAt", [], "method", false, false, false, 35), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 37
                echo "                            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["post"], "commentsNumber", [], "any", false, false, false, 37))) {
                    // line 38
                    echo "                                <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Commentaires: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 39
$context["post"], "commentsNumber", [], "any", false, false, false, 39), "total", [], "any", false, false, false, 39), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 41
                echo "                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
                echo "assets/images/blog/blog-page-2.jpg\" alt=\"Awesome Image\">
                        </div>
                        <p>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getHeading", [], "any", false, false, false, 47), "html", null, true);
                echo "</p>
                        <form id=\"form_validation\" method=\"POST\" action=\"";
                // line 48
                echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
                echo "index.php?action=single-post-page\">
                        <button href=\"blog-details.html\" title=\"read more\" class=\"btn btn-round btn-info\">Voir
                            l'article</button>
                            <input type=\"hidden\" name=\"post-id\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "method", false, false, false, 51), "html", null, true);
                echo "\">
                        </form>
                    </div>

                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                ";
        }
        // line 58
        echo "                
                ";
        // line 60
        echo "                ";
        if (( !twig_test_empty(($context["pendingComments"] ?? null)) && twig_test_iterable(($context["pendingComments"] ?? null)))) {
            // line 61
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pendingComments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 62
                echo "                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getTitle", [], "method", false, false, false, 64), "html", null, true);
                echo "</h3>
                        ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", true, true, false, 65)) {
                    // line 66
                    echo "                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: ";
                    // line 67
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 68
$context["comment"], "author", [], "any", false, false, false, 68), "getFirstname", [], "method", false, false, false, 68) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 69
$context["comment"], "author", [], "any", false, false, false, 69), "getLastname", [], "method", false, false, false, 69)), "html", null, true);
                    echo "</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Créé le: ";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 71
$context["comment"], "getCreatedAt", [], "method", false, false, false, 71), "html", null, true);
                    echo "</a></li>
                            ";
                    // line 72
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["comment"], "getUpdatedAt", [], "method", false, false, false, 72))) {
                        // line 73
                        echo "                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Mis à jour le: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                         // line 74
$context["comment"], "getUpdatedAt", [], "method", false, false, false, 74), "html", null, true);
                        echo "</a></li>
                            ";
                    }
                    // line 76
                    echo "                        </ul>
                        ";
                }
                // line 78
                echo "                    </div>
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                        </div>
                        <p>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 82), "html", null, true);
                echo "</p>
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                        <form id=\"form_validation\" method=\"POST\" action=\"";
                // line 85
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
                echo "index.php?action=comment-validated\">
                            <button title=\"Valider le commentaire\" class=\"btn btn-round
                            btn-info\">Valider</button>
                            <input type=\"hidden\" name=\"commentTitle\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getTitle", [], "method", false, false, false, 88), "html", null, true);
                echo "\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
                echo "\">
                        </form>
                        <form id=\"form_validation\" method=\"POST\" action=\"";
                // line 91
                echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
                echo "index.php?action=rejected-comment\">
                            <button title=\"Valider le commentaire\" class=\"btn btn-round
                            btn-danger\">Supprimer</button>
                            <input type=\"hidden\" name=\"commentTitle\" value=\"";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getTitle", [], "method", false, false, false, 94), "html", null, true);
                echo "\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
                echo "\">
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                ";
        } else {
            // line 103
            echo "                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <h3>Aucun commentaire à valider</h3>
                    </div>
            </div>
                ";
        }
        // line 109
        echo "        </div>
    </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "/adminMain/blog-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 109,  250 => 103,  247 => 102,  234 => 95,  230 => 94,  224 => 91,  219 => 89,  215 => 88,  209 => 85,  203 => 82,  197 => 78,  193 => 76,  188 => 74,  186 => 73,  184 => 72,  180 => 71,  179 => 70,  175 => 69,  174 => 68,  173 => 67,  170 => 66,  168 => 65,  164 => 64,  160 => 62,  155 => 61,  152 => 60,  149 => 58,  146 => 57,  134 => 51,  128 => 48,  124 => 47,  119 => 45,  113 => 41,  108 => 39,  106 => 38,  103 => 37,  98 => 35,  96 => 34,  94 => 33,  89 => 31,  88 => 30,  83 => 28,  79 => 26,  74 => 25,  71 => 24,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿{% extends 'adminMain/admin-base.html.twig' %}

{% block body %}
<section class=\"content blog-page\">
    <div class=\"block-header\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-6 col-sm-12\">
                <h2>Liste
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
                    <li class=\"breadcrumb-item active\">Liste</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12 left-box\">
                {# PARTIE LISTE DES ARTICLES #}
                {% if postsArray is not empty %}
                {% for post in postsArray %}
                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\">{{ post.getTitle() }}</h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: {{ post.author.getFirstname()
                                    ~\" \"~ post.author.getLastname() }}</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-amber\"></i>Technology</a></li>
                            {% if post.getUpdatedAt() is not empty %}
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Mis à jour le: {{
                                    post.getUpdatedAt() }}</a></li>
                            {% endif %}
                            {% if post.commentsNumber is not empty %}
                                <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Commentaires: {{
                                        post.commentsNumber.total }}</a></li>
                            {% endif %}
                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/blog/blog-page-2.jpg\" alt=\"Awesome Image\">
                        </div>
                        <p>{{ post.getHeading }}</p>
                        <form id=\"form_validation\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=single-post-page\">
                        <button href=\"blog-details.html\" title=\"read more\" class=\"btn btn-round btn-info\">Voir
                            l'article</button>
                            <input type=\"hidden\" name=\"post-id\" value=\"{{ post.getId() }}\">
                        </form>
                    </div>

                </div>
                {% endfor %}
                {% endif %}
                
                {# PARTIE LISTE DES COMMENTAIRES #}
                {% if (pendingComments is not empty and pendingComments is iterable) %}
                {% for comment in pendingComments %}
                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\">{{ comment.getTitle() }}</h3>
                        {% if comment.author is defined %}
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: {{
                                    comment.author.getFirstname()
                                    ~\" \"~ comment.author.getLastname() }}</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Créé le: {{
                                    comment.getCreatedAt()}}</a></li>
                            {% if comment.getUpdatedAt() is not empty %}
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Mis à jour le: {{
                                    comment.getUpdatedAt()}}</a></li>
                            {% endif %}
                        </ul>
                        {% endif %}
                    </div>
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                        </div>
                        <p>{{ comment.getContent() }}</p>
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                        <form id=\"form_validation\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=comment-validated\">
                            <button title=\"Valider le commentaire\" class=\"btn btn-round
                            btn-info\">Valider</button>
                            <input type=\"hidden\" name=\"commentTitle\" value=\"{{ comment.getTitle() }}\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"{{ CSRFToken }}\">
                        </form>
                        <form id=\"form_validation\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=rejected-comment\">
                            <button title=\"Valider le commentaire\" class=\"btn btn-round
                            btn-danger\">Supprimer</button>
                            <input type=\"hidden\" name=\"commentTitle\" value=\"{{ comment.getTitle() }}\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"{{ CSRFToken }}\">
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
                {% else %}
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <h3>Aucun commentaire à valider</h3>
                    </div>
            </div>
                {% endif %}
        </div>
    </div>
    </div>
</section>

{% endblock %}", "/adminMain/blog-list.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\blog-list.html.twig");
    }
}
