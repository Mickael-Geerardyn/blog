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

/* login-admin-base.html.twig */
class __TwigTemplate_40ee2936a395ca454874f3f6be970376f9ff6ed6c7b0d9977cdf8a1a4acfdb4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'headerScripts' => [$this, 'block_headerScripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>

\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<title>";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 11) . " ") . twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 11)), "html", null, true);
        echo "</title>

\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t!-- Bootstrap Core CSS -->
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/bootstrap/css/bootstrap
\t.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Theme CSS -->
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/freelancer.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Custom Fonts -->
\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/font-awesome/css/font
\t-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">


\t";
        // line 30
        $this->displayBlock('headerScripts', $context, $blocks);
        // line 31
        echo "\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t<![endif]-->


</head>

<body id=\"page-top\" class=\"index\">

";
        // line 43
        $this->loadTemplate("main/login-admin-navbar.html.twig", "login-admin-base.html.twig", 43)->display($context);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->loadTemplate("main/footer.html.twig", "login-admin-base.html.twig", 47)->display($context);
        // line 48
        echo "
";
        // line 49
        $this->loadTemplate("main/modals.html.twig", "login-admin-base.html.twig", 49)->display($context);
        // line 50
        echo "
";
        // line 51
        $this->loadTemplate("main/scripts.html.twig", "login-admin-base.html.twig", 51)->display($context);
        // line 52
        echo "
</body>
</html>




";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 30
    public function block_headerScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "login-admin-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  141 => 30,  135 => 13,  124 => 52,  122 => 51,  119 => 50,  117 => 49,  114 => 48,  112 => 47,  109 => 46,  107 => 45,  104 => 44,  102 => 43,  88 => 31,  86 => 30,  77 => 24,  70 => 20,  62 => 15,  59 => 14,  57 => 13,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>

\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<title>{{ ownerUser.getFirstname()~\" \"~ownerUser.getLastname() }}</title>

\t{% block stylesheets %}{% endblock %}
\t!-- Bootstrap Core CSS -->
\t<link href=\"{{ _SERVER[\"BASE_URI\"] }}assets/vendor/bootstrap/css/bootstrap
\t.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Theme CSS -->
\t<link href=\"{{ _SERVER[\"BASE_URI\"] }}assets/css/freelancer.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Custom Fonts -->
\t<link href=\"{{ _SERVER['BASE_URI'] }}assets/vendor/font-awesome/css/font
\t-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">


\t{% block headerScripts %}{% endblock %}
\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t<![endif]-->


</head>

<body id=\"page-top\" class=\"index\">

{% include \"main/login-admin-navbar.html.twig\" %}

{% block body %}{% endblock %}

{% include \"main/footer.html.twig\" %}

{% include \"main/modals.html.twig\" %}

{% include \"main/scripts.html.twig\" %}

</body>
</html>




", "login-admin-base.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\login-admin-base.html.twig");
    }
}
