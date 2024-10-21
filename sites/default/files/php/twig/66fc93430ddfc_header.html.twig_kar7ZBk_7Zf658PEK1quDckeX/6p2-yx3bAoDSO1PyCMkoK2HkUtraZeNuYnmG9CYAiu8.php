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

/* @agency_pro/layout/header.html.twig */
class __TwigTemplate_e68c55bf8d3db0939e6cadbf236ea483 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Header Start -->
<header id=\"pt-header\">
    <div id=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_variation"] ?? null), 3, $this->source), "html", null, true);
        echo "\" class=\"nav_header\">
        <div class=\"header_type header header-1 ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_1"] ?? null), 4, $this->source), "html", null, true);
        echo "\">
            <div class=\"topbar d-none d-lg-block\">
                <div class=\"container\">
                    <div class=\"item\">
                        <span>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["welcome_text"] ?? null), 8, $this->source), "html", null, true);
        echo "</span>
                        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 9)) {
            // line 10
            echo "                            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
                        ";
        }
        // line 12
        echo "                    </div>
                </div>
            </div>            
            ";
        // line 15
        if ((($context["sticky"] ?? null) == 1)) {
            // line 16
            echo "            <div class=\"navbar-wrapper navigation-sticky responsive-sticky\">
            ";
        } else {
            // line 18
            echo "            <div class=\"navbar-wrapper responsive-sticky\">
            ";
        }
        // line 20
        echo "                <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg mx-auto navbar-light\">
                <div class=\"res-header\">
                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 23)) {
            // line 24
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 26
        echo "                    <div class=\"header-right\">
                        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 27)) {
            // line 28
            echo "                            <div class=\"top-header top-header-lang d-none\">
                                ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 32
        echo "                        <a href=\"javascript:void(0);\" class=\"hamburger-btn d-none d-lg-block\" title=\"Hamburger Menu\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\">
                                <g data-name=\"Group 38609\" transform=\"translate(-1736 -87)\">
                                    <g data-name=\"Group 142\" transform=\"translate(8)\">
                                    <rect data-name=\"Rectangle 77\" width=\"30\" height=\"30\" rx=\"15\" transform=\"translate(1728 87)\" fill=\"#ee8d5a\" opacity=\"0.25\"></rect>
                                    <g data-name=\"Group 141\" transform=\"translate(1)\">
                                        <rect data-name=\"Rectangle 78\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1732 100)\" fill=\"#ee8d5a\"></rect>
                                        <rect data-name=\"Rectangle 79\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1740 100)\" fill=\"#ee8d5a\"></rect>
                                        <rect data-name=\"Rectangle 80\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1748 100)\" fill=\"#ee8d5a\"></rect>
                                    </g>
                                    </g>
                                </g>
                            </svg>
\t\t\t\t\t    </a>
                        ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 46)) {
            // line 47
            echo "                            <div class=\"header-search-btn d-none\">
                                <a class=\"btn\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
                                        <g id=\"Icon_feather-search1\" data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
                                            <path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
                                            <path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
                                        </g>
                                    </svg>
                                </a>
                                <form class=\"agency-search-form\" action=\"";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 56, $this->source), "html", null, true);
            echo "search/node\" method=\"get\">
                                    <input type=\"text\" placeholder=\"Search Here...\" name=\"keys\">
                                    <button type=\"submit\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
                                    <g id=\"Icon_feather-search2\" data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
                                        <path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
                                        <path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
                                    </g>
                                </svg></button>
                                </form>
                            </div>
                        ";
        }
        // line 67
        echo "                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav1\" aria-controls=\"navbarNav1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <i class=\"fas fa-bars\"></i>
                        </button>
                    </div>
                </div>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                        ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
                        <a href=\"javascript:void(0);\" class=\"hamburger-btn d-none d-lg-block\" title=\"Hamburger Menu\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\">
                                <g data-name=\"Group 38609\" transform=\"translate(-1736 -87)\">
                                    <g data-name=\"Group 142\" transform=\"translate(8)\">
                                    <rect data-name=\"Rectangle 77\" width=\"30\" height=\"30\" rx=\"15\" transform=\"translate(1728 87)\" fill=\"#ee8d5a\" opacity=\"0.25\"></rect>
                                    <g data-name=\"Group 141\" transform=\"translate(1)\">
                                        <rect data-name=\"Rectangle 78\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1732 100)\" fill=\"#ee8d5a\"></rect>
                                        <rect data-name=\"Rectangle 79\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1740 100)\" fill=\"#ee8d5a\"></rect>
                                        <rect data-name=\"Rectangle 80\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1748 100)\" fill=\"#ee8d5a\"></rect>
                                    </g>
                                    </g>
                                </g>
                            </svg>
\t\t\t\t\t    </a>
                        ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 88)) {
            // line 89
            echo "                            <div class=\"search-btn\">
                                <a class=\"btn\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
\t\t\t\t\t\t\t\t\t<g data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
\t\t\t\t\t\t\t\t\t\t<path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
\t\t\t\t\t\t\t\t\t\t<path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg></a>
                                <form class=\"dropdown-menu search-overlay\" action=\"";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source), "html", null, true);
            echo "search/node\" method=\"get\">
                                    <input type=\"text\" placeholder=\"Search Here...\" name=\"keys\">
                                    <button type=\"submit\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
\t\t\t\t\t\t\t\t\t<g id=\"Icon_feather-search3\" data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
\t\t\t\t\t\t\t\t\t\t<path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
\t\t\t\t\t\t\t\t\t\t<path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg></button>
                                </form>
                            </div>
                        ";
        }
        // line 107
        echo "                    </div>
                </nav>
                </div>
            </div>
        </div>
        <div class=\"header_type header header-2 ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_2"] ?? null), 112, $this->source), "html", null, true);
        echo "\">         
            ";
        // line 113
        if ((($context["sticky"] ?? null) == 1)) {
            // line 114
            echo "            <div class=\"navbar-wrapper navigation-sticky responsive-sticky\">
            ";
        } else {
            // line 116
            echo "            <div class=\"navbar-wrapper responsive-sticky\">
            ";
        }
        // line 118
        echo "                <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg mx-auto navbar-light\">
                <div class=\"res-header\">
                    ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 121)) {
            // line 122
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 124
        echo "                    <div class=\"header-right\">
                    ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 125)) {
            // line 126
            echo "                        <div class=\"top-header top-header-lang d-none\">
                            ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 130
        echo "                    <a href=\"javascript:void(0);\" class=\"hamburger-btn d-none d-lg-block\" title=\"Hamburger Menu\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\">
                            <g  data-name=\"Group 38609\" transform=\"translate(13390 19655)\">
                                <rect  data-name=\"Rectangle 77\" width=\"30\" height=\"30\" rx=\"15\" transform=\"translate(-13390 -19655)\" fill=\"#ee8d5a\"></rect>
                                <g  data-name=\"Group 37934\" transform=\"translate(1)\">
                                <rect  data-name=\"Rectangle 1765\" width=\"14\" height=\"2\" transform=\"translate(-13383 -19645)\" fill=\"#fff\"></rect>
                                <rect  data-name=\"Rectangle 1766\" width=\"14\" height=\"2\" transform=\"translate(-13383 -19637)\" fill=\"#fff\"></rect>
                                </g>
                            </g>
                        </svg>
                    </a>
                    ";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 141)) {
            // line 142
            echo "                        <div class=\"header-search-btn d-none\">
                            <a class=\"btn\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
                                    <g id=\"Icon_feather-search5\" data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
                                        <path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
                                        <path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
                                    </g>
                                </svg>
                            </a>
                            <form class=\"agency-search-form\" action=\"";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 151, $this->source), "html", null, true);
            echo "search/node\" method=\"get\">
                                <input type=\"text\" placeholder=\"Search Here...\" name=\"keys\">
                                <button type=\"submit\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
                                <g id=\"Icon_feather-search6\" data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
                                    <path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
                                    <path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
                                </g>
                            </svg></button>
                            </form>
                        </div>
                    ";
        }
        // line 162
        echo "                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav2\" aria-controls=\"navbarNav2\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                </div>
                </div>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav2\">
                        ";
        // line 168
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
        echo "
                        <div class=\"search-lang-ham\">
                            <a href=\"javascript:void(0);\" class=\"hamburger-btn d-none d-lg-block\" title=\"Hamburger Menu\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\">
                                    <g  data-name=\"Group 38609\" transform=\"translate(13390 19655)\">
                                        <rect data-name=\"Rectangle 77\" width=\"30\" height=\"30\" rx=\"15\" transform=\"translate(-13390 -19655)\" fill=\"#ee8d5a\"></rect>
                                        <g data-name=\"Group 37934\" transform=\"translate(1)\">
                                        <rect data-name=\"Rectangle 1765\" width=\"14\" height=\"2\" transform=\"translate(-13383 -19645)\" fill=\"#fff\"></rect>
                                        <rect data-name=\"Rectangle 1766\" width=\"14\" height=\"2\" transform=\"translate(-13383 -19637)\" fill=\"#fff\"></rect>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            ";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 181)) {
            // line 182
            echo "                                <ul class=\"search-btn d-none d-lg-block\">
                                    <li class=\"dropdown\">
                                        <a href=\"javascript:void(0);\" class=\"btn\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"27.414\" height=\"27.414\" viewBox=\"0 0 27.414 27.414\">
                                                <g data-name=\"Icon feather-search\" transform=\"translate(-3.5 -3.5)\">
                                                    <path data-name=\"Path 35\" d=\"M26.744,15.622A11.122,11.122,0,1,1,15.622,4.5,11.122,11.122,0,0,1,26.744,15.622Z\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                    <path data-name=\"Path 36\" d=\"M30.97,30.97l-5.995-5.995\" transform=\"translate(-1.47 -1.47)\" fill=\"#000\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <div class=\"dropdown-menu search-overlay\">
                                            <form action=\"";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 193, $this->source), "html", null, true);
            echo "search/node\" method=\"get\">
                                                <input type=\"text\" placeholder=\"search Here...\" name=\"keys\">
                                                <button type=\"submit\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"27.414\" height=\"27.414\" viewBox=\"0 0 27.414 27.414\">
                                                        <g data-name=\"Icon feather-search\" transform=\"translate(-3.5 -3.5)\">
                                                            <path data-name=\"Path 35\" d=\"M26.744,15.622A11.122,11.122,0,1,1,15.622,4.5,11.122,11.122,0,0,1,26.744,15.622Z\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                            <path data-name=\"Path 36\" d=\"M30.97,30.97l-5.995-5.995\" transform=\"translate(-1.47 -1.47)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            ";
        }
        // line 208
        echo "                        </div>
                    </div>
                </nav>
                </div>
            </div>
        </div>
        <div class=\"header_type header header-3 ";
        // line 214
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_3"] ?? null), 214, $this->source), "html", null, true);
        echo "\">         
            ";
        // line 215
        if ((($context["sticky"] ?? null) == 1)) {
            // line 216
            echo "            <div class=\"navbar-wrapper navigation-sticky responsive-sticky\">
            ";
        } else {
            // line 218
            echo "            <div class=\"navbar-wrapper responsive-sticky\">
            ";
        }
        // line 220
        echo "                <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg mx-auto navbar-light\">
                <div class=\"res-header\">
                    ";
        // line 223
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 223)) {
            // line 224
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 226
        echo "                    <div class=\"header-right\">
                    ";
        // line 227
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 227)) {
            // line 228
            echo "                        <div class=\"top-header top-header-lang d-none\">
                            ";
            // line 229
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 232
        echo "                    <a href=\"javascript:void(0);\" class=\"hamburger-btn d-none d-lg-block\" title=\"Hamburger Menu\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\">
                            <g data-name=\"Group 38609\" transform=\"translate(-1736 -87)\">
                                <g data-name=\"Group 142\" transform=\"translate(8)\">
                                <rect data-name=\"Rectangle 77\" width=\"30\" height=\"30\" rx=\"15\" transform=\"translate(1728 87)\" fill=\"transparent\" opacity=\"0.25\"></rect>
                                <g data-name=\"Group 141\" transform=\"translate(1)\">
                                    <rect data-name=\"Rectangle 78\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1732 100)\" fill=\"#ee8d5a\"></rect>
                                    <rect data-name=\"Rectangle 79\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1740 100)\" fill=\"#ee8d5a\"></rect>
                                    <rect data-name=\"Rectangle 80\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1748 100)\" fill=\"#ee8d5a\"></rect>
                                </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    ";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 246)) {
            // line 247
            echo "                        <div class=\"header-search-btn d-none\">
                            <a class=\"btn\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
                                    <g id=\"Icon_feather-search8\" data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
                                        <path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
                                        <path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
                                    </g>
                                </svg>
                            </a>
                            <form class=\"agency-search-form\" action=\"";
            // line 256
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 256, $this->source), "html", null, true);
            echo "search/node\" method=\"get\">
                                <input type=\"text\" placeholder=\"Search Here...\" name=\"keys\">
                                <button type=\"submit\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16.023\" height=\"16.023\" viewBox=\"0 0 16.023 16.023\">
                                <g id=\"Icon_feather-search9\" data-name=\"Icon feather-search\" transform=\"translate(-3.75 -3.75)\">
                                    <path data-name=\"Path 327\" d=\"M16.974,10.737A6.237,6.237,0,1,1,10.737,4.5,6.237,6.237,0,0,1,16.974,10.737Z\" transform=\"translate(0 0)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\"></path>
                                    <path data-name=\"Path 328\" d=\"M28.294,28.294l-3.319-3.319\" transform=\"translate(-9.794 -9.794)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.8\"></path>
                                </g>
                            </svg></button>
                            </form>
                        </div>
                    ";
        }
        // line 267
        echo "                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav3\" aria-controls=\"navbarNav3\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                </div>
                </div>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav3\">
                        ";
        // line 273
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
        echo "
                        <div class=\"search-lang-ham\">
                            <a href=\"javascript:void(0);\" class=\"hamburger-btn d-none d-lg-block\" title=\"Hamburger Menu\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
                               <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\">
                                    <g data-name=\"Group 38609\" transform=\"translate(-1736 -87)\">
                                        <g data-name=\"Group 142\" transform=\"translate(8)\">
                                        <rect data-name=\"Rectangle 77\" width=\"30\" height=\"30\" rx=\"15\" transform=\"translate(1728 87)\" fill=\"transparent\" opacity=\"0.25\"></rect>
                                        <g data-name=\"Group 141\" transform=\"translate(1)\">
                                            <rect data-name=\"Rectangle 78\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1732 100)\" fill=\"#ee8d5a\"></rect>
                                            <rect data-name=\"Rectangle 79\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1740 100)\" fill=\"#ee8d5a\"></rect>
                                            <rect data-name=\"Rectangle 80\" width=\"4\" height=\"4\" rx=\"2\" transform=\"translate(1748 100)\" fill=\"#ee8d5a\"></rect>
                                        </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            ";
        // line 289
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 289)) {
            // line 290
            echo "                                <ul class=\"lang-dropdown-menu\">
                                    <li>";
            // line 291
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
            echo "</li>
                                </ul>
                            ";
        }
        // line 294
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 294)) {
            // line 295
            echo "                                <ul class=\"search-btn d-none d-lg-block\">
                                    <li class=\"dropdown\">
                                        <a href=\"javascript:void(0);\" class=\"btn\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"27.414\" height=\"27.414\" viewBox=\"0 0 27.414 27.414\">
                                                <g data-name=\"Icon feather-search\" transform=\"translate(-3.5 -3.5)\">
                                                    <path data-name=\"Path 35\" d=\"M26.744,15.622A11.122,11.122,0,1,1,15.622,4.5,11.122,11.122,0,0,1,26.744,15.622Z\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                    <path data-name=\"Path 36\" d=\"M30.97,30.97l-5.995-5.995\" transform=\"translate(-1.47 -1.47)\" fill=\"#000\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <div class=\"dropdown-menu search-overlay\">
                                            <form action=\"";
            // line 306
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 306, $this->source), "html", null, true);
            echo "search/node\" method=\"get\">
                                                <input type=\"text\" placeholder=\"search Here...\" name=\"keys\">
                                                <button type=\"submit\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"27.414\" height=\"27.414\" viewBox=\"0 0 27.414 27.414\">
                                                        <g data-name=\"Icon feather-search\" transform=\"translate(-3.5 -3.5)\">
                                                            <path data-name=\"Path 35\" d=\"M26.744,15.622A11.122,11.122,0,1,1,15.622,4.5,11.122,11.122,0,0,1,26.744,15.622Z\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                            <path data-name=\"Path 36\" d=\"M30.97,30.97l-5.995-5.995\" transform=\"translate(-1.47 -1.47)\" fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"></path>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            ";
        }
        // line 321
        echo "                        </div>
                    </div>
                </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\" aria-labelledby=\"offcanvasRight\">
  ";
        // line 331
        echo "  ";
        // line 332
        echo "  <div class=\"offcanvas-body\">
    <div class=\"hamburger-menu \">
        <div class=\"hamburger-item\">
            <a href=\"javascript:void(0);\" class=\"hamburger-btn\" title=\"Hamburger Menu\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" viewBox=\"0 0 752 752\" height=\"60px\" width=\"60px\">
                    <path d=\"m492.33 263.85c-8.3164-8.3203-21.816-8.3203-30.133 0.007813l-85.809 85.852-85.805-85.848c-8.332-8.3359-21.824-8.332-30.133-0.007813-8.3242 8.3242-8.332 21.812-0.007813 30.133l85.82 85.867-85.824 85.863c-8.3203 8.3203-8.3164 21.812 0.007812 30.133 4.1562 4.1641 9.6094 6.2383 15.066 6.2383s10.918-2.0781 15.074-6.2461l85.805-85.852 85.801 85.859c4.1641 4.168 9.6133 6.2461 15.074 6.2461 5.4492 0 10.906-2.0781 15.066-6.2383 8.3242-8.3203 8.332-21.812 0.007813-30.133l-85.832-85.871 85.828-85.871c8.3203-8.3164 8.3164-21.809-0.007813-30.133z\"></path>
                </svg>
                ";
        // line 340
        echo "            </a>
            ";
        // line 342
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 342), 342, $this->source), "html", null, true);
        echo "
        </div>
    </div>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_variation", "active_1", "welcome_text", "page", "sticky", "base_path", "active_2", "active_3"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@agency_pro/layout/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  536 => 342,  533 => 340,  524 => 332,  522 => 331,  511 => 321,  493 => 306,  480 => 295,  477 => 294,  471 => 291,  468 => 290,  466 => 289,  447 => 273,  439 => 267,  425 => 256,  414 => 247,  412 => 246,  396 => 232,  390 => 229,  387 => 228,  385 => 227,  382 => 226,  376 => 224,  374 => 223,  369 => 220,  365 => 218,  361 => 216,  359 => 215,  355 => 214,  347 => 208,  329 => 193,  316 => 182,  314 => 181,  298 => 168,  290 => 162,  276 => 151,  265 => 142,  263 => 141,  250 => 130,  244 => 127,  241 => 126,  239 => 125,  236 => 124,  230 => 122,  228 => 121,  223 => 118,  219 => 116,  215 => 114,  213 => 113,  209 => 112,  202 => 107,  188 => 96,  179 => 89,  177 => 88,  159 => 73,  151 => 67,  137 => 56,  126 => 47,  124 => 46,  108 => 32,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  88 => 24,  86 => 23,  81 => 20,  77 => 18,  73 => 16,  71 => 15,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@agency_pro/layout/header.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\layout\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
