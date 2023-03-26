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

/* loginMain/login-base.html.twig */
class __TwigTemplate_92e410a9b188c162960d803db9d9b782d047cacdaaf93e9a2e0aa3abb5a2f7d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t<meta name=\"description\" content=\"Responsive Bootstrap 4 and web Application ui kit.\">

\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<!-- Favicon-->
\t<link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/favicon.ico\" type=\"image/x-icon\">
\t<!-- Custom Css -->
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/main.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/authentication.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/color_skins.css\">

</head>

<body class=\"theme-cyan authentication sidebar-collapse\">

";
        // line 24
        $this->loadTemplate("loginMain/login-navbar.html.twig", "loginMain/login-base.html.twig", 24)->display($context);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->loadTemplate("loginMain/login-body-scripts.html.twig", "loginMain/login-base.html.twig", 28)->display($context);
        // line 29
        echo "
</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page d'authentification";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "loginMain/login-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  100 => 10,  94 => 29,  92 => 28,  89 => 27,  87 => 26,  84 => 25,  82 => 24,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  56 => 13,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t<meta name=\"description\" content=\"Responsive Bootstrap 4 and web Application ui kit.\">

\t<title>{% block title %}Page d'authentification{% endblock %}</title>

\t<!-- Favicon-->
\t<link rel=\"icon\" href=\"{{ _SERVER['BASE_URI'] }}assets/favicon.ico\" type=\"image/x-icon\">
\t<!-- Custom Css -->
\t<link rel=\"stylesheet\" href=\"{{ _SERVER['BASE_URI'] }}assets/plugins/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"{{ _SERVER['BASE_URI'] }}assets/css/main.css\">
\t<link rel=\"stylesheet\" href=\"{{ _SERVER['BASE_URI'] }}assets/css/authentication.css\">
\t<link rel=\"stylesheet\" href=\"{{ _SERVER['BASE_URI'] }}assets/css/color_skins.css\">

</head>

<body class=\"theme-cyan authentication sidebar-collapse\">

{% include \"loginMain/login-navbar.html.twig\" %}

{% block body %}{% endblock %}

{% include \"loginMain/login-body-scripts.html.twig\" %}

</body>
</html>", "loginMain/login-base.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\login\\loginMain\\login-base.html.twig");
    }
}
