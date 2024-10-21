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

/* themes/custom/agency_pro/templates/page/page--user.html.twig */
class __TwigTemplate_30d54620860d1017b17ce5fd1139bcb0 extends Template
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
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('footer', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_variation", "page"]);    }

    // line 80
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "<!-- header -->
    ";
        // line 82
        $this->loadTemplate("@agency_pro/layout/header.html.twig", "themes/custom/agency_pro/templates/page/page--user.html.twig", 82)->display($context);
        // line 83
        echo "<!-- End of header -->
";
    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    <div id=\"main\">
    <div class=\"container-fluid\">
        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
          ";
        // line 90
        echo "          <main class=\"main-content col\" id=\"content\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
          </main>
        </div>
    </div>
  </div>
";
    }

    // line 99
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "<!-- footer -->
    ";
        // line 101
        $this->loadTemplate("@agency_pro/layout/footer.html.twig", "themes/custom/agency_pro/templates/page/page--user.html.twig", 101)->display($context);
        // line 102
        echo "<!-- End of footer -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/page/page--user.html.twig";
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
        return array (  124 => 102,  122 => 101,  119 => 100,  115 => 99,  105 => 92,  101 => 90,  96 => 86,  92 => 85,  87 => 83,  85 => 82,  82 => 81,  78 => 80,  73 => 99,  70 => 98,  68 => 85,  66 => 80,  62 => 78,  60 => 77,  57 => 76,  55 => 75,  52 => 74,  50 => 73,  47 => 72,  45 => 71,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/page/page--user.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\page\\page--user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "set" => 72, "block" => 80, "include" => 82);
        static $filters = array("escape" => 92);
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
