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

/* main/navbar.html.twig */
class __TwigTemplate_b25c71bb682317132ac08d6d0008b963d1cfe6909808e3d78133e8cb1fa6de7c extends Template
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
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 9) . " ") . twig_get_attribute($this->env, $this->source,         // line 10
($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 10)), "html", null, true);
        echo "</a>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t<a href=\"#page-top\"></a>
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
\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/img/profile.png\" alt=\"\">
\t\t\t\t<div class=\"intro-text\">
\t\t\t\t\t<span class=\"name\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 42), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 43
($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 43), "html", null, true);
        echo "</span>
\t\t\t\t\t<hr class=\"star-light\">
\t\t\t\t\t<span class=\"skills\">Développeur web back-end PHP/SYMFONY</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

";
    }

    public function getTemplateName()
    {
        return "main/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  86 => 42,  81 => 40,  48 => 10,  47 => 9,  37 => 1,);
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
\t\t\t<a class=\"navbar-brand\" href=\"#page-top\">{{ ownerUser
\t\t\t\t.getFirstname()~\" \"~ownerUser.getLastname() }}</a>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t<a href=\"#page-top\"></a>
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
\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<img class=\"img-responsive\" src=\"{{ _SERVER['BASE_URI'] }}assets/img/profile.png\" alt=\"\">
\t\t\t\t<div class=\"intro-text\">
\t\t\t\t\t<span class=\"name\">{{ ownerUser.getFirstname() }} {{
\t\t\t\t\t\townerUser.getLastname() }}</span>
\t\t\t\t\t<hr class=\"star-light\">
\t\t\t\t\t<span class=\"skills\">Développeur web back-end PHP/SYMFONY</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

", "main/navbar.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\navbar.html.twig");
    }
}