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

/* themes/custom/agency_pro/templates/page/page.html.twig */
class __TwigTemplate_0f1d1fa483978bac2fa28b2acf48f572 extends Template
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
        // line 2
        echo "
";
        // line 71
        if ((($context["header_variation"] ?? null) == "header-1")) {
            // line 72
            echo "  ";
            $context["active_1"] = "active";
        } elseif ((        // line 73
($context["header_variation"] ?? null) == "header-2")) {
            // line 74
            echo "  ";
            $context["active_2"] = "active";
        } elseif ((        // line 75
($context["header_variation"] ?? null) == "header-3")) {
            // line 76
            echo "  ";
            $context["active_3"] = "active";
        } elseif ((        // line 77
($context["header_variation"] ?? null) == "header-4")) {
            // line 78
            echo "  ";
            $context["active_4"] = "active";
        }
        // line 80
        $this->displayBlock('head', $context, $blocks);
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('footer', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_variation", "page", "check_sidebar_status", "sidebar_first_attributes", "sidebar_second_attributes"]);    }

    // line 80
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "<!-- header -->
    ";
        // line 82
        $this->loadTemplate("@agency_pro/layout/header.html.twig", "themes/custom/agency_pro/templates/page/page.html.twig", 82)->display($context);
        // line 83
        echo "<!-- End of header -->
";
    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    <!-- Check for sidebar -->
      ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 87) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 87))) {
            // line 88
            echo "      ";
            $context["container"] = "container";
            // line 89
            echo "      ";
        } else {
            // line 90
            echo "        ";
            $context["container"] = "container-fluid";
            // line 91
            echo "      ";
        }
        // line 92
        echo "    <!-- End -->
    <div id=\"main\" class=\"";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["check_sidebar_status"] ?? null), 93, $this->source), "html", null, true);
        echo "\">

    <!-- PAGE BANNER STARTS -->
      ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_banner", [], "any", false, false, true, 96)) {
            // line 97
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_banner", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 99
        echo "    <!-- PAGE BANNER STARTS -->
    
      ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 101)) {
            // line 102
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 104
        echo "      <div class=\"container\">
        ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 107, $this->source), "html", null, true);
        echo "\"> 
        <div class=\"row row-offcanvas row-offcanvas-left clearfix ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["check_sidebar_status"] ?? null), 108, $this->source), "html", null, true);
        echo "--";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 108, $this->source), "html", null, true);
        echo "\">
          ";
        // line 110
        echo "          <main class=\"main-content col\" id=\"content\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
          </main>
          ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114)) {
            // line 115
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 115, $this->source), "html", null, true);
            echo ">
              <aside class=\"\" role=\"complementary\">
                ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 121
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 121)) {
            // line 122
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 122, $this->source), "html", null, true);
            echo ">
              <aside class=\"\" role=\"complementary\">
                ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 128
        echo "        </div>
    </div>
    </div>

    ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132)) {
            // line 133
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 134, $this->source), "html", null, true);
            echo " clearfix\">
          ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
    }

    // line 141
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "<!-- footer -->
    ";
        // line 143
        $this->loadTemplate("@agency_pro/layout/footer.html.twig", "themes/custom/agency_pro/templates/page/page.html.twig", 143)->display($context);
        // line 144
        echo "<!-- End of footer -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/page/page.html.twig";
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
        return array (  233 => 144,  231 => 143,  228 => 142,  224 => 141,  215 => 135,  211 => 134,  208 => 133,  206 => 132,  200 => 128,  193 => 124,  187 => 122,  184 => 121,  177 => 117,  171 => 115,  169 => 114,  164 => 112,  160 => 110,  154 => 108,  150 => 107,  145 => 105,  142 => 104,  136 => 102,  134 => 101,  130 => 99,  124 => 97,  122 => 96,  116 => 93,  113 => 92,  110 => 91,  107 => 90,  104 => 89,  101 => 88,  99 => 87,  96 => 86,  92 => 85,  87 => 83,  85 => 82,  82 => 81,  78 => 80,  73 => 141,  70 => 140,  68 => 85,  66 => 80,  62 => 78,  60 => 77,  57 => 76,  55 => 75,  52 => 74,  50 => 73,  47 => 72,  45 => 71,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/page/page.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "set" => 72, "block" => 80, "include" => 82);
        static $filters = array("escape" => 93);
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
