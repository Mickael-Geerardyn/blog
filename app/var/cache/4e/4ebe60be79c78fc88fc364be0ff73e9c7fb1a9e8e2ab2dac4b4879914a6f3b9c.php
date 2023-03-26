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

/* scripts.html.twig */
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
        echo "<!-- jQuery -->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/jqBootstrapValidation.js\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/contact_me.js\"></script>

<!-- Theme JavaScript -->
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/freelancer.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  59 => 12,  55 => 11,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- jQuery -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/jqBootstrapValidation.js\"></script>
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/contact_me.js\"></script>

<!-- Theme JavaScript -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/freelancer.min.js\"></script>
", "scripts.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\scripts.html.twig");
    }
}
