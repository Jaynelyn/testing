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

/* @agency_pro/paragraphs/home-slider/slider_variant1.html.twig */
class __TwigTemplate_3687d680fd2805dc80a067d023e05b7d extends Template
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
        echo "<section class=\"home-banner-1\" data-aos=\"fade-up\">
    <div class=\"container dt-section\">
        ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_slider", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
        <div class=\"home-banner-overlay\">
            <div class=\"arrows\">
                <a class=\"prev\" title=\"Next\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"19.6\" viewBox=\"0 0 35 19.6\">
                        <path id=\"Icon_ionic-ios-arrow-forward\" data-name=\"Icon ionic-ios-arrow-forward\" d=\"M24.938,23.69,11.966,10.456a2.528,2.528,0,0,1,0-3.533,2.434,2.434,0,0,1,3.47,0l14.7,15a2.535,2.535,0,0,1,.071,3.449l-14.758,15.1a2.428,2.428,0,0,1-3.47,0,2.528,2.528,0,0,1,0-3.533Z\" transform=\"translate(41.195 -11.247) rotate(90)\" fill=\"#111\"/>
                    </svg>
                </a>
                <a class=\"next\" title=\"Next\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"19.6\" viewBox=\"0 0 35 19.6\">
                        <path id=\"Icon_ionic-ios-arrow-forward\" data-name=\"Icon ionic-ios-arrow-forward\" d=\"M24.938,23.69,11.966,10.456a2.528,2.528,0,0,1,0-3.533,2.434,2.434,0,0,1,3.47,0l14.7,15a2.535,2.535,0,0,1,.071,3.449l-14.758,15.1a2.428,2.428,0,0,1-3.47,0,2.528,2.528,0,0,1,0-3.533Z\" transform=\"translate(41.195 -11.247) rotate(90)\" fill=\"#111\"/>
                    </svg>
                </a>
            </div>
            <div class=\"social-icons-wrapper\">
                ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_links", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
    <div class=\"line-style\">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@agency_pro/paragraphs/home-slider/slider_variant1.html.twig";
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
        return array (  61 => 18,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@agency_pro/paragraphs/home-slider/slider_variant1.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\paragraphs\\home-slider\\slider_variant1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
