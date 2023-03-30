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

/* loginMain/login-navbar.html.twig */
class __TwigTemplate_ff20a21145eb8caf2c31b3b2d3627becea81cd2195f46f4d95f43f09ad19a822 extends Template
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
        echo "<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg fixed-top navbar-transparent\">
\t<div class=\"container\">
\t\t<div class=\"navbar-translate n_logo\">
\t\t\t<button class=\"navbar-toggler\" type=\"button\">
\t\t\t\t<span class=\"navbar-toggler-bar bar1\"></span>
\t\t\t\t<span class=\"navbar-toggler-bar bar2\"></span>
\t\t\t\t<span class=\"navbar-toggler-bar bar3\"></span>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"navbar-collapse\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "\">Accueil</a>
\t\t\t\t</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-primary btn-round\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ((twig_test_empty(($context["referer"] ?? null))) ? (((($__internal_compile_1 =         // line 18
($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null) . "index
\t\t\t\t\t.php?action=sign-up-page")) : (((($__internal_compile_2 =         // line 19
($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null) . "index.php?action=login-page"))), "html", null, true);
        echo "\">";
        echo ((twig_test_empty(        // line 20
($context["referer"] ?? null))) ? ("S'ENREGISTRER") : ("SE CONNECTER"));
        echo "</a>
                </li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
<!-- End Navbar -->";
    }

    public function getTemplateName()
    {
        return "loginMain/login-navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  61 => 19,  59 => 18,  58 => 17,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg fixed-top navbar-transparent\">
\t<div class=\"container\">
\t\t<div class=\"navbar-translate n_logo\">
\t\t\t<button class=\"navbar-toggler\" type=\"button\">
\t\t\t\t<span class=\"navbar-toggler-bar bar1\"></span>
\t\t\t\t<span class=\"navbar-toggler-bar bar2\"></span>
\t\t\t\t<span class=\"navbar-toggler-bar bar3\"></span>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"navbar-collapse\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ _SERVER['BASE_URI'] }}\">Accueil</a>
\t\t\t\t</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-primary btn-round\" href=\"{{ (referer is empty)?
\t\t\t\t\t_SERVER[\"BASE_URI\"]~\"index
\t\t\t\t\t.php?action=sign-up-page\" : _SERVER['BASE_URI']~\"index.php?action=login-page\" }}\">{{
\t\t\t\t\t(referer is empty)? \"S'ENREGISTRER\" : \"SE CONNECTER\" }}</a>
                </li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
<!-- End Navbar -->", "loginMain/login-navbar.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\login\\loginMain\\login-navbar.html.twig");
    }
}
