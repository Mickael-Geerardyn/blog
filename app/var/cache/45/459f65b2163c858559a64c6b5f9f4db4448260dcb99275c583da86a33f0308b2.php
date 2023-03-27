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
                <h2>Liste des articles
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
                    <li class=\"breadcrumb-item active\">Liste des articles</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12 left-box\">
                ";
        // line 23
        if ( !twig_test_empty(($context["postsArray"] ?? null))) {
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["postsArray"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 25
                echo "                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getTitle", [], "method", false, false, false, 27), "html", null, true);
                echo "</h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: ";
                // line 29
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["post"], "getFirstname", [], "method", false, false, false, 29) . " ") . twig_get_attribute($this->env, $this->source,                 // line 30
$context["post"], "getLastname", [], "method", false, false, false, 30)), "html", null, true);
                echo "</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-amber\"></i>Technology</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Comments: 3</a></li>
                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"../../assets/images/blog/blog-page-2.jpg\" alt=\"Awesome Image\">
                            <div class=\"social_share\">
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-twitter\"></i></button>
                            </div>
                        </div>
                        <p>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getHeading", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
                        <form id=\"form_validation\" method=\"POST\" action=\"";
                // line 43
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
                echo "index.php?action=single-post\">
                        <button href=\"blog-details.html\" title=\"read more\" class=\"btn btn-round btn-info\">Read More</button>
                            <input type=\"hidden\" name=\"post-title\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getTitle", [], "method", false, false, false, 45), "html", null, true);
                echo "\">
                        </form>
                    </div>

                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                ";
        }
        // line 52
        echo "            </div>
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
        return array (  127 => 52,  124 => 51,  112 => 45,  107 => 43,  103 => 42,  88 => 30,  87 => 29,  82 => 27,  78 => 25,  73 => 24,  71 => 23,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿{% extends 'adminMain/admin-base.html.twig' %}

{% block body %}
<section class=\"content blog-page\">
    <div class=\"block-header\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-6 col-sm-12\">
                <h2>Liste des articles
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
                    <li class=\"breadcrumb-item active\">Liste des articles</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12 left-box\">
                {% if postsArray is not empty %}
                {% for post in postsArray %}
                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\">{{ post.getTitle() }}</h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: {{ post.getFirstname()
                                    ~\" \"~ post.getLastname() }}</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-amber\"></i>Technology</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Comments: 3</a></li>
                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"../../assets/images/blog/blog-page-2.jpg\" alt=\"Awesome Image\">
                            <div class=\"social_share\">
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-twitter\"></i></button>
                            </div>
                        </div>
                        <p>{{ post.getHeading }}</p>
                        <form id=\"form_validation\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=single-post\">
                        <button href=\"blog-details.html\" title=\"read more\" class=\"btn btn-round btn-info\">Read More</button>
                            <input type=\"hidden\" name=\"post-title\" value=\"{{ post.getTitle() }}\">
                        </form>
                    </div>

                </div>
                {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
</section>

{% endblock %}", "/adminMain/blog-list.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\blog-list.html.twig");
    }
}
