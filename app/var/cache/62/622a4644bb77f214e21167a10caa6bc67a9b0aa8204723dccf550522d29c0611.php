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

/* /adminMain/form-add-or-update-user.html.twig */
class __TwigTemplate_86c7964a8cd3f2de527692f7b58eed01447f7d77dcf1b226e7c47b816b334121 extends Template
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
        $this->parent = $this->loadTemplate("adminMain/admin-base.html.twig", "/adminMain/form-add-or-update-user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <section class=\"content\">
        <!-- Validation Stats -->
        <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2><strong>Informations</strong> de validation </h2>
                    </div>
                    <div class=\"body\">
                            ";
        // line 14
        if ( !twig_test_empty(($context["success"] ?? null))) {
            // line 15
            echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            <div class=\"container\">
                                <div class=\"alert-icon\">
                                    <i class=\"zmdi zmdi-thumb-up\"></i>
                                </div>
                                <strong>Well done!</strong> ";
            // line 20
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">
                                        <i class=\"zmdi zmdi-close\"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                            ";
        } elseif ( !twig_test_empty(        // line 28
($context["error"] ?? null))) {
            // line 29
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            <div class=\"container\">
                                <div class=\"alert-icon\">
                                    <i class=\"zmdi zmdi-block\"></i>
                                </div>
                                <strong>Oh snap!</strong> ";
            // line 34
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
        // line 43
        echo "                    </div>
                </div>
            </div>
        </div>

        <!-- #END# Validation Stats -->
        <div class=\"block-header\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-6 col-sm-12\">
                    ";
        // line 52
        if (twig_test_empty(($context["userObject"] ?? null))) {
            // line 53
            echo "                    <h2>Ajouter un nouvel utilisateur
                    </h2>
                    ";
        } else {
            // line 56
            echo "    <h2>Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getFirstname", [], "method", false, false, false, 56), "html", null, true);
            echo "</h2>
                    ";
        }
        // line 58
        echo "                </div>
                <div class=\"col-lg-5 col-md-6 col-sm-12\">
                    <ul class=\"breadcrumb float-md-right\">
                        <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0);\">Forms</a></li>
                        <li class=\"breadcrumb-item active\">Form Validation</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <!-- Basic Validation -->
            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Basic</strong> Validation</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"><a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li><a href=\"javascript:void(0);\">Action</a></li>
                                        <li><a href=\"javascript:void(0);\">Another action</a></li>
                                        <li><a href=\"javascript:void(0);\">Something else</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body\">
                            <form id=\"form_validation\" method=\"POST\" action=\"";
        // line 89
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=";
        echo (( !twig_test_empty(($context["userObject"] ?? null))) ? ("update-user") : ("user-register"));
        echo "\">
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" name=\"lastname\"
                                           value=\"";
        // line 92
        (( !twig_test_empty(($context["userObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getLastname", [], "method", false, false, false, 92), "html", null, true))) : (print ("")));
        echo "\" required>
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" name=\"firstname\"
                                           value=\"";
        // line 96
        (( !twig_test_empty(($context["userObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getFirstname", [], "method", false, false, false, 96), "html", null, true))) : (print ("")));
        echo "\" required>
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\"
                                           value=\"";
        // line 100
        (( !twig_test_empty(($context["userObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getEmail", [], "method", false, false, false, 100), "html", null, true))) : (print ("")));
        echo "\" required>
                                    ";
        // line 101
        if ( !twig_test_empty(($context["userObject"] ?? null))) {
            // line 102
            echo "                                    <input type=\"hidden\" class=\"form-control\"
                                           name=\"lastEmail\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getEmail", [], "method", false, false, false, 103), "html", null, true);
            echo "\">
                                    ";
        }
        // line 105
        echo "                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de téléphone\"
                                           name=\"phone_number\" value=\"";
        // line 109
        (( !twig_test_empty(        // line 108
($context["userObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getPhoneNumber", [], "method", false, false, false, 108), "html", null, true))) : (print ("")));
        // line 109
        echo "\">
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Linkedin\" name=\"linkedin\"
                                           value=\"";
        // line 113
        (( !twig_test_empty(($context["userObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getSocialLinkedin", [], "method", false, false, false, 113), "html", null, true))) : (print ("")));
        echo "\">
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Twitter\" name=\"twitter\"
                                           value=\"";
        // line 117
        (( !twig_test_empty(($context["userObject"] ?? null))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getSocialTwitter", [], "method", false, false, false, 117), "html", null, true))) : (print ("")));
        echo "\">
                                </div>
                                ";
        // line 119
        if ( !twig_test_empty(($context["userObject"] ?? null))) {
            // line 120
            echo "                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio1\" value=\"admin\" ";
            // line 121
            echo (((twig_get_attribute($this->env, $this->source,             // line 122
($context["userObject"] ?? null), "getRoleId", [], "method", false, false, false, 122) === ($context["ROLE_ADMIN"] ?? null))) ? ("checked") : (""));
            echo ">
                                        <label for=\"radio1\">
                                            Administrateur
                                        </label>
                                    </div>
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio2\" value=\"utilisateur\" ";
            // line 128
            echo (((twig_get_attribute($this->env, $this->source,             // line 129
($context["userObject"] ?? null), "getRoleId", [], "method", false, false, false, 129) === ($context["ROLE_USER"] ?? null))) ? ("checked") : (""));
            echo ">
                                        <label for=\"radio2\">
                                            Utilisateur
                                        </label>
                                    </div>
                                ";
        } else {
            // line 135
            echo "                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio1\" value=\"admin\">
                                        <label for=\"radio1\">
                                            Administrateur
                                        </label>
                                    </div>
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio2\" value=\"utilisateur\" checked>
                                        <label for=\"radio2\">
                                            Utilisateur
                                        </label>
                                    </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" required>
                                </div>
                                ";
        }
        // line 151
        echo "                                <div class=\"form-group form-float\">
                                    <input type=\"hidden\" class=\"form-control\" name=\"CSRFToken\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                                </div>
                                <button class=\"btn btn-raised btn-primary btn-round waves-effect\" type=\"submit\">SOUMETTRE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "/adminMain/form-add-or-update-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 152,  265 => 151,  247 => 135,  238 => 129,  237 => 128,  228 => 122,  227 => 121,  224 => 120,  222 => 119,  217 => 117,  210 => 113,  204 => 109,  202 => 108,  201 => 109,  196 => 105,  191 => 103,  188 => 102,  186 => 101,  182 => 100,  175 => 96,  168 => 92,  160 => 89,  127 => 58,  121 => 56,  116 => 53,  114 => 52,  103 => 43,  91 => 34,  84 => 29,  82 => 28,  71 => 20,  64 => 15,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿{% extends 'adminMain/admin-base.html.twig' %}

{% block body %}

    <section class=\"content\">
        <!-- Validation Stats -->
        <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2><strong>Informations</strong> de validation </h2>
                    </div>
                    <div class=\"body\">
                            {% if success is not empty %}
                        <div class=\"alert alert-success\" role=\"alert\">
                            <div class=\"container\">
                                <div class=\"alert-icon\">
                                    <i class=\"zmdi zmdi-thumb-up\"></i>
                                </div>
                                <strong>Well done!</strong> {{ success }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">
                                        <i class=\"zmdi zmdi-close\"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                            {% elseif error is not empty  %}
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
                    </div>
                </div>
            </div>
        </div>

        <!-- #END# Validation Stats -->
        <div class=\"block-header\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-6 col-sm-12\">
                    {% if userObject is empty %}
                    <h2>Ajouter un nouvel utilisateur
                    </h2>
                    {% else %}
    <h2>Bienvenue {{ userObject.getFirstname() }}</h2>
                    {% endif %}
                </div>
                <div class=\"col-lg-5 col-md-6 col-sm-12\">
                    <ul class=\"breadcrumb float-md-right\">
                        <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0);\">Forms</a></li>
                        <li class=\"breadcrumb-item active\">Form Validation</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <!-- Basic Validation -->
            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Basic</strong> Validation</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"><a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li><a href=\"javascript:void(0);\">Action</a></li>
                                        <li><a href=\"javascript:void(0);\">Another action</a></li>
                                        <li><a href=\"javascript:void(0);\">Something else</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body\">
                            <form id=\"form_validation\" method=\"POST\" action=\"{{ _SERVER['BASE_URI'] }}index.php?action={{ (userObject is not empty) ? 'update-user' : 'user-register' }}\">
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" name=\"lastname\"
                                           value=\"{{ (userObject is not empty) ? userObject.getLastname() : \"\" }}\" required>
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" name=\"firstname\"
                                           value=\"{{ (userObject is not empty) ? userObject.getFirstname() : \"\" }}\" required>
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\"
                                           value=\"{{ (userObject is not empty) ? userObject.getEmail() : \"\" }}\" required>
                                    {% if userObject is not empty %}
                                    <input type=\"hidden\" class=\"form-control\"
                                           name=\"lastEmail\" value=\"{{ userObject.getEmail()}}\">
                                    {% endif %}
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de téléphone\"
                                           name=\"phone_number\" value=\"{{ (userObject is not empty) ? userObject
                                        .getPhoneNumber() : \"\" }}\">
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Linkedin\" name=\"linkedin\"
                                           value=\"{{ (userObject is not empty) ? userObject.getSocialLinkedin() : \"\" }}\">
                                </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Twitter\" name=\"twitter\"
                                           value=\"{{ (userObject is not empty) ? userObject.getSocialTwitter() : \"\" }}\">
                                </div>
                                {% if userObject is not empty %}
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio1\" value=\"admin\" {{
                                        (userObject.getRoleId() is same as (ROLE_ADMIN)) ? \"checked\" : \"\" }}>
                                        <label for=\"radio1\">
                                            Administrateur
                                        </label>
                                    </div>
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio2\" value=\"utilisateur\" {{
                                        (userObject.getRoleId() is same as (ROLE_USER) ) ? \"checked\" : \"\" }}>
                                        <label for=\"radio2\">
                                            Utilisateur
                                        </label>
                                    </div>
                                {% else %}
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio1\" value=\"admin\">
                                        <label for=\"radio1\">
                                            Administrateur
                                        </label>
                                    </div>
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"role_title\" id=\"radio2\" value=\"utilisateur\" checked>
                                        <label for=\"radio2\">
                                            Utilisateur
                                        </label>
                                    </div>
                                <div class=\"form-group form-float\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" required>
                                </div>
                                {% endif %}
                                <div class=\"form-group form-float\">
                                    <input type=\"hidden\" class=\"form-control\" name=\"CSRFToken\" value=\"{{CSRFToken}}\">
                                </div>
                                <button class=\"btn btn-raised btn-primary btn-round waves-effect\" type=\"submit\">SOUMETTRE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>

{% endblock %}", "/adminMain/form-add-or-update-user.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\form-add-or-update-user.html.twig");
    }
}
