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

/* themes/custom/agency_pro/templates/user-login-form.html.twig */
class __TwigTemplate_1c4b5c15b37446bcc064af4c922b18bc extends Template
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
        $context["base_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 2
        echo "<!-- Login Page banner -->
";
        // line 3
        if (($context["login_banner_title"] ?? null)) {
            // line 4
            echo "    <section class=\"page-banner\" style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_banner_img"] ?? null), 4, $this->source), "html", null, true);
            echo ");\">
        <div class=\"container dt-section\">
            <div class=\"heading\">
                <h1>";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_banner_title"] ?? null), 7, $this->source), "html", null, true);
            echo "</h1>
            </div>
        </div>
    </section>
    <nav class=\"breadcrumb-section\" aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"/\">HOME</a></li>
            <li class=\"icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"39.932\" height=\"37.846\" viewBox=\"0 0 39.932 37.846\">
                    <g class=\"Group_38512\" data-name=\"Group 38512\" transform=\"translate(39.932) rotate(90)\">
                        <path id=\"Icon_ionic-ios-arrow-back\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 39.932) rotate(-90)\" fill=\"#fff\"/>
                        <path id=\"Icon_ionic-ios-arrow-back-2\" data-name=\"Icon ionic-ios-arrow-back\" d=\"M16.156,18.918.849,4.609A2.572,2.572,0,0,1,.849.79a3.048,3.048,0,0,1,4.095,0L22.286,17a2.575,2.575,0,0,1,.084,3.729L4.956,37.057a3,3,0,0,1-2.047.789,3,3,0,0,1-2.047-.789,2.572,2.572,0,0,1,0-3.819Z\" transform=\"translate(0 23.128) rotate(-90)\" fill=\"#fff\"/>
                    </g>
                </svg>
            </li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_banner_title"] ?? null), 22, $this->source), "html", null, true);
            echo "</li>
        </ol>
    </nav>
";
        }
        // line 26
        echo "<!-- Login Page -->
<section class=\"login dt-section\" data-aos=\"zoom-in-down\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8 col-md-10 col-12\">
                <div class=\"item\">
                    <div class=\"icon\">
                        <svg id=\"noun_Login_1511380\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32.092\" height=\"36.677\" viewBox=\"0 0 32.092 36.677\">
                            <path id=\"Path_37989\" data-name=\"Path 37989\" d=\"M40.839,21.5H39.255V17.47A12.327,12.327,0,0,0,27.131,5,12.369,12.369,0,0,0,14.968,17.511a.806.806,0,0,0,.792.815h2.734a.806.806,0,0,0,.792-.815,7.848,7.848,0,1,1,15.69,0v4.034H13.383a.806.806,0,0,0-.792.815v18.5a.806.806,0,0,0,.792.815H40.8a.806.806,0,0,0,.792-.815V22.32A.774.774,0,0,0,40.839,21.5ZM27.131,7.812a9.581,9.581,0,0,0-9.39,8.884H16.552A10.723,10.723,0,0,1,27.131,6.63,10.757,10.757,0,0,1,37.709,17.511v4.034H36.521V17.511A9.583,9.583,0,0,0,27.131,7.812ZM40.047,40.047H14.175V23.135H40.047ZM9.5,17.511a.806.806,0,0,1,.792-.815h1.585a.815.815,0,0,1,0,1.63H10.292A.806.806,0,0,1,9.5,17.511ZM11.124,13.8a.841.841,0,0,1,.04-1.141.786.786,0,0,1,1.109.041l1.07,1.182a.841.841,0,0,1-.04,1.141.918.918,0,0,1-.515.2.861.861,0,0,1-.594-.245ZM27.131,31.2A3.628,3.628,0,1,0,23.6,27.577,3.586,3.586,0,0,0,27.131,31.2Zm0-5.665a2,2,0,1,1-1.981,2.038A2.016,2.016,0,0,1,27.131,25.539ZM21.465,39.272H32.757a1.038,1.038,0,0,0,1.03-1.06v-.367a5.816,5.816,0,0,0-5.705-5.868H26.14a5.816,5.816,0,0,0-5.705,5.868v.367A1.064,1.064,0,0,0,21.465,39.272Zm4.675-5.665h1.941a4.186,4.186,0,0,1,4.12,4.034H22.02A4.186,4.186,0,0,1,26.14,33.608ZM12.511,20.527a.836.836,0,0,1-.436,1.06l-1.466.611a.657.657,0,0,1-.277.041.783.783,0,0,1-.713-.489.836.836,0,0,1,.436-1.06l1.466-.611A.767.767,0,0,1,12.511,20.527Z\" transform=\"translate(-9.5 -5)\" fill=\"#fff\"/>
                        </svg>
                    </div>
                    <div class=\"login-form\">                            
                        ";
        // line 39
        echo "                            <h2>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_title"] ?? null), 39, $this->source), "html", null, true);
        echo "</h2>
                            <div class=\"form-group\">
                                ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pass", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
                            </div>
                            <div class=\"login-forget\">
                                <a href=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 47, $this->source), "html", null, true);
        echo "user/password\" class=\"login-link\" title=\"Forgot Password\">Forgot Password?</a>
                            </div>
                            <div class=\"login-btn\">
                                ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
                                <p>Don't have an account? <a href=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 51, $this->source), "html", null, true);
        echo "user/register\" class=\"login-link\" title=\"Sign Up\">Sign up</a></p>
                            </div>
                        ";
        // line 54
        echo "                    </div>
                    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_build_id", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
                    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_id", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>    
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["login_banner_title", "login_banner_img", "login_title", "form"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/agency_pro/templates/user-login-form.html.twig";
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
        return array (  132 => 56,  128 => 55,  125 => 54,  120 => 51,  116 => 50,  110 => 47,  104 => 44,  98 => 41,  92 => 39,  78 => 26,  71 => 22,  53 => 7,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/agency_pro/templates/user-login-form.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\themes\\custom\\agency_pro\\templates\\user-login-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array("escape" => 4);
        static $functions = array("url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
