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

/* /adminMain/landing-dashboard.html.twig */
class __TwigTemplate_3511f9f7395dae24a507764f97d511010b22dae800967eb4988b006fb9d3d80c extends Template
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
        $this->parent = $this->loadTemplate("adminMain/admin-base.html.twig", "/adminMain/landing-dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<section class=\"content blog-page\">
\t\t<div class=\"block-header\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-7 col-md-6 col-sm-12\">
\t\t\t\t\t<h2>Blog Dashboard
\t\t\t\t\t\t<small>Welcome to Compass</small>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-6 col-sm-12\">
\t\t\t\t\t<ul class=\"breadcrumb float-md-right\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "?action=landing-dashboard\"><i class=\"zmdi
\t\t\t\t\t\tzmdi-home\"></i> Compass</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Dashboard</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 22
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"alert-icon\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-block\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Oh snap!</strong> ";
            // line 28
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">
                                        <i class=\"zmdi zmdi-close\"></i>
                                    </span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 37
        echo "\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<ul class=\"row profile_state list-unstyled\">
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-eye col-amber\"></i>
\t\t\t\t\t\t\t\t\t<h4>2,365</h4>
\t\t\t\t\t\t\t\t\t<span>Post View</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-thumb-up col-blue\"></i>
\t\t\t\t\t\t\t\t\t<h4>365</h4>
\t\t\t\t\t\t\t\t\t<span>Likes</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-comment-text col-red\"></i>
\t\t\t\t\t\t\t\t\t<h4>65</h4>
\t\t\t\t\t\t\t\t\t<span>Comments</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-account text-success\"></i>
\t\t\t\t\t\t\t\t\t<h4>2,055</h4>
\t\t\t\t\t\t\t\t\t<span>Profile Views</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Popular</strong> Categories</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div class=\"p-15 xl-slategray\">
\t\t\t\t\t\t\t\t<a><span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-green m-r-5\"></i>Web
\t\t\t\t\t\t\t\t\tDesign</span></a>
\t\t\t\t\t\t\t\t<span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-red m-r-5\"></i>Photography</span>
\t\t\t\t\t\t\t\t<span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-amber m-r-5\"></i>Technology</span>
\t\t\t\t\t\t\t\t<span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-purple m-r-5\"></i>Lifestyle</span>
\t\t\t\t\t\t\t\t<span><i class=\"zmdi zmdi-label col-lime m-r-5\"></i>Sports</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"line_chart\" class=\"graph\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-7 col-md-12\">
\t\t\t\t\t<div class=\"card visitors-map\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Visitors</strong> Statistics</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div id=\"world-map-markers\" class=\"jvector-map\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Contrary</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>2016</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>2017</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Change</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>USA</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>3,591</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>7.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>India</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>1,129</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>1,361</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>3.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Canada</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2,901</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>9.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Australia</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>954</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>901</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>5.71% <i class=\"zmdi zmdi-trending-down text-warning\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Other</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>4,236</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>4,591</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>9.15% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>USA</strong> Categories Statistics</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div id=\"usa\" class=\"text-center\" style=\"height: 400px\"></div>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-hover m-b-0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Categories</th>
\t\t\t\t\t\t\t\t\t\t<th>2016</th>
\t\t\t\t\t\t\t\t\t\t<th>2017</th>
\t\t\t\t\t\t\t\t\t\t<th>Change</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Web Design</td>
\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t<td>3,591</td>
\t\t\t\t\t\t\t\t\t\t<td>7.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Photography</td>
\t\t\t\t\t\t\t\t\t\t<td>1,129</td>
\t\t\t\t\t\t\t\t\t\t<td>1,361</td>
\t\t\t\t\t\t\t\t\t\t<td>3.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Technology</td>
\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t<td>2,901</td>
\t\t\t\t\t\t\t\t\t\t<td>9.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Lifestyle</td>
\t\t\t\t\t\t\t\t\t\t<td>954</td>
\t\t\t\t\t\t\t\t\t\t<td>901</td>
\t\t\t\t\t\t\t\t\t\t<td>5.71% <i class=\"zmdi zmdi-trending-down text-warning\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Sports</td>
\t\t\t\t\t\t\t\t\t\t<td>4,236</td>
\t\t\t\t\t\t\t\t\t\t<td>4,591</td>
\t\t\t\t\t\t\t\t\t\t<td>9.15% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-3 col-md-12\">
\t\t\t\t\t<div class=\"card l-blue\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">2,048</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0\">Total Leads</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"40px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 7,6,7,8,5,9,8,6,7 </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card l-parpl\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">521</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0 \">Total Connections</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"42px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 6,5,7,4,5,3,8,6,5 </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card l-seagreen\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">73</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0 \">Articles</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"45px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 8,7,7,5,5,4,8,7,5 </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card l-pink\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">15</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0\">Categories</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"45px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 7,6,7,8,5,9,8,6,7 </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Browser</strong> Usage</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div id=\"donut_chart\" class=\"dashboard-donut-chart\"></div>
\t\t\t\t\t\t\t<table class=\"table m-b-0\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t<td>Chrome</td>
\t\t\t\t\t\t\t\t\t<td>6985</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-up text-success\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Other</td>
\t\t\t\t\t\t\t\t\t<td>2697</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-up text-success\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td>Safari</td>
\t\t\t\t\t\t\t\t\t<td>3597</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-down text-danger\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t<td>Firefox</td>
\t\t\t\t\t\t\t\t\t<td>2145</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-up text-success\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t<td>Opera</td>
\t\t\t\t\t\t\t\t\t<td>1854</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-down text-danger\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t<td>IE</td>
\t\t\t\t\t\t\t\t\t<td>54</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-down text-danger\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-12\">
\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Latest</strong> Comments</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<ul class=\"inbox-widget list-unstyled clearfix\">
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"><a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/sm/avatar1.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">John Doe</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">Lorem Ipsum is simply dummy text of the been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">12:34 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"";
        // line 388
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/sm/avatar2.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Maryam Amiri</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">Lorem Ipsum is simply dummyLorem Ipsum has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">10:34 AM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"";
        // line 404
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/sm/avatar3.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Fidel Tonn</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">text of the printing and  has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">15:34 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"";
        // line 419
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/sm/avatar4.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Gary Camara</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">simply dummy text of the printing and typesetting industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">11:10 AM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"><img src=\"";
        // line 434
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/sm/avatar5.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Tim Hank</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">text of the industry. Lorem Ipsum has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">18:45 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"";
        // line 450
        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/sm/avatar6.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Hossein Shams </p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">text of the printing and  has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">15:34 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Social</strong> Media</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div class=\"table-responsive social_media_table\">
\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Media</th>
\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Like</th>
\t\t\t\t\t\t\t\t\t\t<th>Comments</th>
\t\t\t\t\t\t\t\t\t\t<th>Share</th>
\t\t\t\t\t\t\t\t\t\t<th>Members</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon linkedin\"><i class=\"zmdi zmdi-linkedin\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Linked In</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Florida, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>19K</td>
\t\t\t\t\t\t\t\t\t\t<td>14K</td>
\t\t\t\t\t\t\t\t\t\t<td>10K</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">2341</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon twitter-table\"><i class=\"zmdi zmdi-twitter\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Twitter</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Arkansas, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>7K</td>
\t\t\t\t\t\t\t\t\t\t<td>11K</td>
\t\t\t\t\t\t\t\t\t\t<td>21K</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">952</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon facebook\"><i class=\"zmdi zmdi-facebook\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Facebook</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Illunois, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>15K</td>
\t\t\t\t\t\t\t\t\t\t<td>18K</td>
\t\t\t\t\t\t\t\t\t\t<td>8K</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">6127</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon google\"><i class=\"zmdi zmdi-google-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Google Plus</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Arizona, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>15K</td>
\t\t\t\t\t\t\t\t\t\t<td>18K</td>
\t\t\t\t\t\t\t\t\t\t<td>154</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">325</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon youtube\"><i class=\"zmdi zmdi-youtube-play\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">YouTube</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Alaska, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>15K</td>
\t\t\t\t\t\t\t\t\t\t<td>18K</td>
\t\t\t\t\t\t\t\t\t\t<td>200</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">160</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "/adminMain/landing-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 450,  505 => 434,  487 => 419,  469 => 404,  450 => 388,  431 => 372,  94 => 37,  82 => 28,  75 => 23,  73 => 22,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminMain/admin-base.html.twig' %}

{% block body %}
\t<section class=\"content blog-page\">
\t\t<div class=\"block-header\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-7 col-md-6 col-sm-12\">
\t\t\t\t\t<h2>Blog Dashboard
\t\t\t\t\t\t<small>Welcome to Compass</small>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-6 col-sm-12\">
\t\t\t\t\t<ul class=\"breadcrumb float-md-right\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{ _SERVER[\"BASE_URI\"] }}?action=landing-dashboard\"><i class=\"zmdi
\t\t\t\t\t\tzmdi-home\"></i> Compass</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"blog-dashboard.html\">Blog</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Dashboard</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if error is not empty  %}
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"alert-icon\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-block\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Oh snap!</strong> {{ error }}
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">
                                        <i class=\"zmdi zmdi-close\"></i>
                                    </span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<ul class=\"row profile_state list-unstyled\">
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-eye col-amber\"></i>
\t\t\t\t\t\t\t\t\t<h4>2,365</h4>
\t\t\t\t\t\t\t\t\t<span>Post View</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-thumb-up col-blue\"></i>
\t\t\t\t\t\t\t\t\t<h4>365</h4>
\t\t\t\t\t\t\t\t\t<span>Likes</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-comment-text col-red\"></i>
\t\t\t\t\t\t\t\t\t<h4>65</h4>
\t\t\t\t\t\t\t\t\t<span>Comments</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-account text-success\"></i>
\t\t\t\t\t\t\t\t\t<h4>2,055</h4>
\t\t\t\t\t\t\t\t\t<span>Profile Views</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Popular</strong> Categories</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div class=\"p-15 xl-slategray\">
\t\t\t\t\t\t\t\t<a><span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-green m-r-5\"></i>Web
\t\t\t\t\t\t\t\t\tDesign</span></a>
\t\t\t\t\t\t\t\t<span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-red m-r-5\"></i>Photography</span>
\t\t\t\t\t\t\t\t<span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-amber m-r-5\"></i>Technology</span>
\t\t\t\t\t\t\t\t<span class=\"m-r-20\"><i class=\"zmdi zmdi-label col-purple m-r-5\"></i>Lifestyle</span>
\t\t\t\t\t\t\t\t<span><i class=\"zmdi zmdi-label col-lime m-r-5\"></i>Sports</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"line_chart\" class=\"graph\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-7 col-md-12\">
\t\t\t\t\t<div class=\"card visitors-map\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Visitors</strong> Statistics</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div id=\"world-map-markers\" class=\"jvector-map\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Contrary</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>2016</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>2017</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Change</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>USA</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>3,591</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>7.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>India</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>1,129</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>1,361</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>3.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Canada</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>2,901</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>9.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Australia</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>954</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>901</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>5.71% <i class=\"zmdi zmdi-trending-down text-warning\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Other</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>4,236</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>4,591</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>9.15% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>USA</strong> Categories Statistics</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div id=\"usa\" class=\"text-center\" style=\"height: 400px\"></div>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-hover m-b-0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Categories</th>
\t\t\t\t\t\t\t\t\t\t<th>2016</th>
\t\t\t\t\t\t\t\t\t\t<th>2017</th>
\t\t\t\t\t\t\t\t\t\t<th>Change</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Web Design</td>
\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t<td>3,591</td>
\t\t\t\t\t\t\t\t\t\t<td>7.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Photography</td>
\t\t\t\t\t\t\t\t\t\t<td>1,129</td>
\t\t\t\t\t\t\t\t\t\t<td>1,361</td>
\t\t\t\t\t\t\t\t\t\t<td>3.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Technology</td>
\t\t\t\t\t\t\t\t\t\t<td>2,009</td>
\t\t\t\t\t\t\t\t\t\t<td>2,901</td>
\t\t\t\t\t\t\t\t\t\t<td>9.01% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Lifestyle</td>
\t\t\t\t\t\t\t\t\t\t<td>954</td>
\t\t\t\t\t\t\t\t\t\t<td>901</td>
\t\t\t\t\t\t\t\t\t\t<td>5.71% <i class=\"zmdi zmdi-trending-down text-warning\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>Sports</td>
\t\t\t\t\t\t\t\t\t\t<td>4,236</td>
\t\t\t\t\t\t\t\t\t\t<td>4,591</td>
\t\t\t\t\t\t\t\t\t\t<td>9.15% <i class=\"zmdi zmdi-trending-up text-success\"></i></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-3 col-md-12\">
\t\t\t\t\t<div class=\"card l-blue\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">2,048</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0\">Total Leads</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"40px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 7,6,7,8,5,9,8,6,7 </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card l-parpl\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">521</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0 \">Total Connections</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"42px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 6,5,7,4,5,3,8,6,5 </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card l-seagreen\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">73</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0 \">Articles</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"45px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 8,7,7,5,5,4,8,7,5 </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card l-pink\">
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<h4 class=\"m-t-0 m-b-0\">15</h4>
\t\t\t\t\t\t\t<p class=\"m-b-0\">Categories</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sparkline\" data-type=\"line\" data-spot-Radius=\"1\" data-highlight-Spot-Color=\"rgb(233, 30, 99)\" data-highlight-Line-Color=\"#222\"
\t\t\t\t\t\t\t data-min-Spot-Color=\"rgb(233, 30, 99)\" data-max-Spot-Color=\"rgb(0, 150, 136)\" data-spot-Color=\"rgb(0, 188, 212)\"
\t\t\t\t\t\t\t data-offset=\"90\" data-width=\"100%\" data-height=\"45px\" data-line-Width=\"2\" data-line-Color=\"rgba(255, 255, 255, 0.2)\"
\t\t\t\t\t\t\t data-fill-Color=\"rgba(255, 255, 255, 0.3)\"> 7,6,7,8,5,9,8,6,7 </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Browser</strong> Usage</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div id=\"donut_chart\" class=\"dashboard-donut-chart\"></div>
\t\t\t\t\t\t\t<table class=\"table m-b-0\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t<td>Chrome</td>
\t\t\t\t\t\t\t\t\t<td>6985</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-up text-success\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Other</td>
\t\t\t\t\t\t\t\t\t<td>2697</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-up text-success\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td>Safari</td>
\t\t\t\t\t\t\t\t\t<td>3597</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-down text-danger\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t<td>Firefox</td>
\t\t\t\t\t\t\t\t\t<td>2145</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-up text-success\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t<td>Opera</td>
\t\t\t\t\t\t\t\t\t<td>1854</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-down text-danger\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t<td>IE</td>
\t\t\t\t\t\t\t\t\t<td>54</td>
\t\t\t\t\t\t\t\t\t<td><i class=\"zmdi zmdi-caret-down text-danger\"></i></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-12\">
\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Latest</strong> Comments</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<ul class=\"inbox-widget list-unstyled clearfix\">
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"><a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/sm/avatar1.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">John Doe</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">Lorem Ipsum is simply dummy text of the been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">12:34 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/sm/avatar2.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Maryam Amiri</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">Lorem Ipsum is simply dummyLorem Ipsum has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">10:34 AM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/sm/avatar3.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Fidel Tonn</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">text of the printing and  has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">15:34 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/sm/avatar4.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Gary Camara</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">simply dummy text of the printing and typesetting industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">11:10 AM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"><img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/sm/avatar5.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Tim Hank</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">text of the industry. Lorem Ipsum has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">18:45 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"inbox-inner\"> <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-img\"> <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/sm/avatar6.jpg\" class=\"rounded\" alt=\"\"> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inbox-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"author\">Hossein Shams </p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-message\">text of the printing and  has been the industry's</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"inbox-date\">15:34 PM</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hover_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-favorite\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t<h2><strong>Social</strong> Media</h2>
\t\t\t\t\t\t\t<ul class=\"header-dropdown\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideUp float-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Edit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Delete</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Report</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"remove\">
\t\t\t\t\t\t\t\t\t<a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t<div class=\"table-responsive social_media_table\">
\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Media</th>
\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Like</th>
\t\t\t\t\t\t\t\t\t\t<th>Comments</th>
\t\t\t\t\t\t\t\t\t\t<th>Share</th>
\t\t\t\t\t\t\t\t\t\t<th>Members</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon linkedin\"><i class=\"zmdi zmdi-linkedin\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Linked In</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Florida, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>19K</td>
\t\t\t\t\t\t\t\t\t\t<td>14K</td>
\t\t\t\t\t\t\t\t\t\t<td>10K</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">2341</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon twitter-table\"><i class=\"zmdi zmdi-twitter\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Twitter</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Arkansas, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>7K</td>
\t\t\t\t\t\t\t\t\t\t<td>11K</td>
\t\t\t\t\t\t\t\t\t\t<td>21K</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">952</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon facebook\"><i class=\"zmdi zmdi-facebook\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Facebook</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Illunois, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>15K</td>
\t\t\t\t\t\t\t\t\t\t<td>18K</td>
\t\t\t\t\t\t\t\t\t\t<td>8K</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">6127</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon google\"><i class=\"zmdi zmdi-google-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">Google Plus</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Arizona, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>15K</td>
\t\t\t\t\t\t\t\t\t\t<td>18K</td>
\t\t\t\t\t\t\t\t\t\t<td>154</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">325</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"social_icon youtube\"><i class=\"zmdi zmdi-youtube-play\"></i></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span class=\"list-name\">YouTube</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Alaska, United States</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>15K</td>
\t\t\t\t\t\t\t\t\t\t<td>18K</td>
\t\t\t\t\t\t\t\t\t\t<td>200</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">160</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %}", "/adminMain/landing-dashboard.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\landing-dashboard.html.twig");
    }
}
