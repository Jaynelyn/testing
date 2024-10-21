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

/* themes/custom/agency_pro/templates/page/page--403.html.twig */
class __TwigTemplate_2481073ce8000024ff2ce0beac0211e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        if ((($context["header_variation"] ?? null) == "header-1")) {
            // line 58
            echo "  ";
            $context["active_1"] = "active";
        } elseif ((        // line 59
($context["header_variation"] ?? null) == "header-2")) {
            // line 60
            echo "  ";
            $context["active_2"] = "active";
        } elseif ((        // line 61
($context["header_variation"] ?? null) == "header-3")) {
            // line 62
            echo "  ";
            $context["active_3"] = "active";
        } elseif ((        // line 63
($context["header_variation"] ?? null) == "header-4")) {
            // line 64
            echo "  ";
            $context["active_4"] = "active";
        } elseif ((        // line 65
($context["header_variation"] ?? null) == "header-5")) {
            // line 66
            echo "  ";
            $context["active_5"] = "active";
        }
        // line 68
        $this->displayBlock('head', $context, $blocks);
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 109
        $this->displayBlock('footer', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_variation", "access_denied_page_banner", "page_403_banner_title", "page_403_title", "img_path", "page_403_message_title", "page_403_description", "page_403_button"]);    }

    // line 68
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "<!-- header -->
    ";
        // line 70
        $this->loadTemplate("@agency_pro/layout/header.html.twig", "themes/custom/agency_pro/templates/page/page--403.html.twig", 70)->display($context);
        // line 71
        echo "<!-- End of header -->
";
    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    ";
        $context["base_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 75
        echo "    <div id=\"main\">
        <section class=\"page-banner\" style=\"background-image: url('";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["access_denied_page_banner"] ?? null), 76, $this->source), "html", null, true);
        echo "');\">
            <div class=\"container dt-section\">
                <div class=\"heading\">
                    <h1>";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_403_banner_title"] ?? null), 79, $this->source), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </section>
        <nav class=\"breadcrumb-section\" aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 85, $this->source), "html", null, true);
        echo "\">HOME</a></li>
                <li class=\"icon\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"39.932\" height=\"37.846\" viewBox=\"0 0 39.932 37.846\">
                        <g class=\"Group_38512\" data-name=\"Group 38512\" transform=\"translate(39.932) rotate(90)\">
                            <path id=\"Icon_ionic-ios-arrow-back\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 39.932) rotate(-90)\" fill=\"#fff\"/>
                            <path id=\"Icon_ionic-ios-arrow-back-2\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 23.128) rotate(-90)\" fill=\"#fff\"/>
                        </g>
                    </svg>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_403_title"] ?? null), 94, $this->source), "html", null, true);
        echo "</li>
            </ol>
        </nav>
        <section class=\"page-403 dt-section\">
            <div class=\"container\">
                <div class=\"item\">
                    <img src=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_path"] ?? null), 100, $this->source), "html", null, true);
        echo "\" alt=\"Image\">
                    <h2>";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_403_message_title"] ?? null), 101, $this->source), "html", null, true);
        echo "</h2>
                    <p>";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_403_description"] ?? null), 102, $this->source), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 103, $this->source), "html", null, true);
        echo "\" class=\"btn btn-primary btn-style-1 btn-style-lg\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_403_button"] ?? null), 103, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_403_button"] ?? null), 103, $this->source), "html", null, true);
        echo "</a>
                </div>
            </div>
        </section>
    </div>
";
    }

    // line 109
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "  ";
        $this->loadTemplate("@agency_pro/layout/footer.html.twig", "themes/custom/agency_pro/templates/page/page--403.html.twig", 110)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/page/page--403.html.twig";
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
        return array (  167 => 110,  163 => 109,  149 => 103,  145 => 102,  141 => 101,  137 => 100,  128 => 94,  116 => 85,  107 => 79,  101 => 76,  98 => 75,  95 => 74,  91 => 73,  86 => 71,  84 => 70,  81 => 69,  77 => 68,  72 => 109,  70 => 73,  68 => 68,  64 => 66,  62 => 65,  59 => 64,  57 => 63,  54 => 62,  52 => 61,  49 => 60,  47 => 59,  44 => 58,  42 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/page/page--403.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\page\\page--403.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 57, "set" => 58, "block" => 68, "include" => 70);
        static $filters = array("escape" => 76);
        static $functions = array("url" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'include'],
                ['escape'],
                ['url']
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
