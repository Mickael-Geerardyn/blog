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

/* adminMain/admin-base.html.twig */
class __TwigTemplate_3e40c41d4d3caa1cba49c2734291db6c4b81db7da0e324d0109520db677c279f extends Template
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

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t<meta name=\"description\" content=\"Responsive Bootstrap 4 and web Application ui kit.\">

\t\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "templates/admin/adminMain/favicon.ico\" type=\"image/x-icon\">
\t\t<!-- Favicon-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/dropzone/dropzone.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/bootstrap-select/css/bootstrap-select.css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/morrisjs/morris.css\" />
\t\t<!-- Custom Css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/main.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/blog.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/color_skins.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/authentication.css\">
\t</head>

<body class=\"theme-cyan\">

";
        // line 28
        $this->loadTemplate("adminMain/admin-navbar.html.twig", "adminMain/admin-base.html.twig", 28)->display($context);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->loadTemplate("adminMain/admin-body-scripts.html.twig", "adminMain/admin-base.html.twig", 32)->display($context);
        // line 33
        echo "
</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Portfolio Dashboard";
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "adminMain/admin-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  120 => 10,  113 => 33,  111 => 32,  108 => 31,  106 => 30,  103 => 29,  101 => 28,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  55 => 12,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t<meta name=\"description\" content=\"Responsive Bootstrap 4 and web Application ui kit.\">

\t\t<title>{% block title %}Portfolio Dashboard{% endblock %}</title>

\t\t<link rel=\"icon\" href=\"{{ _SERVER[\"BASE_URI\"] }}templates/admin/adminMain/favicon.ico\" type=\"image/x-icon\">
\t\t<!-- Favicon-->
\t\t<link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/dropzone/dropzone.css\">
        <link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/bootstrap-select/css/bootstrap-select.css\" />
\t\t<link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css\"/>
\t\t<link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/morrisjs/morris.css\" />
\t\t<!-- Custom Css -->
\t\t<link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/css/main.css\">
\t\t<link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/css/blog.css\">
\t\t<link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/css/color_skins.css\">
        <link rel=\"stylesheet\" href=\"{{ _SERVER[\"BASE_URI\"] }}assets/css/authentication.css\">
\t</head>

<body class=\"theme-cyan\">

{% include \"adminMain/admin-navbar.html.twig\" %}

{% block body %}{% endblock %}

{% include \"adminMain/admin-body-scripts.html.twig\" %}

</body>
</html>
", "adminMain/admin-base.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\admin-base.html.twig");
    }
}
