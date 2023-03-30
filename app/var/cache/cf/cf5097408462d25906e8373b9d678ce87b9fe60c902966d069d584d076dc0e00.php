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

/* /adminMain/blog-post.html.twig */
class __TwigTemplate_4e2633a34249be3fa8ae7b1cdd417fbebb0241d38558f68a3c1c0622f6524333 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "adminMain/admin-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("adminMain/admin-base.html.twig", "/adminMain/blog-post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <section class=\"content blog-page\">
        <div class=\"block-header\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-6 col-sm-12\">
                    <h2>Nouvel article
                    </h2>
                </div>
                <div class=\"col-lg-5 col-md-6 col-sm-12\">
                    <ul class=\"breadcrumb float-md-right\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "\"><i class=\"zmdi zmdi-home\"></i>Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "?action=landing-dashboard\">Blog</a></li>
                        <li class=\"breadcrumb-item active\">Nouvel article</li>
                    </ul>
                </div>
            </div>
        </div>
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=";
        echo ((twig_test_empty(($context["postObject"] ?? null))) ? ("send-new-post") : ("send-modified-post"));
        // line 22
        echo "\" method=\"post\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Titre de l'article\" name=\"title\"
                                       id=\"title\"required/>
                            </div>
                            <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Chapô\" name=\"heading\" id=\"heading\"
                                   maxlenght=\"150\" required/>
                        </div>
                            <select class=\"form-control show-tick\">
                                <option>Select Category --</option>
                                <option>Web Design</option>
                                <option>Photography</option>
                                <option>Technology</option>
                                <option>Lifestyle</option>
                                <option>Sports</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"body\">
                            ";
        // line 48
        if (twig_test_empty(($context["postObject"] ?? null))) {
            // line 49
            echo "                        <textarea id=\"ckeditor\" placeholder=\"Commentaire\" name=\"content\" required>
                            <h2>WYSIWYG Editor</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                            <h3>Lacinia</h3>
                            <ul>
                                <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                <li>Praesent non lacinia mi.</li>
                                <li>Mauris a ante neque.</li>
                                <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                            </ul>
                            <h3>Pellentesque adipiscing</h3>
                            <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                        </textarea>
                                <input type=\"hidden\" class=\"form-control\" name=\"CSRFToken\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "getEmail", [], "method", false, false, false, 64), "html", null, true);
            // line 65
            echo "\" >
                            <button type=\"button\" class=\"btn btn-primary btn-round waves-effect m-t-20\">Valider</button>
                            ";
        } elseif ( !twig_test_empty(        // line 67
($context["postObject"] ?? null))) {
            // line 68
            echo "                            <textarea id=\"ckeditor\" placeholder=\"Commentaire\" name=\"content\" required>
                            <h2>WYSIWYG Editor</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                            <h3>Lacinia</h3>
                            <ul>
                                <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                <li>Praesent non lacinia mi.</li>
                                <li>Mauris a ante neque.</li>
                                <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                            </ul>
                            <h3>Pellentesque adipiscing</h3>
                            <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                        </textarea>
                                <input type=\"hidden\" class=\"form-control\" name=\"CSRFToken\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loggedInUser"] ?? null), "getEmail", [], "method", false, false, false, 83), "html", null, true);
            // line 84
            echo "\" >
                            <button type=\"button\" class=\"btn btn-primary btn-round waves-effect m-t-20\">Valider</button>
                            ";
        }
        // line 87
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
            </form>
    </section>

";
    }

    public function getTemplateName()
    {
        return "/adminMain/blog-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 87,  159 => 84,  157 => 83,  153 => 82,  137 => 68,  135 => 67,  131 => 65,  129 => 64,  125 => 63,  109 => 49,  107 => 48,  79 => 22,  75 => 21,  66 => 15,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿{% extends 'adminMain/admin-base.html.twig' %}

{% block body %}

    <section class=\"content blog-page\">
        <div class=\"block-header\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-6 col-sm-12\">
                    <h2>Nouvel article
                    </h2>
                </div>
                <div class=\"col-lg-5 col-md-6 col-sm-12\">
                    <ul class=\"breadcrumb float-md-right\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ _SERVER[\"BASE_URI\"] }}\"><i class=\"zmdi zmdi-home\"></i>Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{ _SERVER[\"BASE_URI\"] }}?action=landing-dashboard\">Blog</a></li>
                        <li class=\"breadcrumb-item active\">Nouvel article</li>
                    </ul>
                </div>
            </div>
        </div>
        <form action=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action={{ (postObject is empty) ? \"send-new-post\" :
        \"send-modified-post\" }}\" method=\"post\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Titre de l'article\" name=\"title\"
                                       id=\"title\"required/>
                            </div>
                            <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Chapô\" name=\"heading\" id=\"heading\"
                                   maxlenght=\"150\" required/>
                        </div>
                            <select class=\"form-control show-tick\">
                                <option>Select Category --</option>
                                <option>Web Design</option>
                                <option>Photography</option>
                                <option>Technology</option>
                                <option>Lifestyle</option>
                                <option>Sports</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"body\">
                            {% if postObject is empty %}
                        <textarea id=\"ckeditor\" placeholder=\"Commentaire\" name=\"content\" required>
                            <h2>WYSIWYG Editor</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                            <h3>Lacinia</h3>
                            <ul>
                                <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                <li>Praesent non lacinia mi.</li>
                                <li>Mauris a ante neque.</li>
                                <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                            </ul>
                            <h3>Pellentesque adipiscing</h3>
                            <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                        </textarea>
                                <input type=\"hidden\" class=\"form-control\" name=\"CSRFToken\" value=\"{{CSRFToken}}\">
                                <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"{{ loggedInUser.getEmail()
                                }}\" >
                            <button type=\"button\" class=\"btn btn-primary btn-round waves-effect m-t-20\">Valider</button>
                            {% elseif postObject is not empty %}
                            <textarea id=\"ckeditor\" placeholder=\"Commentaire\" name=\"content\" required>
                            <h2>WYSIWYG Editor</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                            <h3>Lacinia</h3>
                            <ul>
                                <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                <li>Praesent non lacinia mi.</li>
                                <li>Mauris a ante neque.</li>
                                <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                            </ul>
                            <h3>Pellentesque adipiscing</h3>
                            <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                        </textarea>
                                <input type=\"hidden\" class=\"form-control\" name=\"CSRFToken\" value=\"{{CSRFToken}}\">
                                <input type=\"hidden\" name=\"userEmail\" id=\"userEmail\" value=\"{{ loggedInUser.getEmail()
                                }}\" >
                            <button type=\"button\" class=\"btn btn-primary btn-round waves-effect m-t-20\">Valider</button>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </form>
    </section>

{% endblock %}", "/adminMain/blog-post.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\blog-post.html.twig");
    }
}
