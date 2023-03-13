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

/* main/modals.html.twig */
class __TwigTemplate_2097edd38f65df12870a37e1d4756bfcc047845b5b02af1bbcc64aa84ae8f4f0 extends Template
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
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
\t<a class=\"btn btn-primary\" href=\"#page-top\">
\t\t<i class=\"fa fa-chevron-up\"></i>
\t</a>
</div>

<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t<div class=\"modal-content\">
\t\t<div class=\"close-modal\" data-dismiss=\"modal\">
\t\t\t<div class=\"lr\">
\t\t\t\t<div class=\"rl\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<h2>Project Title</h2>
\t\t\t\t\t\t<hr class=\"star-primary\">
\t\t\t\t\t\t<img src=\"public/assets/img/portfolio/cabin.png\" class=\"img-responsive img-centered\" alt=\"\">
\t\t\t\t\t\t<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only \$12!</p>
\t\t\t\t\t\t<ul class=\"list-inline item-details\">
\t\t\t\t\t\t\t<li>Client:
\t\t\t\t\t\t\t\t<strong><a href=\"public/index.php\">Start Bootstrap</a>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>Date:
\t\t\t\t\t\t\t\t<strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>Service:
\t\t\t\t\t\t\t\t<strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "main/modals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
\t<a class=\"btn btn-primary\" href=\"#page-top\">
\t\t<i class=\"fa fa-chevron-up\"></i>
\t</a>
</div>

<!-- Portfolio Modals -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t<div class=\"modal-content\">
\t\t<div class=\"close-modal\" data-dismiss=\"modal\">
\t\t\t<div class=\"lr\">
\t\t\t\t<div class=\"rl\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<h2>Project Title</h2>
\t\t\t\t\t\t<hr class=\"star-primary\">
\t\t\t\t\t\t<img src=\"public/assets/img/portfolio/cabin.png\" class=\"img-responsive img-centered\" alt=\"\">
\t\t\t\t\t\t<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href=\"https://sellfy.com/p/8Q9P/jV3VZ/\">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only \$12!</p>
\t\t\t\t\t\t<ul class=\"list-inline item-details\">
\t\t\t\t\t\t\t<li>Client:
\t\t\t\t\t\t\t\t<strong><a href=\"public/index.php\">Start Bootstrap</a>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>Date:
\t\t\t\t\t\t\t\t<strong><a href=\"http://startbootstrap.com\">April 2014</a>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>Service:
\t\t\t\t\t\t\t\t<strong><a href=\"http://startbootstrap.com\">Web Development</a>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "main/modals.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\modals.html.twig");
    }
}
