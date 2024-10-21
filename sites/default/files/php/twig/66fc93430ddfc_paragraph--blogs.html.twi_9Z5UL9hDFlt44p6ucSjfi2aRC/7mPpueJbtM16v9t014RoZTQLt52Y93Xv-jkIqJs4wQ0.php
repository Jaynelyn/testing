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

/* themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig */
class __TwigTemplate_7cd3d2cb189c7980f41a34acc3f95f33 extends Template
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
        if (twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), "contents", [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#display_id"] ?? null) : null), "block_1")) {
            // line 2
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs1.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 2)->display($context);
        } elseif (twig_in_filter((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 3), 0, [], "any", false, false, true, 3), "contents", [], "any", false, false, true, 3)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#display_id"] ?? null) : null), "block_2")) {
            // line 4
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs2.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 4)->display($context);
        } elseif (twig_in_filter((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), "contents", [], "any", false, false, true, 5)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#display_id"] ?? null) : null), "block_3")) {
            // line 6
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs3.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 6)->display($context);
        } elseif (twig_in_filter((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), "contents", [], "any", false, false, true, 7)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#display_id"] ?? null) : null), "block_4")) {
            // line 8
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs4.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 8)->display($context);
        } elseif (twig_in_filter((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), "contents", [], "any", false, false, true, 9)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#display_id"] ?? null) : null), "block_5")) {
            // line 10
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs5.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 10)->display($context);
        } elseif (twig_in_filter((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), "contents", [], "any", false, false, true, 11)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#display_id"] ?? null) : null), "block_6")) {
            // line 12
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs6.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 12)->display($context);
        } elseif (twig_in_filter((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "contents", [], "any", false, false, true, 13)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#display_id"] ?? null) : null), "block_8")) {
            // line 14
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs8.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 14)->display($context);
        } elseif (twig_in_filter((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["content"] ?? null), "field_blogs", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15), "contents", [], "any", false, false, true, 15)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#display_id"] ?? null) : null), "block_9")) {
            // line 16
            echo "    ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs9.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 16)->display($context);
        } else {
            // line 18
            echo "       ";
            $this->loadTemplate("@agency_pro/paragraphs/blogs/blogs-style-3.html.twig", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", 18)->display($context);
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig";
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
        return array (  80 => 18,  76 => 16,  74 => 15,  71 => 14,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/paragraphs/blogs/paragraph--blogs.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\paragraphs\\blogs\\paragraph--blogs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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