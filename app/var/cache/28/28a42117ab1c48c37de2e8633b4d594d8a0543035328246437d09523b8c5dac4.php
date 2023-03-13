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

/* base.html.twig */
class __TwigTemplate_a392be19d9eb62e108abb6f12b5e934bc6a6fb25526d0187a0abf81783977614 extends Template
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

\t!-- Bootstrap Core CSS -->
\t<link href=\"public/assets/vendor/bootstrap/css/bootstrap.min.css\"  rel=\"stylesheet\">


\t<!-- Theme CSS -->
\t<link href=\"public/assets/css/freelancer.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Custom Fonts -->
\t<link href=\"public/assets/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
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
        // line 37
        $this->loadTemplate("main/navbar.html.twig", "base.html.twig", 37)->display($context);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->loadTemplate("main/footer.html.twig", "base.html.twig", 41)->display($context);
        // line 42
        echo "
";
        // line 43
        $this->loadTemplate("main/modals.html.twig", "base.html.twig", 43)->display($context);
        // line 44
        echo "
";
        // line 45
        $this->loadTemplate("main/scripts.html.twig", "base.html.twig", 45)->display($context);
        // line 46
        echo "
</body>
</html>




";
    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  101 => 46,  99 => 45,  96 => 44,  94 => 43,  91 => 42,  89 => 41,  86 => 40,  84 => 39,  81 => 38,  79 => 37,  49 => 10,  38 => 1,);
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

\t!-- Bootstrap Core CSS -->
\t<link href=\"public/assets/vendor/bootstrap/css/bootstrap.min.css\"  rel=\"stylesheet\">


\t<!-- Theme CSS -->
\t<link href=\"public/assets/css/freelancer.min.css\"
\t\t  rel=\"stylesheet\">

\t<!-- Custom Fonts -->
\t<link href=\"public/assets/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
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

{% include \"main/navbar.html.twig\" %}

{% block body %}{% endblock %}

{% include \"main/footer.html.twig\" %}

{% include \"main/modals.html.twig\" %}

{% include \"main/scripts.html.twig\" %}

</body>
</html>




", "base.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\base.html.twig");
    }
}
