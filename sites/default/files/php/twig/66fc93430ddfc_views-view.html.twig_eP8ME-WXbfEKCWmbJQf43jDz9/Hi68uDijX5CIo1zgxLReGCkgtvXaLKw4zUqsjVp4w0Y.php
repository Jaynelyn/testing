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

/* themes/custom/agency_pro/templates/views/views-view.html.twig */
class __TwigTemplate_2bffaa4a35fb0d21f5dffba45b6e2b04 extends Template
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
        // line 34
        $context["classes"] = [(($this->sandbox->ensureToStringAllowed(        // line 35
($context["id"] ?? null), 35, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(($context["display_id"] ?? null), 35, $this->source)), ((        // line 36
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 36, $this->source))) : (""))];
        // line 39
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
  ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 40, $this->source), "html", null, true);
        echo "
  ";
        // line 41
        if (($context["title"] ?? null)) {
            // line 42
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 42, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 44
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        echo "
  ";
        // line 45
        if (($context["header"] ?? null)) {
            // line 46
            echo "    <div class=\"view-header\">
      ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 47, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 50
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 51
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 52, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if (($context["rows"] ?? null)) {
            // line 57
            echo "    <div class=\"view-content\">
      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 58, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 60
($context["empty"] ?? null)) {
            // line 61
            echo "    <div class=\"view-empty\">
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 62, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["pager"] ?? null)) {
            // line 67
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 67, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 69
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 70
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 71, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 74
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 75
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 75, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 77
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 78
            echo "    <div class=\"view-footer\">
      ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 79, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 82
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 83
            echo "    <div class=\"feed-icons\">
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 84, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 87
        echo "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/views/views-view.html.twig";
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
        return array (  168 => 87,  162 => 84,  159 => 83,  156 => 82,  150 => 79,  147 => 78,  144 => 77,  138 => 75,  135 => 74,  129 => 71,  126 => 70,  123 => 69,  117 => 67,  115 => 66,  112 => 65,  106 => 62,  103 => 61,  101 => 60,  96 => 58,  93 => 57,  91 => 56,  88 => 55,  82 => 52,  79 => 51,  76 => 50,  70 => 47,  67 => 46,  65 => 45,  60 => 44,  54 => 42,  52 => 41,  48 => 40,  43 => 39,  41 => 36,  40 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/views/views-view.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\views\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 41);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
