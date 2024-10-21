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

/* @agency_pro/paragraphs/services/services1.html.twig */
class __TwigTemplate_46b41378e1c0ebd60c8a66e71190d77c extends Template
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
        if (twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_style_variant", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), "style1")) {
            // line 2
            echo "    <section class=\"dt-section bg-color\" data-aos=\"fade-up\">
        <div class=\"services-1\">
            <div class=\"container\">
                ";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tagline", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5))) {
                // line 6
                echo "                    <div class=\"home-1-title\">
                        ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tagline", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7)) {
                    // line 8
                    echo "                            <span>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tagline", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 10
                echo "                        <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</h2>
                    </div>
                ";
            }
            // line 13
            echo "                <div class=\"services-style-1\">
                    ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
                </div>
                ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16))) {
                // line 17
                echo "                    <div class=\"more-services\">
                        <div class=\"icon\">
                            <svg id=\"Group_188\" data-name=\"Group 188\" xmlns=\"http://www.w3.org/2000/svg\" width=\"128\" height=\"80\" viewBox=\"0 0 128 80\">
                                <rect id=\"Rectangle_121\" data-name=\"Rectangle 121\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(120)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_122\" data-name=\"Rectangle 122\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(96)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_123\" data-name=\"Rectangle 123\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(72)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_124\" data-name=\"Rectangle 124\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_125\" data-name=\"Rectangle 125\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_126\" data-name=\"Rectangle 126\" width=\"8\" height=\"8\" rx=\"4\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_129\" data-name=\"Rectangle 129\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(96 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_130\" data-name=\"Rectangle 130\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(72 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_131\" data-name=\"Rectangle 131\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_132\" data-name=\"Rectangle 132\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_133\" data-name=\"Rectangle 133\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(0 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_135\" data-name=\"Rectangle 135\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(72 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_136\" data-name=\"Rectangle 136\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_137\" data-name=\"Rectangle 137\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_138\" data-name=\"Rectangle 138\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(0 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_141\" data-name=\"Rectangle 141\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48 72)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_142\" data-name=\"Rectangle 142\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24 72)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_143\" data-name=\"Rectangle 143\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(0 72)\" fill=\"#ee8d5a\"/>
                            </svg>
                        </div>
                        ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 40), 0, [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
                        ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41)) {
                    // line 42
                    echo "                            <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 42), 0, [], "any", false, false, true, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null), 42, $this->source), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-style-1 btn-style-lg\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 42), 0, [], "any", false, false, true, 42)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 42, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 42), 0, [], "any", false, false, true, 42)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 42, $this->source), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 44
                echo "                    </div>
                ";
            }
            // line 46
            echo "            </div>
        </div>
    </section>
";
        } elseif (twig_in_filter((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["content"] ?? null), "field_style_variant", [], "any", false, false, true, 49), 0, [], "any", false, false, true, 49)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#markup"] ?? null) : null), "style2")) {
            // line 50
            echo "    <section class=\"dt-section\" data-aos=\"fade-up\">
        <div id=\"services-2\" class=\"services-2\">
            <div class=\"container\">
                ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 53), 0, [], "any", false, false, true, 53)) {
                // line 54
                echo "                    <div class=\"home-2-title\">
                        <h2>";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 55), 0, [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "</h2>
                    </div>
                ";
            }
            // line 58
            echo "                <div class=\"services-style-2\">
                    ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </section>
";
        } else {
            // line 65
            echo "    <section class=\"dt-section\" data-aos=\"fade-up\">
        <div class=\"services-1\">
            <div class=\"container\">
                ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tagline", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68))) {
                // line 69
                echo "                    <div class=\"home-1-title\">
                        ";
                // line 70
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tagline", [], "any", false, false, true, 70), 0, [], "any", false, false, true, 70)) {
                    // line 71
                    echo "                            <span>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tagline", [], "any", false, false, true, 71), 0, [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 73
                echo "                        <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 73), 0, [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "</h2>
                    </div>
                ";
            }
            // line 76
            echo "                <div class=\"services-style-1\">
                    ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
                </div>
                ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 79), 0, [], "any", false, false, true, 79) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 79), 0, [], "any", false, false, true, 79))) {
                // line 80
                echo "                    <div class=\"more-services\">
                        <div class=\"icon\">
                            <svg id=\"Group_188\" data-name=\"Group 188\" xmlns=\"http://www.w3.org/2000/svg\" width=\"128\" height=\"80\" viewBox=\"0 0 128 80\">
                                <rect id=\"Rectangle_121\" data-name=\"Rectangle 121\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(120)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_122\" data-name=\"Rectangle 122\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(96)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_123\" data-name=\"Rectangle 123\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(72)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_124\" data-name=\"Rectangle 124\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_125\" data-name=\"Rectangle 125\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_126\" data-name=\"Rectangle 126\" width=\"8\" height=\"8\" rx=\"4\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_129\" data-name=\"Rectangle 129\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(96 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_130\" data-name=\"Rectangle 130\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(72 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_131\" data-name=\"Rectangle 131\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_132\" data-name=\"Rectangle 132\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_133\" data-name=\"Rectangle 133\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(0 24)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_135\" data-name=\"Rectangle 135\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(72 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_136\" data-name=\"Rectangle 136\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_137\" data-name=\"Rectangle 137\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_138\" data-name=\"Rectangle 138\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(0 48)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_141\" data-name=\"Rectangle 141\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(48 72)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_142\" data-name=\"Rectangle 142\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(24 72)\" fill=\"#ee8d5a\"/>
                                <rect id=\"Rectangle_143\" data-name=\"Rectangle 143\" width=\"8\" height=\"8\" rx=\"4\" transform=\"translate(0 72)\" fill=\"#ee8d5a\"/>
                            </svg>
                        </div>
                        ";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 103), 0, [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "
                        ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 104), 0, [], "any", false, false, true, 104)) {
                    // line 105
                    echo "                            <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 105), 0, [], "any", false, false, true, 105)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#url"] ?? null) : null), 105, $this->source), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-style-1 btn-style-lg\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 105), 0, [], "any", false, false, true, 105)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#title"] ?? null) : null), 105, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 105), 0, [], "any", false, false, true, 105)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#title"] ?? null) : null), 105, $this->source), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 107
                echo "                    </div>
                ";
            }
            // line 109
            echo "            </div>
        </div>
    </section>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@agency_pro/paragraphs/services/services1.html.twig";
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
        return array (  236 => 109,  232 => 107,  222 => 105,  220 => 104,  216 => 103,  191 => 80,  189 => 79,  184 => 77,  181 => 76,  174 => 73,  168 => 71,  166 => 70,  163 => 69,  161 => 68,  156 => 65,  147 => 59,  144 => 58,  138 => 55,  135 => 54,  133 => 53,  128 => 50,  126 => 49,  121 => 46,  117 => 44,  107 => 42,  105 => 41,  101 => 40,  76 => 17,  74 => 16,  69 => 14,  66 => 13,  59 => 10,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@agency_pro/paragraphs/services/services1.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\paragraphs\\services\\services1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 8);
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
