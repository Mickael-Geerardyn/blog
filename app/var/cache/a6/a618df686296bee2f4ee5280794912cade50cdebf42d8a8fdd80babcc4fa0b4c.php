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
    ";
        // line 21
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 22
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <div class=\"container\">
                <div class=\"alert-icon\">
                    <i class=\"zmdi zmdi-block\"></i>
                </div>
                <strong>Oh snap!</strong> ";
            // line 27
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">
                        <i class=\"zmdi zmdi-close\"></i>
                    </span>
                </button>
            </div>
        </div>
    ";
        }
        // line 36
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\"><a href=\"blog-details.html\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getTitle", [], "method", false, false, false, 41), "html", null, true);
        echo "</a></h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: ";
        // line 43
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getFirstname", [], "method", false, false, false, 43) . " ") . twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getLastname", [], "method", false, false, false, 43)), "html", null, true);
        echo "</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-red\"></i>Photography</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Comments: 3</a></li>
                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"../../assets/images/blog/blog-page-1.jpg\" alt=\"Awesome Image\">
                            <div class=\"social_share\">                            
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-facebook\"></i></button>
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-twitter\"></i></button>
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-instagram\"></i></button>
                            </div>
                        </div>
                        <p>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getHeading", [], "method", false, false, false, 57), "html", null, true);
        echo "</p>
                        <p>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["postObject"] ?? null), "getContent", [], "method", false, false, false, 58), "html", null, true);
        echo "</p>

                    </div>
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
        return array (  123 => 58,  119 => 57,  102 => 43,  97 => 41,  90 => 36,  78 => 27,  71 => 22,  69 => 21,  50 => 4,  46 => 3,  35 => 1,);
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
    {% if error is not empty  %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <div class=\"container\">
                <div class=\"alert-icon\">
                    <i class=\"zmdi zmdi-block\"></i>
                </div>
                <strong>Oh snap!</strong> {{ error }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">
                        <i class=\"zmdi zmdi-close\"></i>
                    </span>
                </button>
            </div>
        </div>
    {% endif %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"card single_post\">
                    <div class=\"body\">
                        <h3 class=\"m-t-0 m-b-5\"><a href=\"blog-details.html\">{{ postObject.getTitle() }}</a></h3>
                        <ul class=\"meta\">
                            <li><a href=\"#\"><i class=\"zmdi zmdi-account col-blue\"></i>Auteur: {{ postObject.getFirstname()~\" \"~postObject.getLastname()}}</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-label col-red\"></i>Photography</a></li>
                            <li><a href=\"#\"><i class=\"zmdi zmdi-comment-text col-blue\"></i>Comments: 3</a></li>
                        </ul>
                    </div>                    
                    <div class=\"body\">
                        <div class=\"img-post m-b-15\">
                            <img src=\"../../assets/images/blog/blog-page-1.jpg\" alt=\"Awesome Image\">
                            <div class=\"social_share\">                            
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-facebook\"></i></button>
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-twitter\"></i></button>
                                <button class=\"btn btn-primary btn-icon btn-icon-mini btn-round\"><i class=\"zmdi zmdi-instagram\"></i></button>
                            </div>
                        </div>
                        <p>{{ postObject.getHeading() }}</p>
                        <p>{{ postObject.getContent() }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "/adminMain/blog-details.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\blog-details.html.twig");
    }
}
