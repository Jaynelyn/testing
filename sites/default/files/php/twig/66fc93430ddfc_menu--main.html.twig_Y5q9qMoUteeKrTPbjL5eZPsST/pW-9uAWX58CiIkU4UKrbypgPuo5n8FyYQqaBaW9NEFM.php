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

/* themes/custom/agency_pro/templates/menu/menu--main.html.twig */
class __TwigTemplate_d377d90108293b5a122bea49c76add9c extends Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        echo "
";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 7, $context, $this->getSourceContext()));
        echo "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);    }

    // line 9
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__link_type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "link_type" => $__link_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 10
            echo "  ";
            $macros["menus"] = $this;
            // line 11
            echo "    ";
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 12
                echo "      <ul class=\"navbar-nav\">
          ";
                // line 13
                if (($context["items"] ?? null)) {
                    // line 14
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 15
                        echo "              ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 15)) {
                            // line 16
                            echo "                ";
                            // line 17
                            $context["classes"] = ["nav-link", ((twig_get_attribute($this->env, $this->source,                             // line 19
$context["item"], "in_active_trail", [], "any", false, false, true, 19)) ? ("active") : (""))];
                            // line 21
                            echo "  

                ";
                            // line 23
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), "getOption", ["attributes"], "method", false, false, true, 23), "link_type", [], "any", false, false, true, 23), "mega_menu")) {
                                // line 24
                                echo "                  ";
                                $context["li_class"] = "nav-item dropdown mega-menu";
                                // line 25
                                echo "                ";
                            } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25), "getOption", ["attributes"], "method", false, false, true, 25), "link_type", [], "any", false, false, true, 25), "blogs_menu")) {
                                // line 26
                                echo "                  ";
                                $context["li_class"] = "nav-item dropdown blogs-menu";
                                // line 27
                                echo "                ";
                            } else {
                                // line 28
                                echo "                  ";
                                $context["li_class"] = "nav-item dropdown";
                                // line 29
                                echo "                ";
                            }
                            echo "  
                <li class=\"";
                            // line 30
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["li_class"] ?? null), 30, $this->source), "html", null, true);
                            echo "\">
                  ";
                            // line 31
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 31), "toString", [], "any", false, false, true, 31)) < 0)) {
                                // line 32
                                echo "                  <span ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 32), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                                echo " href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                                echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   ";
                                // line 33
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                                echo "
                   ";
                                // line 35
                                echo "                  </span>
                  ";
                            } else {
                                // line 37
                                echo "                  <a ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 37), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                                echo " href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                                echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   ";
                                // line 38
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                                echo "
                  </a>
                  ";
                            }
                            // line 41
                            echo "                  <ul class=\"dropdown-menu dropdown-wrapper rounded-0 primary-color border-0  menu-level-0\">
                    ";
                            // line 42
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 42), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 42, $context, $this->getSourceContext()));
                            echo "
                  </ul>
                </li>
              ";
                        } else {
                            // line 46
                            echo "                ";
                            // line 47
                            $context["classes"] = ["nav-link menu-link", ((twig_get_attribute($this->env, $this->source,                             // line 49
$context["item"], "in_active_trail", [], "any", false, false, true, 49)) ? ("active") : (""))];
                            // line 52
                            echo "                <li class=\"nav-item\">
                  ";
                            // line 53
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "toString", [], "any", false, false, true, 53)) < 0)) {
                                // line 54
                                echo "                  <span ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                                echo " href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                                echo "</span>
                  ";
                            } else {
                                // line 56
                                echo "                  <a ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 56), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                                echo " href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                                echo "</a>
                  ";
                            }
                            // line 58
                            echo "                </li>
              ";
                        }
                        // line 60
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "          ";
                }
                // line 62
                echo "        </ul>
    ";
            } elseif ((            // line 63
($context["menu_level"] ?? null) == 1)) {
                // line 64
                echo "      ";
                if (($context["items"] ?? null)) {
                    // line 65
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 66
                        echo "            ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 66)) {
                            // line 67
                            echo "              ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67), "getOption", ["attributes"], "method", false, false, true, 67), "link_type", [], "any", false, false, true, 67), "mega_menu_1")) {
                                // line 68
                                echo "                <li>
                  <ul>
                      ";
                                // line 70
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 70), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 70, $context, $this->getSourceContext()));
                                echo "
                  </ul>
                </li>
                ";
                            } else {
                                // line 74
                                echo "                <li class=\"dropdown-item dropdown-submenu\">
                  ";
                                // line 75
                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 75), "toString", [], "any", false, false, true, 75)) < 0)) {
                                    // line 76
                                    echo "                        <span class=\"drop-toggle\" href=\"";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                                    echo "\">";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                                    echo "</span>
                        <ul class=\"dropdown-wrapper dropdown-menu rounded-0 primary-color border-0 menu-level-1\">
                          ";
                                    // line 78
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 78, $context, $this->getSourceContext()));
                                    echo "
                        </ul>
                  ";
                                } else {
                                    // line 81
                                    echo "                        <a class=\"drop-toggle\" href=\"";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                                    echo "\">";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                                    echo "</a>
                        ";
                                    // line 83
                                    echo "                        <ul class=\"dropdown-menu collapse\">
                          ";
                                    // line 84
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 84), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 84, $context, $this->getSourceContext()));
                                    echo "
                        </ul>
                  ";
                                }
                                // line 87
                                echo "                </li>
              ";
                            }
                            // line 89
                            echo "            ";
                        } else {
                            // line 90
                            echo "            <li class=\"dropdown-item\">
            ";
                            // line 91
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 91), "toString", [], "any", false, false, true, 91)) < 0)) {
                                // line 92
                                echo "            <span href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                                echo "</span>
            ";
                            } else {
                                // line 94
                                echo "            <a href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                                echo "</a>
            ";
                            }
                            // line 96
                            echo "            </li>
            ";
                        }
                        // line 98
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "      ";
                }
                // line 100
                echo "    ";
            } elseif ((($context["menu_level"] ?? null) == 2)) {
                // line 101
                echo "        ";
                if (($context["items"] ?? null)) {
                    // line 102
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 103
                        echo "            ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 103)) {
                            // line 104
                            echo "              <li class=\"dropdown-submenu\">
              ";
                            // line 105
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 105), "toString", [], "any", false, false, true, 105)) < 0)) {
                                // line 106
                                echo "              <span href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                                echo "</span>
                    <ul class=\"dropdown-menu dropdown-wrapper rounded-0 primary-color border-0\">
                      ";
                                // line 108
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 108), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 108, $context, $this->getSourceContext()));
                                echo "
                    </ul>
              ";
                            } else {
                                // line 111
                                echo "              <a href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                                echo "</a>
                    <ul class=\"dropdown-menu dropdown-wrapper rounded-0 primary-color border-0\">
                      ";
                                // line 113
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 113), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 113, $context, $this->getSourceContext()));
                                echo "
                    </ul>
              ";
                            }
                            // line 116
                            echo "              </li>
            ";
                        } else {
                            // line 118
                            echo "            <li class=\"dropdown-item\">
            ";
                            // line 119
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 119), "toString", [], "any", false, false, true, 119)) < 0)) {
                                // line 120
                                echo "              <span href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                                echo "</span>
            ";
                            } else {
                                // line 122
                                echo "              <a href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                                echo "</a>
            ";
                            }
                            // line 124
                            echo "            </li>
            ";
                        }
                        // line 126
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "        ";
                }
                // line 128
                echo "    ";
            } elseif ((($context["menu_level"] ?? null) == 3)) {
                // line 129
                echo "        ";
                if (($context["items"] ?? null)) {
                    // line 130
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 131
                        echo "            <li class=\"dropdown-item\">
            ";
                        // line 132
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 132), "toString", [], "any", false, false, true, 132)) < 0)) {
                            // line 133
                            echo "              <span href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                            echo "</span>
            ";
                        } else {
                            // line 135
                            echo "              <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                            echo "</a>
            ";
                        }
                        // line 137
                        echo "            </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "        ";
                }
                // line 140
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/menu/menu--main.html.twig";
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
        return array (  438 => 140,  435 => 139,  428 => 137,  420 => 135,  412 => 133,  410 => 132,  407 => 131,  402 => 130,  399 => 129,  396 => 128,  393 => 127,  387 => 126,  383 => 124,  375 => 122,  367 => 120,  365 => 119,  362 => 118,  358 => 116,  352 => 113,  344 => 111,  338 => 108,  330 => 106,  328 => 105,  325 => 104,  322 => 103,  317 => 102,  314 => 101,  311 => 100,  308 => 99,  302 => 98,  298 => 96,  290 => 94,  282 => 92,  280 => 91,  277 => 90,  274 => 89,  270 => 87,  264 => 84,  261 => 83,  254 => 81,  248 => 78,  240 => 76,  238 => 75,  235 => 74,  228 => 70,  224 => 68,  221 => 67,  218 => 66,  213 => 65,  210 => 64,  208 => 63,  205 => 62,  202 => 61,  196 => 60,  192 => 58,  182 => 56,  172 => 54,  170 => 53,  167 => 52,  165 => 49,  164 => 47,  162 => 46,  155 => 42,  152 => 41,  146 => 38,  139 => 37,  135 => 35,  131 => 33,  124 => 32,  122 => 31,  118 => 30,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  96 => 23,  92 => 21,  90 => 19,  89 => 17,  87 => 16,  84 => 15,  79 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  52 => 9,  44 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/menu/menu--main.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 9, "if" => 11, "for" => 14, "set" => 17);
        static $filters = array("escape" => 30, "length" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'length'],
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
