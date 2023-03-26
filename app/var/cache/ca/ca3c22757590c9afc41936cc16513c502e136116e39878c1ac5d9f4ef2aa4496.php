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

/* /base.html.twig */
class __TwigTemplate_fa9c2cde0785c28ba33bab13c843ead59603235e1e675bb26ba45bc242845aa4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 10) . " ") . twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 10)), "html", null, true);
        echo "</title>

\t<!-- Bootstrap Core CSS -->

\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/bootstrap/css/bootstrap.min.css\"  rel=\"stylesheet\">


\t<!-- Theme CSS -->
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/css/freelancer.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Custom Fonts -->
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t<![endif]-->


</head>

<body id=\"page-top\" class=\"index\">

";
        // line 38
        $this->loadTemplate("navbar.html.twig", "/base.html.twig", 38)->display($context);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->loadTemplate("footer.html.twig", "/base.html.twig", 42)->display($context);
        // line 43
        echo "
";
        // line 44
        $this->loadTemplate("scripts.html.twig", "/base.html.twig", 44)->display($context);
        // line 45
        echo "
</body>
</html>




";
    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  106 => 45,  104 => 44,  101 => 43,  99 => 42,  96 => 41,  94 => 40,  91 => 39,  89 => 38,  70 => 22,  63 => 18,  56 => 14,  49 => 10,  38 => 1,);
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

\t<!-- Bootstrap Core CSS -->

\t<link href=\"{{ _SERVER[\"BASE_URI\"] }}assets/vendor/bootstrap/css/bootstrap.min.css\"  rel=\"stylesheet\">


\t<!-- Theme CSS -->
\t<link href=\"{{ _SERVER[\"BASE_URI\"] }}assets/css/freelancer.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Custom Fonts -->
\t<link href=\"{{ _SERVER[\"BASE_URI\"] }}assets/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t<![endif]-->


</head>

<body id=\"page-top\" class=\"index\">

{% include \"navbar.html.twig\" %}

{% block body %}{% endblock %}

{% include \"footer.html.twig\" %}

{% include \"scripts.html.twig\" %}

</body>
</html>




", "/base.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\base.html.twig");
    }
}
