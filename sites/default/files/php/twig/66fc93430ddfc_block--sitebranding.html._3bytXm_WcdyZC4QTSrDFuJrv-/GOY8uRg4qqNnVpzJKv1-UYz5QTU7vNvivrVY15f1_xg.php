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

/* themes/custom/agency_pro/templates/block/block--sitebranding.html.twig */
class __TwigTemplate_8b4bfbc57433f150b873ec7a8e110456 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        $context["front_page"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 46
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["site-branding"], "method", false, false, true, 46);
        // line 30
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/agency_pro/templates/block/block--sitebranding.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 49
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 49, $this->source), "html", null, true);
            echo "\" title=\"Home\" rel=\"home\" class=\"navbar-brand\">
      <img src=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 50, $this->source), "html", null, true);
            echo "\" alt=\"Logo\" class=\"img-fluid\">
    </a>
  ";
        } else {
            // line 53
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 53, $this->source), "html", null, true);
            echo "\" title=\"Home\" class=\"navbar-brand logo\">
      <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 369.3 67.73\"><defs><style>.cls-1{fill:#ee8d59;}.cls-2{fill:#fff;}.cls-3{fill:#1d1d1b;}</style></defs><title>Agency_Pro</title><rect class=\"cls-1\" width=\"67.73\" height=\"67.73\"></rect><polygon class=\"cls-2\" points=\"30.49 14.18 12.18 53.56 19.04 53.56 37.36 14.18 30.49 14.18\"></polygon><polygon class=\"cls-2\" points=\"44.81 30.45 44.56 30.45 41.25 37.56 48.69 53.56 55.56 53.56 44.81 30.45\"></polygon><polygon class=\"cls-2\" points=\"44.54 30.45 36.82 30.45 36.82 37.58 41.24 37.58 41.23 37.56 44.54 30.45\"></polygon><path class=\"cls-3\" d=\"M160,229.63l-13.32,38.55h8.74l2.86-8.79h13.93l2.85,8.79h8.74l-13.3-38.55Zm.35,23.4,4.75-14.59h.3L170.11,253Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M206.11,244.13h-.3a11.58,11.58,0,0,0-1.56-2.39,8.21,8.21,0,0,0-2.64-2,9.16,9.16,0,0,0-4.07-.82,11,11,0,0,0-5.85,1.64,11.41,11.41,0,0,0-4.26,4.93,18.68,18.68,0,0,0-1.61,8.21,17.57,17.57,0,0,0,1.58,7.93,10.51,10.51,0,0,0,4.23,4.65,11.69,11.69,0,0,0,5.93,1.52,10.42,10.42,0,0,0,3.95-.68,7.79,7.79,0,0,0,2.71-1.75,7.54,7.54,0,0,0,1.59-2.28h.34v5.29c0,2-.57,3.4-1.71,4.25a7,7,0,0,1-4.32,1.27,8.35,8.35,0,0,1-3-.46,5.25,5.25,0,0,1-2-1.22,4.92,4.92,0,0,1-1.07-1.61l-7.42,1a8.94,8.94,0,0,0,2.13,4.11,11.23,11.23,0,0,0,4.41,2.89,18.73,18.73,0,0,0,6.68,1.06,20.13,20.13,0,0,0,7.34-1.25,11,11,0,0,0,5-3.74,10.24,10.24,0,0,0,1.8-6.17v-29.2h-8ZM205.46,258a6.25,6.25,0,0,1-2.07,2.79,5.54,5.54,0,0,1-3.29,1,5.43,5.43,0,0,1-3.32-1,6.14,6.14,0,0,1-2.06-2.81,11.93,11.93,0,0,1-.7-4.32,12.65,12.65,0,0,1,.69-4.35,6.53,6.53,0,0,1,2.06-2.94,5.21,5.21,0,0,1,3.33-1.07,5.31,5.31,0,0,1,3.3,1,6.49,6.49,0,0,1,2.07,2.91,12.51,12.51,0,0,1,.71,4.41A11.81,11.81,0,0,1,205.46,258Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M243,242.54a12,12,0,0,0-4.33-2.73,15.28,15.28,0,0,0-5.34-.92,14.22,14.22,0,0,0-7.41,1.88A12.87,12.87,0,0,0,221,246a18.77,18.77,0,0,0,0,15.74,12.26,12.26,0,0,0,5,5.16,15.32,15.32,0,0,0,7.67,1.82,16.94,16.94,0,0,0,6.32-1.1,11.66,11.66,0,0,0,4.48-3.09,10.15,10.15,0,0,0,2.31-4.66l-7.42-.49a5,5,0,0,1-1.21,1.85,5.11,5.11,0,0,1-1.9,1.13,7.63,7.63,0,0,1-2.45.37,6.9,6.9,0,0,1-3.48-.84,5.74,5.74,0,0,1-2.27-2.41,8,8,0,0,1-.8-3.71v0h19.7v-2.2a18.33,18.33,0,0,0-1-6.45A12.46,12.46,0,0,0,243,242.54Zm-15.75,8.27a6.14,6.14,0,0,1,.79-2.85,5.89,5.89,0,0,1,2.19-2.24,6.17,6.17,0,0,1,3.23-.84,6,6,0,0,1,3.08.76,5.45,5.45,0,0,1,2.08,2.1,6.15,6.15,0,0,1,.75,3.07Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M274.11,240.21a10.13,10.13,0,0,0-5.25-1.32,9.84,9.84,0,0,0-5.48,1.48,8.12,8.12,0,0,0-3.22,4h-.34v-5.1h-7.65v28.91h8V251.47a7,7,0,0,1,.7-3.19,4.83,4.83,0,0,1,1.92-2,5.77,5.77,0,0,1,2.86-.69,4.91,4.91,0,0,1,3.78,1.49,5.84,5.84,0,0,1,1.36,4.15v17h8V249.77a12.6,12.6,0,0,0-1.24-5.8A9,9,0,0,0,274.11,240.21Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M295.06,246.15a5.41,5.41,0,0,1,3.25-1,4.93,4.93,0,0,1,3.57,1.33,6,6,0,0,1,1.69,3.49h7.57a11.24,11.24,0,0,0-1.83-5.83,11,11,0,0,0-4.5-3.86,15,15,0,0,0-6.63-1.38,14.57,14.57,0,0,0-7.57,1.89A12.85,12.85,0,0,0,285.7,246a18.5,18.5,0,0,0,0,15.56,12.55,12.55,0,0,0,4.89,5.26,16.47,16.47,0,0,0,14.33.48,10.92,10.92,0,0,0,4.43-3.93,11.92,11.92,0,0,0,1.8-5.82h-7.57a6.3,6.3,0,0,1-.95,2.6,4.89,4.89,0,0,1-1.83,1.65,5.68,5.68,0,0,1-5.73-.45,6.47,6.47,0,0,1-2.16-3,12.82,12.82,0,0,1-.76-4.7,12.37,12.37,0,0,1,.77-4.65A6.48,6.48,0,0,1,295.06,246.15Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M328.73,260.5h-.3l-6-21.23H314L324.38,269l-.47,1.23a4,4,0,0,1-1.37,1.92,3.27,3.27,0,0,1-2,.52,9.7,9.7,0,0,1-2.55-.47l-1.81,6a10.29,10.29,0,0,0,2.2.59,16,16,0,0,0,2.85.24,12.4,12.4,0,0,0,5.09-.95,9.31,9.31,0,0,0,3.49-2.69,13.85,13.85,0,0,0,2.19-4.08l11.25-32h-8.5Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M375.51,231.3a15.53,15.53,0,0,0-7.47-1.67H352.82v38.55H361v-12.5h6.85a16.23,16.23,0,0,0,7.58-1.63,11.39,11.39,0,0,0,4.79-4.58,13.48,13.48,0,0,0,1.66-6.77,13.73,13.73,0,0,0-1.63-6.79A11.4,11.4,0,0,0,375.51,231.3Zm-2.81,14.76a5.31,5.31,0,0,1-2.3,2.27,8.16,8.16,0,0,1-3.89.82H361V236.29h5.49a8.51,8.51,0,0,1,3.92.8,5.32,5.32,0,0,1,2.31,2.24,7.1,7.1,0,0,1,.76,3.37A7.17,7.17,0,0,1,372.7,246.06Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M402.05,238.86a7,7,0,0,0-4.29,1.38,7.49,7.49,0,0,0-2.66,4.07h-.3v-5H387v28.91h8V251.83a6,6,0,0,1,.81-3.13,5.69,5.69,0,0,1,2.18-2.12,6.4,6.4,0,0,1,3.16-.76A13.53,13.53,0,0,1,403,246a10.83,10.83,0,0,1,1.56.3v-7.11a8.52,8.52,0,0,0-1.22-.21A12.09,12.09,0,0,0,402.05,238.86Z\" transform=\"translate(-65.35 -216.13)\"></path><path class=\"cls-3\" d=\"M432.92,246a12.63,12.63,0,0,0-4.93-5.23,16.22,16.22,0,0,0-15.16,0,12.55,12.55,0,0,0-4.92,5.23,18.54,18.54,0,0,0,0,15.64,12.63,12.63,0,0,0,4.92,5.24,16.3,16.3,0,0,0,15.16,0,12.72,12.72,0,0,0,4.93-5.24,18.54,18.54,0,0,0,0-15.64Zm-7.11,12.28a7,7,0,0,1-2,3.12,5,5,0,0,1-3.33,1.14,5.1,5.1,0,0,1-3.38-1.14,6.91,6.91,0,0,1-2.05-3.12,15,15,0,0,1,0-9,7,7,0,0,1,2.05-3.12,5.06,5.06,0,0,1,3.38-1.15,4.91,4.91,0,0,1,3.33,1.15,7,7,0,0,1,2,3.12,15,15,0,0,1,0,9Z\" transform=\"translate(-65.35 -216.13)\"></path></svg>
    </a>
  ";
        }
        // line 57
        echo "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 58
            echo "    <div class=\"site-branding__text\">
      ";
            // line 59
            if (($context["site_name"] ?? null)) {
                // line 60
                echo "        <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 60, $this->source), "html", null, true);
                echo "</h2>
        <div class=\"site-branding__name\">
          <a class=\"navbar-brand\" href=\"";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 62, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\">
            <h2>";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 63, $this->source), "html", null, true);
                echo "</h2>
          </a>
        </div>
      ";
            }
            // line 67
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 68
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 68, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 70
            echo "    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/block/block--sitebranding.html.twig";
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
        return array (  116 => 70,  110 => 68,  107 => 67,  100 => 63,  94 => 62,  88 => 60,  86 => 59,  83 => 58,  80 => 57,  72 => 53,  66 => 50,  61 => 49,  58 => 48,  54 => 47,  48 => 30,  46 => 46,  44 => 45,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/block/block--sitebranding.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\block\\block--sitebranding.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 45, "if" => 48);
        static $filters = array("escape" => 49, "t" => 62);
        static $functions = array("url" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
