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

/* navbar.html.twig */
class __TwigTemplate_4ee9ac0c29853517b72a695a8a52588156531628731a39c4cb2666a4d1136fa2 extends Template
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
        echo "<!-- Navigation -->
<nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
\t<div class=\"container\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"#page-top\">";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 9) . " ") . twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 9)), "html", null, true);
        echo "</a>
\t\t</div>
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t<a href=\"#page-top\">";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 15) . " ") . twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 15)), "html", null, true);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"#portfolio\">Portfolio</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"#about\">A propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"#contact\">Contact</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 26
        if (twig_test_empty(($context["loggedInUser"] ?? null))) {
            // line 27
            echo "\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=login-page\">Se connecter</a>
\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=sign-up-page\">Créer un compte</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t";
        if (( !twig_test_empty(($context["loggedInUser"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "getRoleId", [], "method", false, false, false, 34) ===         // line 35
($context["ROLE_ADMIN"] ?? null)))) {
            // line 36
            echo "\t\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=landing-dashboard\">Administration</a>
\t\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=logout\">Se déconnecter</a>
\t\t\t\t</li>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 42
($context["loggedInUser"] ?? null), "getRoleId", [], "method", false, false, false, 42) != ($context["ROLE_ADMIN"] ?? null))) {
            // line 43
            echo "\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
            echo "index.php?action=logout\">Se déconnecter</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 47
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 49
        if ( !twig_test_empty(($context["success"] ?? null))) {
            // line 50
            echo "\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"alert-icon\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-thumb-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Well done!</strong> ";
            // line 55
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">
            <i class=\"zmdi zmdi-close\"></i>
        </span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 64
        echo "\t\t";
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 65
            echo "\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"alert-icon\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-block\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Oh snap! </strong> ";
            // line 70
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">
                                <i class=\"zmdi zmdi-close\"></i>
                            </span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 79
        echo "\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/img/profile.png\" alt=\"\">
\t\t\t\t<div class=\"intro-text\">
\t\t\t\t\t<span class=\"name\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 91), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 92
($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 92), "html", null, true);
        echo "</span>
\t\t\t\t\t<hr class=\"star-light\">
\t\t\t\t\t<span class=\"skills\">Développeur web back-end PHP/SYMFONY</span>
\t\t\t\t\t";
        // line 95
        echo ((array_key_exists("error", $context)) ? (($context["error"] ?? null)) : (""));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


";
    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 95,  183 => 92,  180 => 91,  175 => 89,  163 => 79,  151 => 70,  144 => 65,  141 => 64,  129 => 55,  122 => 50,  120 => 49,  116 => 47,  110 => 44,  107 => 43,  105 => 42,  100 => 40,  94 => 37,  91 => 36,  89 => 35,  87 => 34,  81 => 31,  75 => 28,  72 => 27,  70 => 26,  56 => 15,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation -->
<nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
\t<div class=\"container\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"#page-top\">{{ ownerUser.getFirstname()~\" \"~ownerUser.getLastname() }}</a>
\t\t</div>
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t<a href=\"#page-top\">{{ ownerUser.getFirstname()~\" \"~ownerUser.getLastname() }}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"#portfolio\">Portfolio</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"#about\">A propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"#contact\">Contact</a>
\t\t\t\t</li>
\t\t\t\t{% if loggedInUser is empty %}
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=login-page\">Se connecter</a>
\t\t\t\t</li>
\t\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=sign-up-page\">Créer un compte</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t{% if loggedInUser is not empty and loggedInUser.getRoleId() is same as
\t\t\t\t\t(ROLE_ADMIN)%}
\t\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t\t<a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=landing-dashboard\">Administration</a>
\t\t\t\t\t</li>
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=logout\">Se déconnecter</a>
\t\t\t\t</li>
\t\t\t\t{% elseif loggedInUser.getRoleId() != ROLE_ADMIN %}
\t\t\t\t<li class=\"page-scroll\">
\t\t\t\t\t<a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=logout\">Se déconnecter</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t\t{% if success is not empty %}
\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"alert-icon\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-thumb-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Well done!</strong> {{ success }}
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">
            <i class=\"zmdi zmdi-close\"></i>
        </span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if error is not empty %}
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"alert-icon\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-block\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Oh snap! </strong> {{ error }}
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">
                                <i class=\"zmdi zmdi-close\"></i>
                            </span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<img class=\"img-responsive\" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/img/profile.png\" alt=\"\">
\t\t\t\t<div class=\"intro-text\">
\t\t\t\t\t<span class=\"name\">{{ ownerUser.getFirstname() }} {{
\t\t\t\t\t\townerUser.getLastname() }}</span>
\t\t\t\t\t<hr class=\"star-light\">
\t\t\t\t\t<span class=\"skills\">Développeur web back-end PHP/SYMFONY</span>
\t\t\t\t\t{{ (error is defined) ? error|raw : \"\"}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


", "navbar.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\navbar.html.twig");
    }
}
