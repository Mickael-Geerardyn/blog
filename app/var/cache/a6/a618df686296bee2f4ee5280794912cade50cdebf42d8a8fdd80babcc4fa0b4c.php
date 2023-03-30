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

/* /adminMain/blog-details.html.twig */
class __TwigTemplate_c2960a48322d5461e49531d9c0b75fb58dc46a4b7ce3872db262e28b893b32a4 extends Template
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
        $this->parent = $this->loadTemplate("adminMain/admin-base.html.twig", "/adminMain/blog-details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<section class=\"content blog-page\">
    <div class=\"block-header\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-6 col-sm-12\">
                <h2>Article
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
                    <li class=\"breadcrumb-item active\">Blog Detail</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\"><a href=\"blog-details.html\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getTitle", [], "method", false, false, false, 26), "html", null, true);
        echo "</a></h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: </a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-red\"></i>Photography</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Comments: </a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Validé le:
                                    </a></li>
                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/blog/blog-page-1.jpg\" alt=\"Awesome Image\">
                        </div>
                        <h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getTitle", [], "method", false, false, false, 39), "html", null, true);
        echo "</h1>
                        <p>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getHeading", [], "method", false, false, false, 40), "html", null, true);
        echo "</p>
                        <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getContent", [], "method", false, false, false, 41), "html", null, true);
        echo "</p>
                    </div>
                    <form id=\"form_validation\" method=\"POST\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=validated-post\" novalidate=\"novalidate\">
                        <button class=\"btn btn-round
                        btn-success\">Valider</button>
                        <input type=\"hidden\" name=\"post-id\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getId", [], "method", false, false, false, 46), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                    </form>
                    <form id=\"form_validation\" method=\"POST\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=rejected-post\" novalidate=\"novalidate\">
                        <button class=\"btn btn-round
                        btn-danger\">Rejeter</button>
                        <input type=\"hidden\" name=\"post-id\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getId", [], "method", false, false, false, 52), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/adminMain/blog-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  127 => 52,  121 => 49,  116 => 47,  112 => 46,  106 => 43,  101 => 41,  97 => 40,  93 => 39,  88 => 37,  74 => 26,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿{% extends 'adminMain/admin-base.html.twig' %}

{% block body %}

<section class=\"content blog-page\">
    <div class=\"block-header\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-6 col-sm-12\">
                <h2>Article
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
                    <li class=\"breadcrumb-item active\">Blog Detail</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\"><a href=\"blog-details.html\">{{ postObject.getTitle() }}</a></h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: </a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-red\"></i>Photography</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Comments: </a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Validé le:
                                    </a></li>
                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/blog/blog-page-1.jpg\" alt=\"Awesome Image\">
                        </div>
                        <h1>{{ postObject.getTitle() }}</h1>
                        <p>{{ postObject.getHeading() }}</p>
                        <p>{{ postObject.getContent() }}</p>
                    </div>
                    <form id=\"form_validation\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=validated-post\" novalidate=\"novalidate\">
                        <button class=\"btn btn-round
                        btn-success\">Valider</button>
                        <input type=\"hidden\" name=\"post-id\" value=\"{{ postObject.getId() }}\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"{{ CSRFToken }}\">
                    </form>
                    <form id=\"form_validation\" method=\"POST\" action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=rejected-post\" novalidate=\"novalidate\">
                        <button class=\"btn btn-round
                        btn-danger\">Rejeter</button>
                        <input type=\"hidden\" name=\"post-id\" value=\"{{ postObject.getId() }}\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"{{ CSRFToken }}\">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "/adminMain/blog-details.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\blog-details.html.twig");
    }
}
