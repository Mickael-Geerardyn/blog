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

/* loginMain/login-body-scripts.html.twig */
class __TwigTemplate_9bccdda4cdb714d74788506b7cf718fe37d70e48063b01d2323357e0c4485404 extends Template
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
        echo "<!-- Jquery Core Js -->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/libscripts.bundle.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/vendorscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->

<!-- Jquery Core Js -->
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/libscripts.bundle.js\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/vendorscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->

<script>
    \$(\".navbar-toggler\").on('click',function() {
        \$(\"html\").toggleClass(\"nav-open\");
    });
    //=============================================================================
    \$('.form-control').on(\"focus\", function() {
        \$(this).parent('.input-group').addClass(\"input-group-focus\");
    }).on(\"blur\", function() {
        \$(this).parent(\".input-group\").removeClass(\"input-group-focus\");
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "loginMain/login-body-scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Jquery Core Js -->
<script src=\"{{ _SERVER['BASE_URI'] }}assets/bundles/libscripts.bundle.js\"></script>
<script src=\"{{ _SERVER['BASE_URI'] }}assets/bundles/vendorscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->

<!-- Jquery Core Js -->
<script src=\"{{ _SERVER['BASE_URI'] }}assets/bundles/libscripts.bundle.js\"></script>
<script src=\"{{ _SERVER['BASE_URI'] }}assets/bundles/vendorscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->

<script>
    \$(\".navbar-toggler\").on('click',function() {
        \$(\"html\").toggleClass(\"nav-open\");
    });
    //=============================================================================
    \$('.form-control').on(\"focus\", function() {
        \$(this).parent('.input-group').addClass(\"input-group-focus\");
    }).on(\"blur\", function() {
        \$(this).parent(\".input-group\").removeClass(\"input-group-focus\");
    });
</script>
", "loginMain/login-body-scripts.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\login\\loginMain\\login-body-scripts.html.twig");
    }
}
