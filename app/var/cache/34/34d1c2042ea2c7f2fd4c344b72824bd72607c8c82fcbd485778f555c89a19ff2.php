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

/* /loginMain/sign-up.html.twig */
class __TwigTemplate_a6df9ba3923fe6541e3ec06cc55be2cb0cb05d5078c14274c0bebfe94ae74851 extends Template
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
        return "loginMain/login-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("loginMain/login-base.html.twig", "/loginMain/sign-up.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"page-header\">
    <div class=\"page-header-image\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/login.jpg)\"></div>
    <div class=\"container\">
        <div class=\"col-md-12 content-center\">
\t\t\t";
        // line 9
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 10
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    <div class=\"container\">
                        <div class=\"alert-icon\">
                            <i class=\"zmdi zmdi-block\"></i>
                        </div>
                        <strong>Oh snap! </strong> ";
            // line 15
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
        // line 24
        echo "            <div class=\"card-plain\">
                <form class=\"form\" method=\"POST\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=new-user-register\">
                    <div class=\"header\">
                        <div class=\"logo-container\">
                            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/logo.svg\" alt=\"\">
                        </div>
                        <h5>Créer un compte</h5>
                    </div>
                    <div class=\"content\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\"
                                   placeholder=\"Prénom\" required>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-account-circle\"></i>
                            </span>
                        </div>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"Nom\"
                                   required>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-account-circle\"></i>
                            </span>
                        </div>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\"
                                   required>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-email\"></i>
                            </span>
                        </div>
                        <div class=\"input-group\">
                            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\"
                                   class=\"form-control\"
                                   required/>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-lock\"></i>
                            </span>
                        </div>         
                    </div>
                    <div class=\"footer text-center\">
                        <button class=\"btn l-cyan btn-round btn-lg btn-block waves-effect
                        waves-light\">ENVOYER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"copyright\">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
        </div>
    </footer>
</div>

";
    }

    public function getTemplateName()
    {
        return "/loginMain/sign-up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  84 => 25,  81 => 24,  69 => 15,  62 => 10,  60 => 9,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿{% extends \"loginMain/login-base.html.twig\" %}

{% block body %}

<div class=\"page-header\">
    <div class=\"page-header-image\" style=\"background-image:url({{ _SERVER['BASE_URI'] }}assets/images/login.jpg)\"></div>
    <div class=\"container\">
        <div class=\"col-md-12 content-center\">
\t\t\t{% if error is not empty %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    <div class=\"container\">
                        <div class=\"alert-icon\">
                            <i class=\"zmdi zmdi-block\"></i>
                        </div>
                        <strong>Oh snap! </strong> {{ error }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">
                                <i class=\"zmdi zmdi-close\"></i>
                            </span>
                        </button>
                    </div>
                </div>
            {% endif %}
            <div class=\"card-plain\">
                <form class=\"form\" method=\"POST\" action=\"{{ _SERVER['BASE_URI'] }}index.php?action=new-user-register\">
                    <div class=\"header\">
                        <div class=\"logo-container\">
                            <img src=\"{{ _SERVER['BASE_URI'] }}assets/images/logo.svg\" alt=\"\">
                        </div>
                        <h5>Créer un compte</h5>
                    </div>
                    <div class=\"content\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\"
                                   placeholder=\"Prénom\" required>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-account-circle\"></i>
                            </span>
                        </div>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"Nom\"
                                   required>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-account-circle\"></i>
                            </span>
                        </div>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\"
                                   required>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-email\"></i>
                            </span>
                        </div>
                        <div class=\"input-group\">
                            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Mot de passe\"
                                   class=\"form-control\"
                                   required/>
                            <span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-lock\"></i>
                            </span>
                        </div>         
                    </div>
                    <div class=\"footer text-center\">
                        <button class=\"btn l-cyan btn-round btn-lg btn-block waves-effect
                        waves-light\">ENVOYER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"copyright\">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
        </div>
    </footer>
</div>

{% endblock %}", "/loginMain/sign-up.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\login\\loginMain\\sign-up.html.twig");
    }
}
