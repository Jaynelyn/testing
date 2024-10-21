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

/* themes/custom/agency_pro/templates/menu/breadcrumb.html.twig */
class __TwigTemplate_f282edd3bf60e31d0b56139e0663bc4f extends Template
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
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("agency_pro/breadcrumb"), "html", null, true);
        echo "

";
        // line 29
        if (($context["breadcrumb"] ?? null)) {
            // line 30
            echo "  <nav class=\"breadcrumb-section\" aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 33)) {
                    // line 34
                    echo "          <li class=\"breadcrumb-item\">
            <a href=\"";
                    // line 35
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "</a>
          </li>
        ";
                } else {
                    // line 38
                    echo "          <li class=\"icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"39.932\" height=\"37.846\" viewBox=\"0 0 39.932 37.846\">
              <g class=\"Group_38512\" data-name=\"Group 38512\" transform=\"translate(39.932) rotate(90)\">
                <path id=\"Icon_ionic-ios-arrow-back\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 39.932) rotate(-90)\" fill=\"var(--primary-color)\"></path>
                <path id=\"Icon_ionic-ios-arrow-back-2\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 23.128) rotate(-90)\" fill=\"var(--primary-color)\"></path>
              </g>
            </svg>
          </li>
          <li class=\"breadcrumb-item active\">
            ";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo "
          </li>
        ";
                }
                // line 50
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    </ol>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/menu/breadcrumb.html.twig";
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
        return array (  91 => 51,  85 => 50,  79 => 47,  68 => 38,  60 => 35,  57 => 34,  54 => 33,  50 => 32,  46 => 30,  44 => 29,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/menu/breadcrumb.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\menu\\breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29, "for" => 32);
        static $filters = array("escape" => 10);
        static $functions = array("attach_library" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['attach_library']
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
