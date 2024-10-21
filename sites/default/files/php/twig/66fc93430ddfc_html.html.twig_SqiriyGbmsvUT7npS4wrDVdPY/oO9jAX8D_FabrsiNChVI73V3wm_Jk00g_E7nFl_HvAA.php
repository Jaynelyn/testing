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

/* themes/custom/agency_pro/templates/html.html.twig */
class __TwigTemplate_07076df83303b261323ce5cc6511ed55 extends Template
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
        // line 27
        $context["body_classes"] = [((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), ((        // line 29
($context["root_path"] ?? null)) ? ("not-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), (( !        // line 30
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 30, $this->source))))), ((        // line 31
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 31, $this->source)))) : ("")), ((        // line 32
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 35
        echo "<!DOCTYPE html>
";
        // line 36
        if ((($context["default_color"] ?? null) == 1)) {
            // line 37
            echo "<html";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 37, $this->source), "html", null, true);
            echo ">
";
        } else {
            // line 39
            echo "<html";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 39, $this->source), "html", null, true);
            echo " style=\" --primary-color: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary_color"] ?? null), 39, $this->source), "html", null, true);
            echo "; --secondary-color: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_color"] ?? null), 39, $this->source), "html", null, true);
            echo ";\" >
";
        }
        // line 41
        echo "  <head>
    <head-placeholder token=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 43, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 45, $this->source), "html", null, true);
        echo "\">
    ";
        // line 47
        echo "    <style>
      ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["styles"] ?? null), 48, $this->source), "html", null, true);
        echo "
    </style>
  </head>
  <body";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
    <!-- page preloader -->
    ";
        // line 53
        if ((($context["loader"] ?? null) == 1)) {
            // line 54
            echo "    <div id=\"page-loader\" class=\"page-loader active\">
        <div class=\"loading\"></div>
    </div>
    ";
        } else {
            // line 58
            echo "    <div id=\"page-loader\">
        <div class=\"loading\"></div>
    </div>
    ";
        }
        // line 62
        echo "     <!-- end of page preloader -->
    <div id=\"page_content\">
    ";
        // line 68
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 71, $this->source), "html", null, true);
        echo "
    ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 72, $this->source), "html", null, true);
        echo "
    ";
        // line 74
        echo "      <div class=\"pt-skins-panel pt-skin-demo d-none\">
        <div class=\"control-panel\"><i class=\"fa fa-cog fa-spin\"></i></div>
        <div class=\"panel-skins-content\">
          <div class=\"title\">HEADER STYLE</div>
          <div class=\"text-center\">
            <select class=\"form-control\" id=\"item_list\">
              ";
        // line 80
        if (($context["header_variation"] ?? null)) {
            // line 81
            echo "                ";
            if (twig_in_filter("1", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
                // line 82
                echo "                  <option value=\"header-1\" selected=\"selected\">Header Style 1</option>
                  ";
            } else {
                // line 84
                echo "                  <option value=\"header-1\">Header Style 1</option>
                ";
            }
            // line 86
            echo "                ";
            if (twig_in_filter("2", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
                // line 87
                echo "                  <option value=\"header-2\" selected=\"selected\">Header Style 2</option>
                  ";
            } else {
                // line 89
                echo "                  <option value=\"header-2\">Header Style 2</option>
                ";
            }
            // line 91
            echo "                ";
            if (twig_in_filter("3", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
                // line 92
                echo "                  <option value=\"header-3\" selected=\"selected\">Header Style 3</option>
                  ";
            } else {
                // line 94
                echo "                  <option value=\"header-3\">Header Style 3</option>
                ";
            }
            // line 96
            echo "              ";
        }
        // line 97
        echo "            </select>
          </div>
          <div class=\"title\">Sticky Menu</div>
          <div class=\"form-check\">
              ";
        // line 101
        if ((($context["sticky"] ?? null) == 1)) {
            // line 102
            echo "                <input type=\"checkbox\" class=\"form-check-input\" id=\"Check1\" checked=\"checked\">
                <label class=\"form-check-label\" for=\"Check1\">Sticky Menu</label>
              ";
        } else {
            // line 105
            echo "                <input type=\"checkbox\" class=\"form-check-input\" id=\"Check1\">
                <label class=\"form-check-label\" for=\"Check1\">Sticky Menu</label>
              ";
        }
        // line 108
        echo "          </div>
          <div class=\"clearfix\"></div>
          <div class=\"title\">";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("COLOR SKINS"));
        echo "</div>
          <button id=\"pt-reset-color\" class=\"btn-primary btn\">Reset Colors</button>
          ";
        // line 112
        if (($context["color_set"] ?? null)) {
            // line 113
            echo "            <div class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("COLOR SCHEMES "));
            echo "</div>
            <div class=\"text-center row\">
              ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["color_set"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 116
                echo "                <a class=\"item-color p-0 mb-2 col-6\" 
                  data-primary_color=\"";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 117), "primary_color", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\" 
                  data-secondary_color=\"";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 118), "secondary_color", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "\" 
                  data-category='";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "'>
                  <div class=\"row h-100\">
                    <div class=\"col-4 col-md-4 p-0\">
                      <div class=\"primary_bar\" style=\"background-color: ";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 122), "primary_color", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "\"></div>
                      <div class=\"secondary_bar\" style=\"background-color: ";
                // line 123
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 123), "secondary_color", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                echo "\"></div>
                    </div>
                    <div class=\"col-8 col-md-8 p-0 my-auto\">
                      <span class=\"color_set_title\">";
                // line 126
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            </div>
            <div class=\"clearfix\"></div>
          ";
        }
        // line 134
        echo "          <!-- ";
        if (($context["secondary_colors"] ?? null)) {
            // line 135
            echo "            <div class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary Color"));
            echo "</div>
            <div class=\"text-center\">
              ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["secondary_colors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 138
                echo "                <a class=\"item-color\" 
                    style=\"background-color:";
                // line 139
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 139, $this->source), "html", null, true);
                echo "\"
                    data-color=\"";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 140, $this->source), "html", null, true);
                echo "\" 
                    data-category='secondary'></a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "            </div>
          ";
        }
        // line 144
        echo " -->
        </div>
      </div>
    ";
        // line 147
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 147, $this->source), "html", null, true);
        echo "
    </div>
    <!-- header change loader -->
    <div id=\"loader\">
      <div class=\"loading\"></div>
    </div>
    <!-- End of header change loader -->
    <!-- scroll top -->
    ";
        // line 164
        echo "    <!-- End of scroll top -->
    ";
        // line 166
        echo "   <!-- Scroll top -->
    <button class=\"btn btn-primary scroll-top\" data-scroll=\"up\" type=\"button\" style=\"display: inline-block;\">
      <i class=\"fa fa-chevron-up\" aria-hidden=\"true\"></i>
    </button>
    <!-- End of scroll top -->
    <js-bottom-placeholder token=\"";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 171, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "default_color", "html_attributes", "primary_color", "secondary_color", "placeholder_token", "head_title", "styles", "attributes", "loader", "page_top", "page", "header_variation", "sticky", "color_set", "secondary_colors", "page_bottom"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/html.html.twig";
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
        return array (  321 => 171,  314 => 166,  311 => 164,  300 => 147,  295 => 144,  291 => 143,  282 => 140,  278 => 139,  275 => 138,  271 => 137,  265 => 135,  262 => 134,  257 => 131,  246 => 126,  240 => 123,  236 => 122,  230 => 119,  226 => 118,  222 => 117,  219 => 116,  215 => 115,  209 => 113,  207 => 112,  202 => 110,  198 => 108,  193 => 105,  188 => 102,  186 => 101,  180 => 97,  177 => 96,  173 => 94,  169 => 92,  166 => 91,  162 => 89,  158 => 87,  155 => 86,  151 => 84,  147 => 82,  144 => 81,  142 => 80,  134 => 74,  130 => 72,  126 => 71,  121 => 69,  118 => 68,  114 => 62,  108 => 58,  102 => 54,  100 => 53,  95 => 51,  89 => 48,  86 => 47,  82 => 45,  78 => 44,  74 => 43,  70 => 42,  67 => 41,  57 => 39,  51 => 37,  49 => 36,  46 => 35,  44 => 32,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/html.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 36, "for" => 115);
        static $filters = array("clean_class" => 29, "escape" => 37, "safe_join" => 43, "t" => 69, "render" => 81);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'safe_join', 't', 'render'],
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
