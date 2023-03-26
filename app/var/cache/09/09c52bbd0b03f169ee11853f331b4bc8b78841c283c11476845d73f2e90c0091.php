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

/* /adminMain/users-page.html.twig */
class __TwigTemplate_a689dbe73a8039701251c042d1700e97a8fa33c645ed27da2198abf6e705189c extends Template
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
        $this->parent = $this->loadTemplate("adminMain/admin-base.html.twig", "/adminMain/users-page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<section class=\"content contact\">
    <div class=\"block-header\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-6 col-sm-12\">
                <h2>Contact
                <small class=\"text-muted\">Welcome to Compass</small>
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0);\">App</a></li>
                    <li class=\"breadcrumb-item active\">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row clearfix\">
            <div class=\"col-lg-12\">
                <div class=\"card action_bar\">
                    <div class=\"body\">
                        <div class=\"row clearfix\">
                            <div class=\"col-lg-1 col-md-2 col-3\">
                                <div class=\"checkbox inlineblock delete_all\">
                                    <input id=\"deleteall\" type=\"checkbox\">
                                    <label for=\"deleteall\">
                                        All
                                    </label>
                                </div>                                
                            </div>
                            <div class=\"col-lg-5 col-md-5 col-6\">
                                <div class=\"input-group search\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"zmdi zmdi-search\"></i>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-5 col-3\">
                                <div class=\"btn-group hidden-sm-down\" role=\"group\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-simple dropdown-toggle btn-round\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"zmdi zmdi-label\"></i>
                                            <span class=\"caret\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu dropdown-menu-right slideDown\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Family</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Work</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Google</a>
                                            </li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Create a Label</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type=\"button\" class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down\">
                                    <i class=\"zmdi zmdi-plus-circle\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down\">
                                    <i class=\"zmdi zmdi-archive\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-icon btn-simple btn-icon-mini btn-round btn-danger float-md-right\">
                                    <i class=\"zmdi zmdi-delete\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class=\"row clearfix\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"body table-responsive\">
                        <table class=\"table table-hover m-b-0 c_list\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th data-breakpoints=\"xs\">Téléphone</th>
                                    <th data-breakpoints=\"xs sm md\">Email</th>
                                    <th data-breakpoints=\"xs sm md\">Linkedin</th>
                                    <th data-breakpoints=\"xs sm md\">Twitter</th>
                                    <th data-breakpoints=\"xs\">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usersArrayObject"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 101
            echo "                                <tr>
                                    <td>
                                        <div class=\"checkbox\">
                                            <input id=\"delete_2\" type=\"checkbox\">
                                            <label for=\"delete_2\">&nbsp;</label>
                                        </div>
                                    </td>

                                    <td>
                                        <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
            echo "assets/static/img/photo.jpg\"
                                             class=\"rounded-circle avatar\" alt=\"\">
                                        <p class=\"c_name\">";
            // line 112
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "getFirstname", [], "method", false, false, false, 112) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "getLastname", [], "method", false, false, false, 112)), "html", null, true);
            echo "<span class=\"badge badge-default m-l-10 hidden-sm-down\">Family</span></p>
                                    </td>
                                    <td>
                                        <span class=\"phone\"><i class=\"zmdi zmdi-phone m-r-10\"></i>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPhoneNumber", [], "method", false, false, false, 115), "html", null, true);
            // line 116
            echo "</span>
                                    </td>
                                    <td>
                                        <span class=\"email\"><a href=\"javascript:void(0);\" title=\"\"><i class=\"zmdi
                                        zmdi-email m-r-5\"></i>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 120), "html", null, true);
            echo "</a></span>
                                    </td>
                                    <td>
                                        <span><i class=\"zmdi zmdi-pin\"></i>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getSocialLinkedin", [], "method", false, false, false, 123), "html", null, true);
            echo "</span>
                                    </td>
                                    <td>
                                        <span><i class=\"zmdi zmdi-pin\"></i>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getSocialTwitter", [], "method", false, false, false, 126), "html", null, true);
            echo "</span>
                                    </td>
                                    <td>
                                        <form action=\"";
            // line 129
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=user-modifications-page\" method=\"POST\">
                                        <button class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round\"><i class=\"zmdi zmdi-edit\"></i></button>
                                            <input type=\"hidden\" name=\"email\" id=\"email\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 131), "html", null, true);
            echo "\">
                                            <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRFToken\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SESSION"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["CSRFToken"] ?? null) : null), "html", null, true);
            echo "\">
                                        </form>
                                        <form action=\"";
            // line 134
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=user-delete\" method=\"POST\">
                                        <button class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round\"><i class=\"zmdi zmdi-delete\"></i></button>
                                            <input type=\"hidden\" name=\"email\" id=\"email\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 136), "html", null, true);
            echo "\">
                                            <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRToken\" value=\"";
            // line 137
            echo twig_escape_filter($this->env, (($__internal_compile_4 =             // line 138
($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["CSRFToken"] ?? null) : null), "html", null, true);
            echo "\">
                                        </form>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pre>";
        // line 150
        echo twig_var_dump($this->env, $context, ...[0 => ($context["_SESSION"] ?? null)]);
        echo "</pre>
</section>

";
    }

    public function getTemplateName()
    {
        return "/adminMain/users-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 150,  235 => 143,  224 => 138,  223 => 137,  219 => 136,  214 => 134,  209 => 132,  205 => 131,  200 => 129,  194 => 126,  188 => 123,  182 => 120,  176 => 116,  174 => 115,  168 => 112,  163 => 110,  152 => 101,  148 => 100,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿{% extends 'adminMain/admin-base.html.twig' %}

{% block body %}

<section class=\"content contact\">
    <div class=\"block-header\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-6 col-sm-12\">
                <h2>Contact
                <small class=\"text-muted\">Welcome to Compass</small>
                </h2>
            </div>
            <div class=\"col-lg-5 col-md-6 col-sm-12\">
                <ul class=\"breadcrumb float-md-right\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Compass</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0);\">App</a></li>
                    <li class=\"breadcrumb-item active\">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row clearfix\">
            <div class=\"col-lg-12\">
                <div class=\"card action_bar\">
                    <div class=\"body\">
                        <div class=\"row clearfix\">
                            <div class=\"col-lg-1 col-md-2 col-3\">
                                <div class=\"checkbox inlineblock delete_all\">
                                    <input id=\"deleteall\" type=\"checkbox\">
                                    <label for=\"deleteall\">
                                        All
                                    </label>
                                </div>                                
                            </div>
                            <div class=\"col-lg-5 col-md-5 col-6\">
                                <div class=\"input-group search\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                    <span class=\"input-group-addon\">
                                        <i class=\"zmdi zmdi-search\"></i>
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-5 col-3\">
                                <div class=\"btn-group hidden-sm-down\" role=\"group\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-simple dropdown-toggle btn-round\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"zmdi zmdi-label\"></i>
                                            <span class=\"caret\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu dropdown-menu-right slideDown\">
                                            <li>
                                                <a href=\"javascript:void(0);\">Family</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Work</a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Google</a>
                                            </li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li>
                                                <a href=\"javascript:void(0);\">Create a Label</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type=\"button\" class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down\">
                                    <i class=\"zmdi zmdi-plus-circle\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down\">
                                    <i class=\"zmdi zmdi-archive\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-icon btn-simple btn-icon-mini btn-round btn-danger float-md-right\">
                                    <i class=\"zmdi zmdi-delete\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class=\"row clearfix\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"body table-responsive\">
                        <table class=\"table table-hover m-b-0 c_list\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th data-breakpoints=\"xs\">Téléphone</th>
                                    <th data-breakpoints=\"xs sm md\">Email</th>
                                    <th data-breakpoints=\"xs sm md\">Linkedin</th>
                                    <th data-breakpoints=\"xs sm md\">Twitter</th>
                                    <th data-breakpoints=\"xs\">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                {% for user in usersArrayObject %}
                                <tr>
                                    <td>
                                        <div class=\"checkbox\">
                                            <input id=\"delete_2\" type=\"checkbox\">
                                            <label for=\"delete_2\">&nbsp;</label>
                                        </div>
                                    </td>

                                    <td>
                                        <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/static/img/photo.jpg\"
                                             class=\"rounded-circle avatar\" alt=\"\">
                                        <p class=\"c_name\">{{ user.getFirstname()~\" \"~user.getLastname()}}<span class=\"badge badge-default m-l-10 hidden-sm-down\">Family</span></p>
                                    </td>
                                    <td>
                                        <span class=\"phone\"><i class=\"zmdi zmdi-phone m-r-10\"></i>{{ user
                                            .getPhoneNumber() }}</span>
                                    </td>
                                    <td>
                                        <span class=\"email\"><a href=\"javascript:void(0);\" title=\"\"><i class=\"zmdi
                                        zmdi-email m-r-5\"></i>{{ user.getEmail() }}</a></span>
                                    </td>
                                    <td>
                                        <span><i class=\"zmdi zmdi-pin\"></i>{{ user.getSocialLinkedin() }}</span>
                                    </td>
                                    <td>
                                        <span><i class=\"zmdi zmdi-pin\"></i>{{ user.getSocialTwitter() }}</span>
                                    </td>
                                    <td>
                                        <form action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=user-modifications-page\" method=\"POST\">
                                        <button class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round\"><i class=\"zmdi zmdi-edit\"></i></button>
                                            <input type=\"hidden\" name=\"email\" id=\"email\" value=\"{{ user.getEmail() }}\">
                                            <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRFToken\" value=\"{{ _SESSION[\"CSRFToken\"] }}\">
                                        </form>
                                        <form action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=user-delete\" method=\"POST\">
                                        <button class=\"btn btn-default btn-icon btn-simple btn-icon-mini btn-round\"><i class=\"zmdi zmdi-delete\"></i></button>
                                            <input type=\"hidden\" name=\"email\" id=\"email\" value=\"{{ user.getEmail() }}\">
                                            <input type=\"hidden\" name=\"CSRFToken\" id=\"CSRToken\" value=\"{{
                                            _SERVER[\"CSRFToken\"] }}\">
                                        </form>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pre>{{ dump(_SESSION) }}</pre>
</section>

{% endblock %}", "/adminMain/users-page.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\users-page.html.twig");
    }
}
