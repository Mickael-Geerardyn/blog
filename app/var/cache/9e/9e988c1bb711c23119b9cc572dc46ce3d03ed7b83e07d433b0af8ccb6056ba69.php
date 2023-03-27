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

/* adminMain/admin-navbar.html.twig */
class __TwigTemplate_800bceef29e12afcefa5e05fb56a705b5802c0508a9f422e910b47666ae35989 extends Template
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
        echo "    <!-- Page Loader -->
    <div class=\"page-loader-wrapper\">
        <div class=\"loader\">
            <div class=\"m-t-30\"><img class=\"zmdi-hc-spin\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/logo.svg\" width=\"48\" height=\"48\" alt=\"Compass\"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class=\"overlay\"></div>

\t<!-- Top Bar -->
\t<nav class=\"navbar\">
\t\t<div class=\"col-12\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"javascript:void(0);\" class=\"bars\"></a>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=landing-dashboard\"><img src=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_2 =         // line 18
($context["_SERVER"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["BASE_URI"] ?? null) : null), "html", null, true);
        // line 19
        echo "assets/images/logo.svg\" width=\"30\" alt=\"Compass\"><span class=\"m-l-10\">Compass</span></a>
\t\t\t</div>
\t\t\t<ul class=\"nav navbar-nav navbar-left\">
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"ls-toggle-btn\" data-close=\"true\"><i class=\"zmdi zmdi-swap\"></i></a></li>
\t\t\t\t<li class=\"hidden-sm-down\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
                        <i class=\"zmdi zmdi-search\"></i>
                    </span>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"><i class=\"zmdi zmdi-notifications\"></i>
\t\t\t\t\t\t<div class=\"notify\"><span class=\"heartbit\"></span><span class=\"point\"></span></div>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideDown\">
\t\t\t\t\t\t<li class=\"header\">NOTIFICATIONS</li>
\t\t\t\t\t\t<li class=\"body\">
\t\t\t\t\t\t\t<ul class=\"menu list-unstyled\">
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-blue\"><i class=\"zmdi zmdi-account\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4>8 New Members joined</h4>
\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"zmdi zmdi-time\"></i> 14 mins ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-amber\"><i class=\"zmdi zmdi-shopping-cart\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4>4 Sales made</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 22 mins ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-red\"><i class=\"zmdi zmdi-delete\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>Nancy Doe</b> Deleted account</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 3 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-green\"><i class=\"zmdi zmdi-edit\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>Nancy</b> Changed name</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 2 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-grey\"><i class=\"zmdi zmdi-comment-text\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>John</b> Commented your post</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 4 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-purple\"><i class=\"zmdi zmdi-refresh\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>John</b> Updated status</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 3 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-light-blue\"><i class=\"zmdi zmdi-settings\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Settings Updated</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> Yesterday </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"footer\"> <a href=\"javascript:void(0);\">View All Notifications</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"><i class=\"zmdi zmdi-flag\"></i>
\t\t\t\t\t\t<div class=\"notify\"><span class=\"heartbit\"></span><span class=\"point\"></span></div>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideDown\">
\t\t\t\t\t\t<li class=\"header\">TASKS</li>
\t\t\t\t\t\t<li class=\"body\">
\t\t\t\t\t\t\t<ul class=\"menu tasks list-unstyled\">
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-primary\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Footer display issue</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"86\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 86%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">86%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Answer GitHub questions</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"35\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 35%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">35%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-success\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Solve transition issue</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 72%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">72%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\"> Create new dashboard</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">45%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-warning\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Panding Project</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"29\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 29%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">29%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"footer\"><a href=\"javascript:void(0);\">View All</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fullscreen hidden-sm-down\" data-provide=\"fullscreen\" data-close=\"true\"><i class=\"zmdi zmdi-fullscreen\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 165
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=logout\" class=\"mega-menu\" data-close=\"true\"><i class=\"zmdi zmdi-power\"></i></a></li>
\t\t\t\t<li class=\"\"><a href=\"javascript:void(0);\" class=\"js-right-sidebar\" data-close=\"true\"><i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t</nav>

\t<!-- Left Sidebar -->
\t<aside id=\"leftsidebar\" class=\"sidebar\">
\t\t<!-- Menu -->
\t\t<div class=\"menu\">
\t\t\t<ul class=\"list\">
\t\t\t\t<li>
\t\t\t\t\t<div class=\"user-info\">
\t\t\t\t\t\t<div class=\"image\"><a href=\"profile.html\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, (($__internal_compile_4 =         // line 179
($context["_SERVER"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/static/img/photo.jpg\" alt=\"User\"></a></div>
\t\t\t\t\t\t<div class=\"detail\">
\t\t\t\t\t\t\t<h4>";
        // line 181
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getFirstname", [], "method", false, false, false, 181) . " ") . twig_get_attribute($this->env, $this->source, ($context["userObject"] ?? null), "getLastname", [], "method", false, false, false, 181)), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<small>Développeur PHP / SYMFONY</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"events.html\" title=\"Events\"><i class=\"zmdi zmdi-calendar\"></i></a>
\t\t\t\t\t\t<a href=\"mail-inbox.html\" title=\"Inbox\"><i class=\"zmdi zmdi-email\"></i></a>
\t\t\t\t\t\t<a href=\"";
        // line 186
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=users-page\" title=\"Contact List\"><i class=\"zmdi zmdi-account-box-phone\"></i></a>
\t\t\t\t\t\t<a href=\"chat.html\" title=\"Chat App\"><i class=\"zmdi zmdi-comments\"></i></a>
\t\t\t\t\t\t<a href=\"sign-in.html\" title=\"Sign out\"><i class=\"zmdi zmdi-power\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"header\">Menu</li>
\t\t\t\t<li class=\"active open\"><a href=\"";
        // line 192
        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=landing-dashboard\"><i class=\"zmdi zmdi-blogger\"></i><span>Blog Dashboard</span> </a> </li>
\t\t\t\t<li> <a href=\"";
        // line 193
        echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=new-post-page\"><i class=\"zmdi zmdi-plus-circle\"></i><span>Nouvel article</span> </a> </li>
\t\t\t\t<li><a href=\"";
        // line 194
        echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=blog-list\"><i class=\"zmdi zmdi-sort-amount-desc\"></i><span>Liste des articles</span> </a> </li>
\t\t\t\t<li><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=comments-list\"><i class=\"zmdi
\t\t\t\tzmdi-grid\"></i><span>Liste des commentaires non
\t\t\t\t\t\t\tvalidés</span> </a> </li>
                <li><a href=\"";
        // line 198
        echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php?action=display-add-form-user\"><i class=\"zmdi zmdi-home\"></i><span>Ajouter un utilisateur</span></a></li>
\t\t\t\t<li><a href=\"";
        // line 199
        echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["BASE_URI"] ?? null) : null), "html", null, true);
        echo "index.php\"><i class=\"zmdi
\t\t\t\tzmdi-home\"></i><span>Site web</span></a></li>
\t\t\t\t<li class=\"header\">CATEGORIES</li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block\"><i class=\"zmdi zmdi-label col-green\"></i><span>Web Design</span></a></li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"menu-toggle\"><i class=\"zmdi zmdi-label col-red\"></i><span>Photography</span> </a>
\t\t\t\t\t<ul class=\"ml-menu\">
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Wild</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Marriage</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"menu-toggle\"><i class=\"zmdi zmdi-label col-amber\"></i><span>Technology</span> </a>
\t\t\t\t\t<ul class=\"ml-menu\">
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">UI UX Design</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Android</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">iOS</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Wordpress</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block\"><i class=\"zmdi zmdi-label col-purple\"></i><span>Lifestyle</span></a></li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block\"><i class=\"zmdi zmdi-label col-lime\"></i><span>Sports</span></a></li>
\t\t\t</ul>
\t\t</div>
\t\t<!-- #Menu -->
\t</aside>

\t<!-- Right Sidebar -->
\t<aside id=\"rightsidebar\" class=\"right-sidebar\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"nav-item\"><a class=\"nav-link active\" data-toggle=\"tab\" href=\"#setting\"><i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i></a></li>
\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#chat\"><i class=\"zmdi zmdi-comments\"></i></a></li>
\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#activity\">Activity</a></li>
\t\t</ul>
\t\t<div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active slideRight\" id=\"setting\">
\t\t\t\t<div class=\"slim_scroll\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Skins</h6>
\t\t\t\t\t\t<ul class=\"choose-skin list-unstyled\">
\t\t\t\t\t\t\t<li data-theme=\"purple\">
\t\t\t\t\t\t\t\t<div class=\"purple\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"blue\">
\t\t\t\t\t\t\t\t<div class=\"blue\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"cyan\">
\t\t\t\t\t\t\t\t<div class=\"cyan\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"green\">
\t\t\t\t\t\t\t\t<div class=\"green\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"orange\">
\t\t\t\t\t\t\t\t<div class=\"orange\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"blush\" class=\"active\">
\t\t\t\t\t\t\t\t<div class=\"blush\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Left Menu</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled theme-light-dark\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"t-light btn btn-default btn-simple btn-round\">Light</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"t-dark btn btn-default btn-round\">Dark</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>General Settings</h6>
\t\t\t\t\t\t<ul class=\"setting-list list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox1\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox1\">Report Panel Usage</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox2\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox2\">Email Redirect</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox3\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox3\">Notifications</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox4\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox4\">Auto Updates</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Account Settings</h6>
\t\t\t\t\t\t<ul class=\"setting-list list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox5\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox5\">Offline</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox6\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox6\">Location Permission</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane right_chat pullUp\" id=\"chat\">
\t\t\t\t<div class=\"slim_scroll\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Recent</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li class=\"online\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 334
        echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Sophia</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">There are many variations of passages of Lorem Ipsum available</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 346
        echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Grayson</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">All the Lorem Ipsum generators on the</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 358
        echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Isabella</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Contrary to popular belief, Lorem Ipsum</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"me\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 370
        echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">John</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">It is a long established fact that a reader</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 382
        echo twig_escape_filter($this->env, (($__internal_compile_16 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Alexander</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Richard McClintock, a Latin professor</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Contacts</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 399
        echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar10.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 409
        echo twig_escape_filter($this->env, (($__internal_compile_18 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 419
        echo twig_escape_filter($this->env, (($__internal_compile_19 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 429
        echo twig_escape_filter($this->env, (($__internal_compile_20 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 439
        echo twig_escape_filter($this->env, (($__internal_compile_21 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar9.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 449
        echo twig_escape_filter($this->env, (($__internal_compile_22 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 459
        echo twig_escape_filter($this->env, (($__internal_compile_23 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 469
        echo twig_escape_filter($this->env, (($__internal_compile_24 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 479
        echo twig_escape_filter($this->env, (($__internal_compile_25 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"";
        // line 489
        echo twig_escape_filter($this->env, (($__internal_compile_26 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane slideRight\" id=\"activity\">
\t\t\t\t<div class=\"slim_scroll\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Recent Activity</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled activity\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-cake bg-blue\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>Admin Birthday</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be Dec 21th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-file-text bg-red\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>Code Change</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be Dec 22th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-account-box-phone bg-green\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>Add New Contact</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be Dec 23th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-email bg-amber\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>New Email</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be July 28th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Project Status</h6>
\t\t\t\t\t\t<div class=\"progress-container progress-primary\">
\t\t\t\t\t\t\t<span class=\"progress-badge\">eCommerce Website</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"86\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 86%;\">
\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">86%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info\">
\t\t\t\t\t\t\t\t<li class=\"m-r-15\"><small>Team</small></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 555
        echo twig_escape_filter($this->env, (($__internal_compile_27 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar2.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 558
        echo twig_escape_filter($this->env, (($__internal_compile_28 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar3.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 561
        echo twig_escape_filter($this->env, (($__internal_compile_29 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar4.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress-container\">
\t\t\t\t\t\t\t<span class=\"progress-badge\">iOS Game Dev</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">45%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info\">
\t\t\t\t\t\t\t\t<li class=\"m-r-15\"><small>Team</small></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 575
        echo twig_escape_filter($this->env, (($__internal_compile_30 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar10.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 578
        echo twig_escape_filter($this->env, (($__internal_compile_31 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar9.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 581
        echo twig_escape_filter($this->env, (($__internal_compile_32 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar8.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 584
        echo twig_escape_filter($this->env, (($__internal_compile_33 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar7.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 587
        echo twig_escape_filter($this->env, (($__internal_compile_34 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar6.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress-container progress-warning\">
\t\t\t\t\t\t\t<span class=\"progress-badge\">Home Development</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"29\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 29%;\">
\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">29%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info\">
\t\t\t\t\t\t\t\t<li class=\"m-r-15\"><small>Team</small></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 601
        echo twig_escape_filter($this->env, (($__internal_compile_35 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar5.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 604
        echo twig_escape_filter($this->env, (($__internal_compile_36 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar2.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 607
        echo twig_escape_filter($this->env, (($__internal_compile_37 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar7.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>

\t<!-- Chat-launcher -->
\t<div class=\"chat-launcher\"></div>
\t<div class=\"chat-wrapper\">
\t\t<div class=\"card\">
\t\t\t<div class=\"header\">
\t\t\t\t<ul class=\"list-unstyled team-info margin-0\">
\t\t\t\t\t<li class=\"m-r-15\"><h2>Design Team</h2></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 625
        echo twig_escape_filter($this->env, (($__internal_compile_38 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar2.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 628
        echo twig_escape_filter($this->env, (($__internal_compile_39 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar3.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 631
        echo twig_escape_filter($this->env, (($__internal_compile_40 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar4.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 634
        echo twig_escape_filter($this->env, (($__internal_compile_41 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar6.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Add Member\"><i class=\"zmdi zmdi-plus-circle\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"body\">
\t\t\t\t<div class=\"chat-widget\">
\t\t\t\t\t<ul class=\"chat-scroll-list clearfix\">
\t\t\t\t\t\t<li class=\"left float-left\">
\t\t\t\t\t\t\t<img src=\"";
        // line 645
        echo twig_escape_filter($this->env, (($__internal_compile_42 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar3.jpg\" class=\"rounded-circle\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"chat-info\">
\t\t\t\t\t\t\t\t<a class=\"name\" href=\"#\">Alexander</a>
\t\t\t\t\t\t\t\t<span class=\"datetime\">6:12</span>
\t\t\t\t\t\t\t\t<span class=\"message\">Hello, John </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t\t<div class=\"chat-info\"><span class=\"datetime\">6:15</span> <span class=\"message\">Hi, Alexander<br> How are you!</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t\t<div class=\"chat-info\"><span class=\"datetime\">6:16</span> <span class=\"message\">There are many variations of passages of Lorem Ipsum available</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"left float-left\"> <img src=\"";
        // line 658
        echo twig_escape_filter($this->env, (($__internal_compile_43 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar2.jpg\" class=\"rounded-circle\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"chat-info\"> <a class=\"name\" href=\"#\">Elizabeth</a> <span class=\"datetime\">6:25</span> <span class=\"message\">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"left float-left\"> <img src=\"";
        // line 661
        echo twig_escape_filter($this->env, (($__internal_compile_44 = ($context["_SERVER"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["BASE_URI"] ?? null) : null), "html", null, true);
        echo "assets/images/xs/avatar1.jpg\" class=\"rounded-circle\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"chat-info\"> <a class=\"name\" href=\"#\">Michael</a> <span class=\"datetime\">6:28</span> <span class=\"message\">I would love to join the team.</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t\t<div class=\"chat-info\"><span class=\"datetime\">7:02</span> <span class=\"message\">Hello, <br>Michael</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group p-t-15\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter text here...\">
\t\t\t\t\t<span class=\"input-group-addon\">
                    <i class=\"zmdi zmdi-mail-send\"></i>
                </span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "adminMain/admin-navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 661,  827 => 658,  811 => 645,  797 => 634,  791 => 631,  785 => 628,  779 => 625,  758 => 607,  752 => 604,  746 => 601,  729 => 587,  723 => 584,  717 => 581,  711 => 578,  705 => 575,  688 => 561,  682 => 558,  676 => 555,  607 => 489,  594 => 479,  581 => 469,  568 => 459,  555 => 449,  542 => 439,  529 => 429,  516 => 419,  503 => 409,  490 => 399,  470 => 382,  455 => 370,  440 => 358,  425 => 346,  410 => 334,  272 => 199,  268 => 198,  262 => 195,  258 => 194,  254 => 193,  250 => 192,  241 => 186,  233 => 181,  228 => 179,  227 => 178,  211 => 165,  63 => 19,  61 => 18,  58 => 17,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- Page Loader -->
    <div class=\"page-loader-wrapper\">
        <div class=\"loader\">
            <div class=\"m-t-30\"><img class=\"zmdi-hc-spin\" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/logo.svg\" width=\"48\" height=\"48\" alt=\"Compass\"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class=\"overlay\"></div>

\t<!-- Top Bar -->
\t<nav class=\"navbar\">
\t\t<div class=\"col-12\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"javascript:void(0);\" class=\"bars\"></a>
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=landing-dashboard\"><img src=\"{{
\t\t\t\t\t_SERVER[\"BASE_URI\"]
\t\t\t\t\t}}assets/images/logo.svg\" width=\"30\" alt=\"Compass\"><span class=\"m-l-10\">Compass</span></a>
\t\t\t</div>
\t\t\t<ul class=\"nav navbar-nav navbar-left\">
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"ls-toggle-btn\" data-close=\"true\"><i class=\"zmdi zmdi-swap\"></i></a></li>
\t\t\t\t<li class=\"hidden-sm-down\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t\t\t<span class=\"input-group-addon\">
                        <i class=\"zmdi zmdi-search\"></i>
                    </span>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"><i class=\"zmdi zmdi-notifications\"></i>
\t\t\t\t\t\t<div class=\"notify\"><span class=\"heartbit\"></span><span class=\"point\"></span></div>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideDown\">
\t\t\t\t\t\t<li class=\"header\">NOTIFICATIONS</li>
\t\t\t\t\t\t<li class=\"body\">
\t\t\t\t\t\t\t<ul class=\"menu list-unstyled\">
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-blue\"><i class=\"zmdi zmdi-account\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4>8 New Members joined</h4>
\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"zmdi zmdi-time\"></i> 14 mins ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-amber\"><i class=\"zmdi zmdi-shopping-cart\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4>4 Sales made</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 22 mins ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-red\"><i class=\"zmdi zmdi-delete\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>Nancy Doe</b> Deleted account</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 3 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-green\"><i class=\"zmdi zmdi-edit\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>Nancy</b> Changed name</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 2 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-grey\"><i class=\"zmdi zmdi-comment-text\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>John</b> Commented your post</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 4 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-purple\"><i class=\"zmdi zmdi-refresh\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4><b>John</b> Updated status</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> 3 hours ago </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-light-blue\"><i class=\"zmdi zmdi-settings\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Settings Updated</h4>
\t\t\t\t\t\t\t\t\t\t\t<p> <i class=\"zmdi zmdi-time\"></i> Yesterday </p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"footer\"> <a href=\"javascript:void(0);\">View All Notifications</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"><i class=\"zmdi zmdi-flag\"></i>
\t\t\t\t\t\t<div class=\"notify\"><span class=\"heartbit\"></span><span class=\"point\"></span></div>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right slideDown\">
\t\t\t\t\t\t<li class=\"header\">TASKS</li>
\t\t\t\t\t\t<li class=\"body\">
\t\t\t\t\t\t\t<ul class=\"menu tasks list-unstyled\">
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-primary\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Footer display issue</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"86\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 86%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">86%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Answer GitHub questions</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"35\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 35%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">35%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-success\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Solve transition issue</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 72%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">72%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\"> Create new dashboard</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">45%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li> <a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-container progress-warning\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-badge\">Panding Project</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"29\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 29%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">29%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"footer\"><a href=\"javascript:void(0);\">View All</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"fullscreen hidden-sm-down\" data-provide=\"fullscreen\" data-close=\"true\"><i class=\"zmdi zmdi-fullscreen\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=logout\" class=\"mega-menu\" data-close=\"true\"><i class=\"zmdi zmdi-power\"></i></a></li>
\t\t\t\t<li class=\"\"><a href=\"javascript:void(0);\" class=\"js-right-sidebar\" data-close=\"true\"><i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t</nav>

\t<!-- Left Sidebar -->
\t<aside id=\"leftsidebar\" class=\"sidebar\">
\t\t<!-- Menu -->
\t\t<div class=\"menu\">
\t\t\t<ul class=\"list\">
\t\t\t\t<li>
\t\t\t\t\t<div class=\"user-info\">
\t\t\t\t\t\t<div class=\"image\"><a href=\"profile.html\"><img src=\"{{
\t\t\t\t\t\t\t\t_SERVER[\"BASE_URI\"] }}assets/static/img/photo.jpg\" alt=\"User\"></a></div>
\t\t\t\t\t\t<div class=\"detail\">
\t\t\t\t\t\t\t<h4>{{ userObject.getFirstname()~\" \"~userObject.getLastname() }}</h4>
\t\t\t\t\t\t\t<small>Développeur PHP / SYMFONY</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"events.html\" title=\"Events\"><i class=\"zmdi zmdi-calendar\"></i></a>
\t\t\t\t\t\t<a href=\"mail-inbox.html\" title=\"Inbox\"><i class=\"zmdi zmdi-email\"></i></a>
\t\t\t\t\t\t<a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=users-page\" title=\"Contact List\"><i class=\"zmdi zmdi-account-box-phone\"></i></a>
\t\t\t\t\t\t<a href=\"chat.html\" title=\"Chat App\"><i class=\"zmdi zmdi-comments\"></i></a>
\t\t\t\t\t\t<a href=\"sign-in.html\" title=\"Sign out\"><i class=\"zmdi zmdi-power\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"header\">Menu</li>
\t\t\t\t<li class=\"active open\"><a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=landing-dashboard\"><i class=\"zmdi zmdi-blogger\"></i><span>Blog Dashboard</span> </a> </li>
\t\t\t\t<li> <a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=new-post-page\"><i class=\"zmdi zmdi-plus-circle\"></i><span>Nouvel article</span> </a> </li>
\t\t\t\t<li><a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=blog-list\"><i class=\"zmdi zmdi-sort-amount-desc\"></i><span>Liste des articles</span> </a> </li>
\t\t\t\t<li><a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=comments-list\"><i class=\"zmdi
\t\t\t\tzmdi-grid\"></i><span>Liste des commentaires non
\t\t\t\t\t\t\tvalidés</span> </a> </li>
                <li><a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php?action=display-add-form-user\"><i class=\"zmdi zmdi-home\"></i><span>Ajouter un utilisateur</span></a></li>
\t\t\t\t<li><a href=\"{{ _SERVER[\"BASE_URI\"] }}index.php\"><i class=\"zmdi
\t\t\t\tzmdi-home\"></i><span>Site web</span></a></li>
\t\t\t\t<li class=\"header\">CATEGORIES</li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block\"><i class=\"zmdi zmdi-label col-green\"></i><span>Web Design</span></a></li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"menu-toggle\"><i class=\"zmdi zmdi-label col-red\"></i><span>Photography</span> </a>
\t\t\t\t\t<ul class=\"ml-menu\">
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Wild</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Marriage</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"menu-toggle\"><i class=\"zmdi zmdi-label col-amber\"></i><span>Technology</span> </a>
\t\t\t\t\t<ul class=\"ml-menu\">
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">UI UX Design</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Android</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">iOS</a> </li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Wordpress</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block\"><i class=\"zmdi zmdi-label col-purple\"></i><span>Lifestyle</span></a></li>
\t\t\t\t<li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block\"><i class=\"zmdi zmdi-label col-lime\"></i><span>Sports</span></a></li>
\t\t\t</ul>
\t\t</div>
\t\t<!-- #Menu -->
\t</aside>

\t<!-- Right Sidebar -->
\t<aside id=\"rightsidebar\" class=\"right-sidebar\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"nav-item\"><a class=\"nav-link active\" data-toggle=\"tab\" href=\"#setting\"><i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i></a></li>
\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#chat\"><i class=\"zmdi zmdi-comments\"></i></a></li>
\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#activity\">Activity</a></li>
\t\t</ul>
\t\t<div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active slideRight\" id=\"setting\">
\t\t\t\t<div class=\"slim_scroll\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Skins</h6>
\t\t\t\t\t\t<ul class=\"choose-skin list-unstyled\">
\t\t\t\t\t\t\t<li data-theme=\"purple\">
\t\t\t\t\t\t\t\t<div class=\"purple\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"blue\">
\t\t\t\t\t\t\t\t<div class=\"blue\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"cyan\">
\t\t\t\t\t\t\t\t<div class=\"cyan\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"green\">
\t\t\t\t\t\t\t\t<div class=\"green\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"orange\">
\t\t\t\t\t\t\t\t<div class=\"orange\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-theme=\"blush\" class=\"active\">
\t\t\t\t\t\t\t\t<div class=\"blush\"></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Left Menu</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled theme-light-dark\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"t-light btn btn-default btn-simple btn-round\">Light</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"t-dark btn btn-default btn-round\">Dark</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>General Settings</h6>
\t\t\t\t\t\t<ul class=\"setting-list list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox1\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox1\">Report Panel Usage</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox2\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox2\">Email Redirect</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox3\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox3\">Notifications</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox4\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox4\">Auto Updates</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Account Settings</h6>
\t\t\t\t\t\t<ul class=\"setting-list list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox5\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox5\">Offline</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input id=\"checkbox6\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox6\">Location Permission</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane right_chat pullUp\" id=\"chat\">
\t\t\t\t<div class=\"slim_scroll\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Recent</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li class=\"online\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Sophia</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">There are many variations of passages of Lorem Ipsum available</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Grayson</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">All the Lorem Ipsum generators on the</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Isabella</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Contrary to popular belief, Lorem Ipsum</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"me\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">John</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">It is a long established fact that a reader</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Alexander</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Richard McClintock, a Latin professor</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Contacts</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar10.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar9.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"online inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"offline inlineblock\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object \" src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-outline status\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane slideRight\" id=\"activity\">
\t\t\t\t<div class=\"slim_scroll\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Recent Activity</h6>
\t\t\t\t\t\t<ul class=\"list-unstyled activity\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-cake bg-blue\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>Admin Birthday</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be Dec 21th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-file-text bg-red\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>Code Change</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be Dec 22th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-account-box-phone bg-green\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>Add New Contact</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be Dec 23th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-email bg-amber\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<h4>New Email</h4>
\t\t\t\t\t\t\t\t\t\t<small>Will be July 28th</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<h6>Project Status</h6>
\t\t\t\t\t\t<div class=\"progress-container progress-primary\">
\t\t\t\t\t\t\t<span class=\"progress-badge\">eCommerce Website</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"86\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 86%;\">
\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">86%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info\">
\t\t\t\t\t\t\t\t<li class=\"m-r-15\"><small>Team</small></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar2.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar3.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar4.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress-container\">
\t\t\t\t\t\t\t<span class=\"progress-badge\">iOS Game Dev</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">45%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info\">
\t\t\t\t\t\t\t\t<li class=\"m-r-15\"><small>Team</small></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar10.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar9.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar8.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar7.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar6.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"progress-container progress-warning\">
\t\t\t\t\t\t\t<span class=\"progress-badge\">Home Development</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"29\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 29%;\">
\t\t\t\t\t\t\t\t\t<span class=\"progress-value\">29%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled team-info\">
\t\t\t\t\t\t\t\t<li class=\"m-r-15\"><small>Team</small></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar5.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar2.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar7.jpg\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</aside>

\t<!-- Chat-launcher -->
\t<div class=\"chat-launcher\"></div>
\t<div class=\"chat-wrapper\">
\t\t<div class=\"card\">
\t\t\t<div class=\"header\">
\t\t\t\t<ul class=\"list-unstyled team-info margin-0\">
\t\t\t\t\t<li class=\"m-r-15\"><h2>Design Team</h2></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar2.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar3.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar4.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar6.jpg\" alt=\"Avatar\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Add Member\"><i class=\"zmdi zmdi-plus-circle\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"body\">
\t\t\t\t<div class=\"chat-widget\">
\t\t\t\t\t<ul class=\"chat-scroll-list clearfix\">
\t\t\t\t\t\t<li class=\"left float-left\">
\t\t\t\t\t\t\t<img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar3.jpg\" class=\"rounded-circle\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"chat-info\">
\t\t\t\t\t\t\t\t<a class=\"name\" href=\"#\">Alexander</a>
\t\t\t\t\t\t\t\t<span class=\"datetime\">6:12</span>
\t\t\t\t\t\t\t\t<span class=\"message\">Hello, John </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t\t<div class=\"chat-info\"><span class=\"datetime\">6:15</span> <span class=\"message\">Hi, Alexander<br> How are you!</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t\t<div class=\"chat-info\"><span class=\"datetime\">6:16</span> <span class=\"message\">There are many variations of passages of Lorem Ipsum available</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"left float-left\"> <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar2.jpg\" class=\"rounded-circle\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"chat-info\"> <a class=\"name\" href=\"#\">Elizabeth</a> <span class=\"datetime\">6:25</span> <span class=\"message\">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"left float-left\"> <img src=\"{{ _SERVER[\"BASE_URI\"] }}assets/images/xs/avatar1.jpg\" class=\"rounded-circle\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"chat-info\"> <a class=\"name\" href=\"#\">Michael</a> <span class=\"datetime\">6:28</span> <span class=\"message\">I would love to join the team.</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t\t<div class=\"chat-info\"><span class=\"datetime\">7:02</span> <span class=\"message\">Hello, <br>Michael</span> </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group p-t-15\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter text here...\">
\t\t\t\t\t<span class=\"input-group-addon\">
                    <i class=\"zmdi zmdi-mail-send\"></i>
                </span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>", "adminMain/admin-navbar.html.twig", "C:\\wamp64\\www\\openclassrooms\\projet5\\blog\\app\\templates\\admin\\adminMain\\admin-navbar.html.twig");
    }
}
