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

/* footer.html.twig */
class __TwigTemplate_fb5ee7c35d82acda65c67193aeb69339f405c0e4cd18afe4c80a2bbeba596bb7 extends Template
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
        echo "
<!-- Footer -->
<footer class=\"text-center\">
\t<div class=\"footer-above\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>Adresse</h3>
\t\t\t\t\t<p>305 rue de la Montagne
\t\t\t\t\t\t<br>H3C 0R6, Montréal, QC</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>Me suivre sur les réseaux sociaux</h3>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getSocialTwitter", [], "method", false, false, false, 16), "html", null, true);
        echo "\" class=\"btn-social btn-outline\"><i class=\"fa
\t\t\t\t\t\t\tfa-fw
\t\t\t\t\t\t\tfa-twitter\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getSocialLinkedin", [], "method", false, false, false, 21), "html", null, true);
        echo "\" class=\"btn-social btn-outline\"><i class=\"fa
\t\t\t\t\t\t\tfa-fw fa-linkedin\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>En tant que Freelancer</h3>
\t\t\t\t\t<p>Freelance is a free to use, open source Bootstrap
\t\t\t\t\t\ttheme created by <a href=\"public/index.php\">";
        // line 32
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ownerUser"] ?? null), "getFirstname", [], "method", false, false, false, 32) . " ") . twig_get_attribute($this->env, $this->source,         // line 33
($context["ownerUser"] ?? null), "getLastname", [], "method", false, false, false, 33)), "html", null, true);
        echo "</a>.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-below\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\tCopyright &copy; 2023
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  76 => 32,  62 => 21,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Footer -->
<footer class=\"text-center\">
\t<div class=\"footer-above\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>Adresse</h3>
\t\t\t\t\t<p>305 rue de la Montagne
\t\t\t\t\t\t<br>H3C 0R6, Montréal, QC</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>Me suivre sur les réseaux sociaux</h3>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ ownerUser.getSocialTwitter() }}\" class=\"btn-social btn-outline\"><i class=\"fa
\t\t\t\t\t\t\tfa-fw
\t\t\t\t\t\t\tfa-twitter\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ ownerUser.getSocialLinkedin() }}\" class=\"btn-social btn-outline\"><i class=\"fa
\t\t\t\t\t\t\tfa-fw fa-linkedin\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>En tant que Freelancer</h3>
\t\t\t\t\t<p>Freelance is a free to use, open source Bootstrap
\t\t\t\t\t\ttheme created by <a href=\"public/index.php\">{{ ownerUser
\t\t\t\t\t\t\t\t.getFirstname()~\" \"~ownerUser.getLastname() }}</a>.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-below\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\tCopyright &copy; 2023
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

", "footer.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\footer.html.twig");
    }
}
