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

/* adminMain/admin-body-scripts.html.twig */
class __TwigTemplate_86f65cf84dfb7ad5d093223768cd4e274a685e392f637053944ec01ef34746b8 extends Template
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
        echo "﻿
<!-- Jquery Core Js --> 
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/libscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/vendorscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->

<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/jvectormap.bundle.js\"></script> <!-- JVectorMap Plugin Js -->
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js\"></script><!-- USA Map Js -->

<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/morrisscripts.bundle.js\"></script><!-- Morris Plugin Js -->
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/sparkline.bundle.js\"></script> <!-- Sparkline Plugin Js -->
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/knob.bundle.js\"></script> <!-- Jquery Knob Plugin Js -->

<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/mainscripts.bundle.js\"></script><!-- Custom Js -->
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/pages/blog/blog.js\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/pages/charts/jquery-knob.min.js\"></script>

<!-- blog-post scripts -->
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/dropzone/dropzone.js\"></script> <!-- Dropzone Plugin Js -->
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/ckeditor/ckeditor.js\"></script> <!-- Ckeditor -->
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/pages/forms/editors.js\"></script>

<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/jquery-validation/jquery.validate.js\"></script> <!-- Jquery Validation Plugin Css -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/plugins/jquery-steps/jquery.steps.js\"></script> <!-- JQuery Steps Plugin Js -->
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/pages/forms/form-validation.js\"></script>

<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (($__internal_compile_16 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/bundles/footable.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/pages/tables/footable.js\"></script><!-- Custom Js -->

";
    }

    public function getTemplateName()
    {
        return "adminMain/admin-body-scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  107 => 24,  103 => 23,  99 => 22,  94 => 20,  90 => 19,  86 => 18,  80 => 15,  76 => 14,  72 => 13,  67 => 11,  63 => 10,  59 => 9,  54 => 7,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿
<!-- Jquery Core Js --> 
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/libscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/vendorscripts.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->

<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/jvectormap.bundle.js\"></script> <!-- JVectorMap Plugin Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js\"></script><!-- USA Map Js -->

<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/morrisscripts.bundle.js\"></script><!-- Morris Plugin Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/sparkline.bundle.js\"></script> <!-- Sparkline Plugin Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/knob.bundle.js\"></script> <!-- Jquery Knob Plugin Js -->

<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/mainscripts.bundle.js\"></script><!-- Custom Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/pages/blog/blog.js\"></script>
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/pages/charts/jquery-knob.min.js\"></script>

<!-- blog-post scripts -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/dropzone/dropzone.js\"></script> <!-- Dropzone Plugin Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/ckeditor/ckeditor.js\"></script> <!-- Ckeditor -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/pages/forms/editors.js\"></script>

<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/jquery-validation/jquery.validate.js\"></script> <!-- Jquery Validation Plugin Css -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/plugins/jquery-steps/jquery.steps.js\"></script> <!-- JQuery Steps Plugin Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/pages/forms/form-validation.js\"></script>

<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/bundles/footable.bundle.js\"></script> <!-- Lib Scripts Plugin Js -->
<script src=\"{{ _SERVER[\"BASE_URI\"] }}assets/js/pages/tables/footable.js\"></script><!-- Custom Js -->

", "adminMain/admin-body-scripts.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\admin-body-scripts.html.twig");
    }
}
