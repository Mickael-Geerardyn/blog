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

/* main/scripts.html.twig */
class __TwigTemplate_1e04f3fdec6b5a17efbb88db3b348d7e4e6ea8446c8337232d631b3ee940ba15 extends Template
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
<!-- jQuery -->
<script src=\"public/assets/vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"public/assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"public/assets/js/jqBootstrapValidation.js\"></script>
<script src=\"public/assets/js/contact_me.js\"></script>

<!-- Theme JavaScript -->
<script src=\"public/assets/js/freelancer.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "main/scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- jQuery -->
<script src=\"public/assets/vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"public/assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"public/assets/js/jqBootstrapValidation.js\"></script>
<script src=\"public/assets/js/contact_me.js\"></script>

<!-- Theme JavaScript -->
<script src=\"public/assets/js/freelancer.min.js\"></script>
", "main/scripts.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\scripts.html.twig");
    }
}
