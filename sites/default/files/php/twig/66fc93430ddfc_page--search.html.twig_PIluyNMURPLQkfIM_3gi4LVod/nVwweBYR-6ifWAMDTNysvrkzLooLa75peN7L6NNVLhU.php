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

/* themes/custom/agency_pro/templates/page/page--search.html.twig */
class __TwigTemplate_3490f8f850bc5a9af34106d38e743710 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if ((($context["header_variation"] ?? null) == "header-1")) {
            // line 60
            echo "  ";
            $context["active_1"] = "active";
        } elseif ((        // line 61
($context["header_variation"] ?? null) == "header-2")) {
            // line 62
            echo "  ";
            $context["active_2"] = "active";
        } elseif ((        // line 63
($context["header_variation"] ?? null) == "header-3")) {
            // line 64
            echo "  ";
            $context["active_3"] = "active";
        } elseif ((        // line 65
($context["header_variation"] ?? null) == "header-4")) {
            // line 66
            echo "  ";
            $context["active_4"] = "active";
        }
        // line 68
        $this->displayBlock('head', $context, $blocks);
        // line 73
        echo "  <div id=\"main\">
    ";
        // line 74
        if (($context["search_banner_title"] ?? null)) {
            // line 75
            echo "      <section class=\"page-banner\" style=\"background-image: url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_banner_img"] ?? null), 75, $this->source), "html", null, true);
            echo "');\">
        <div class=\"container dt-section\">
          <div class=\"heading\">
            <h1>";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_banner_title"] ?? null), 78, $this->source), "html", null, true);
            echo "</h1>
          </div>
        </div>
      </section>
      <nav class=\"breadcrumb-section\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"#\">HOME</a></li>
          <li class=\"icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"39.932\" height=\"37.846\" viewBox=\"0 0 39.932 37.846\">
              <g class=\"Group_38512\" data-name=\"Group 38512\" transform=\"translate(39.932) rotate(90)\">
                <path id=\"Icon_ionic-ios-arrow-back\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 39.932) rotate(-90)\" fill=\"#fff\"/>
                <path id=\"Icon_ionic-ios-arrow-back-2\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 23.128) rotate(-90)\" fill=\"#fff\"/>
              </g>
            </svg>
          </li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_banner_title"] ?? null), 93, $this->source), "html", null, true);
            echo "</li>
        </ol>
      </nav>
    ";
        }
        // line 97
        echo "    <section class=\"search-list search-result section\">
      <div class=\"container\">
        ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
      </div>
    </section>
  </div>
";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_variation", "search_banner_title", "search_banner_img", "page"]);    }

    // line 68
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "<!-- header -->
    ";
        // line 70
        $this->loadTemplate("@agency_pro/layout/header.html.twig", "themes/custom/agency_pro/templates/page/page--search.html.twig", 70)->display($context);
        // line 71
        echo "<!-- End of header -->
";
    }

    // line 103
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "    ";
        $this->loadTemplate("@agency_pro/layout/footer.html.twig", "themes/custom/agency_pro/templates/page/page--search.html.twig", 104)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/page/page--search.html.twig";
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
        return array (  135 => 104,  131 => 103,  126 => 71,  124 => 70,  121 => 69,  117 => 68,  112 => 103,  105 => 99,  101 => 97,  94 => 93,  76 => 78,  69 => 75,  67 => 74,  64 => 73,  62 => 68,  58 => 66,  56 => 65,  53 => 64,  51 => 63,  48 => 62,  46 => 61,  43 => 60,  41 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/page/page--search.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\page\\page--search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "set" => 60, "block" => 68, "include" => 70);
        static $filters = array("escape" => 75);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'include'],
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
