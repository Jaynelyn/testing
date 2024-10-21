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

/* modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig */
class __TwigTemplate_ed36ff7610bdf2b46a52ae8e1428ab5c extends Template
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
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["add"] ?? null), 9, $this->source), "html", null, true);
        echo "
<div ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 10, $this->source), "html", null, true);
        echo ">
  <div ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dialog_attributes"] ?? null), 11, $this->source), "html", null, true);
        echo ">
    <div class=\"dialog-header clearfix\">
      <div class=\"filter js-hide\" role=\"search\">
        <input type=\"search\" class=\"item-filter text-full form-text\" placeholder=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_placeholder"] ?? null), 14, $this->source), "html", null, true);
        echo "\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_placeholder"] ?? null), 14, $this->source), "html", null, true);
        echo "\" />
        <div class=\"search-description\">
          <label><input type=\"checkbox\" name=\"search_description\" value=\"1\" />";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Include description when searching"));
        echo "</label>
        </div>
      </div>
      ";
        // line 19
        if ((((array_key_exists("add_mode", $context)) ? (_twig_default_filter(($context["add_mode"] ?? null), "modal")) : ("modal")) != "off_canvas")) {
            // line 20
            echo "        <button type=\"button\" class=\"display-toggle style-list\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Display Paragraphs as list"));
            echo "\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Display Paragraphs as list"));
            echo "\">list</button>
        <button type=\"button\" class=\"display-toggle style-tiles\" title=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Display Paragraphs as tiles"));
            echo "\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Display Paragraphs as tiles"));
            echo "\">tiles</button>
      ";
        }
        // line 23
        echo "    </div>
    <div class=\"paragraphs-ee-button-wrapper\">
      <div class=\"paragraphs-ee-buttons\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["category_id"] => $context["group"]) {
            // line 27
            echo "          <div class=\"button-group clearfix\" role=\"group\"";
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["categories"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["category_id"]] ?? null) : null), "id", [], "any", false, false, true, 27)) {
                echo " aria-labelledby=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["categories"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["category_id"]] ?? null) : null), "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "--label\" aria-describedby=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["categories"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["category_id"]] ?? null) : null), "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "--description\"";
            }
            echo ">
            <div";
            // line 28
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["categories"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["category_id"]] ?? null) : null), "id", [], "any", false, false, true, 28)) {
                echo " id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["categories"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["category_id"]] ?? null) : null), "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "--label\"";
            }
            echo " class=\"category-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["categories"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["category_id"]] ?? null) : null), "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</div>
            ";
            // line 29
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["categories"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["category_id"]] ?? null) : null), "description", [], "any", false, false, true, 29))) {
                // line 30
                echo "              <summary";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["categories"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["category_id"]] ?? null) : null), "id", [], "any", false, false, true, 30)) {
                    echo " id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["categories"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["category_id"]] ?? null) : null), "id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "--description\"";
                }
                echo " class=\"summary\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["categories"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["category_id"]] ?? null) : null), "description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "</summary>
            ";
            }
            // line 32
            echo "            <ul class=\"paragraphs-add-dialog-list\">
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 34
                echo "                <li class=\"paragraphs-add-dialog-row\">
                  ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["button"], 35, $this->source), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </ul>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category_id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["add", "wrapper_attributes", "dialog_attributes", "filter_placeholder", "add_mode", "groups", "categories"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig";
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
        return array (  153 => 41,  145 => 38,  136 => 35,  133 => 34,  129 => 33,  126 => 32,  114 => 30,  112 => 29,  102 => 28,  91 => 27,  87 => 26,  82 => 23,  75 => 21,  68 => 20,  66 => 19,  60 => 16,  53 => 14,  47 => 11,  43 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\modules\\contrib\\paragraphs_ee\\templates\\paragraphs-add-dialog--categorized.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 26);
        static $filters = array("escape" => 9, "t" => 16, "default" => 19, "length" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'default', 'length'],
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
