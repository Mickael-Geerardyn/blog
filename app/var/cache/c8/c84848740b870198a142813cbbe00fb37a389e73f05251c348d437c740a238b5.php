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

/* main/footer.html.twig */
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
\t\t\t\t\t<h3>Location</h3>
\t\t\t\t\t<p>3481 Melrose Place
\t\t\t\t\t\t<br>Beverly Hills, CA 90210</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>Around the Web</h3>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>About Freelancer</h3>
\t\t\t\t\t<p>Freelance is a free to use, open source Bootstrap
\t\t\t\t\t\ttheme created by <a href=\"public/index.php\">Start Bootstrap</a>.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-below\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\tCopyright &copy; Your Website 2016
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "main/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
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
\t\t\t\t\t<h3>Location</h3>
\t\t\t\t\t<p>3481 Melrose Place
\t\t\t\t\t\t<br>Beverly Hills, CA 90210</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>Around the Web</h3>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col col-md-4\">
\t\t\t\t\t<h3>About Freelancer</h3>
\t\t\t\t\t<p>Freelance is a free to use, open source Bootstrap
\t\t\t\t\t\ttheme created by <a href=\"public/index.php\">Start Bootstrap</a>.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-below\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\tCopyright &copy; Your Website 2016
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

", "main/footer.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\footer.html.twig");
    }
}
