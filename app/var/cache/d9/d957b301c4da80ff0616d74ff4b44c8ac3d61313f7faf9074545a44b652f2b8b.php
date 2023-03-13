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
class __TwigTemplate_a328cfd2782737ec70466483a4b25dfdeea8c695da2cddf2bfba305c790b3167 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footerScripts' => [$this, 'block_footerScripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footerScripts', $context, $blocks);
    }

    public function block_footerScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<!-- jQuery -->
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/jqBootstrapValidation.js\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/contact_me.js\"></script>

<!-- Theme JavaScript -->
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/js/freelancer.min.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "main/scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  68 => 14,  64 => 13,  55 => 7,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footerScripts %}

<!-- jQuery -->
<script src=\"{{ _SERVER['BASE_URI'] }}assets/vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ _SERVER['BASE_URI'] }}assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"{{ _SERVER['BASE_URI'] }}assets/js/jqBootstrapValidation.js\"></script>
<script src=\"{{ _SERVER['BASE_URI'] }}assets/js/contact_me.js\"></script>

<!-- Theme JavaScript -->
<script src=\"{{ _SERVER['BASE_URI'] }}assets/js/freelancer.min.js\"></script>

{% endblock %}", "main/scripts.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\main\\scripts.html.twig");
    }
}
