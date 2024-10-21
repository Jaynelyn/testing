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

/* modules/pdf_reader/templates/pdf-reader-js.html.twig */
class __TwigTemplate_f3d8da15676efe8b68bb9651ea5a125e extends Template
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
        if (( !twig_test_empty(($context["height"] ?? null)) &&  !twig_test_empty(($context["width"] ?? null)))) {
            // line 2
            echo "  ";
            $context["container_style"] = (((("width: " . $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 2, $this->source)) . "px; height:") . $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 2, $this->source)) . "px;");
        } elseif ( !twig_test_empty(        // line 3
($context["width"] ?? null))) {
            // line 4
            echo "  ";
            $context["container_style"] = (("width: " . $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 4, $this->source)) . "px;");
        } elseif ( !twig_test_empty(        // line 5
($context["height"] ?? null))) {
            // line 6
            echo "  ";
            $context["container_style"] = (("height: " . $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 6, $this->source)) . "px;");
        }
        // line 8
        echo "
<div class = 'pdf-reader'>
    ";
        // line 10
        if ((($context["download_link"] ?? null) && ($context["top"] ?? null))) {
            // line 11
            echo "        <div class =\"download-pdf link-pdf\">
            <a href = \"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["download_link"] ?? null), 12, $this->source), "html", null, true);
            echo "\" download>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click here to download"));
            echo "</a>
        </div>
    ";
        }
        // line 15
        echo "  <div class = \"pdf-reader-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["service"] ?? null), 15, $this->source), "html", null, true);
        echo "\">
<div id=\"outerContgainer\">

  <div id=\"sidebarContainer\">
    <div id=\"toolbarSidebar\" class=\"splitToolbarButton toggled\">
      <button id=\"viewThumbnail\" class=\"toolbarButton group toggled\" title=\"Show Thumbnails\" onclick=\"PDFView.switchSidebarView('thumbs')\" tabindex=\"1\" data-l10n-id=\"thumbs\">
        <span data-l10n-id=\"thumbs_label\">";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Thumbnails"));
        echo "</span>
      </button>
      <button id=\"viewOutline\" class=\"toolbarButton group\" title=\"Show Document Outline\" onclick=\"PDFView.switchSidebarView('outline')\" tabindex=\"2\" data-l10n-id=\"outline\">
        <span data-l10n-id=\"outline_label\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Document Outline"));
        echo "</span>
      </button>
      <button id=\"viewSearch\" class=\"toolbarButton group hidden\" title=\"Search Document\" onclick=\"PDFView.switchSidebarView('search')\" tabindex=\"3\" data-l10n-id=\"search_panel\">
        <span data-l10n-id=\"search_panel_label\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search Document"));
        echo "</span>
      </button>
    </div>
    <div id=\"sidebarContent\">
      <div id=\"thumbnailView\">
      </div>
      <div id=\"outlineView\" class=\"hidden\">
      </div>
      <div id=\"searchView\" class=\"hidden\">
        <div id=\"searchToolbar\">
          <input id=\"searchTermsInput\" class=\"toolbarField\" onkeydown='if (event.keyCode == 13) PDFView.search()'>
          <button id=\"searchButton\" class=\"textButton toolbarButton\" onclick='PDFView.search()' data-l10n-id=\"search\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Find"));
        echo "</button>
        </div>
        <div id=\"searchResults\"></div>
      </div>
    </div>
  </div>  <!-- sidebarContainer -->

  <div id=\"mainContainer\">
    <div class=\"toolbar\">
      <div id=\"toolbarContainer\">

        <div id=\"toolbarViewer\">
          <div id=\"toolbarViewerLeft\">
            <button id=\"sidebarToggle\" class=\"toolbarButton\" title=\"Toggle Sidebar\" tabindex=\"4\" data-l10n-id=\"toggle_slider\">
              <span data-l10n-id=\"toggle_slider_label\">";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle Sidebar"));
        echo "</span>
            </button>
            <div class=\"toolbarButtonSpacer\"></div>
            <div class=\"splitToolbarButton\">
              <button class=\"toolbarButton pageUp\" title=\"Previous Page\" onclick=\"PDFView.page--\" id=\"previous\" tabindex=\"5\" data-l10n-id=\"previous\">
                <span data-l10n-id=\"previous_label\">";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
        echo "</span>
              </button>
              <div class=\"splitToolbarButtonSeparator\"></div>
              <button class=\"toolbarButton pageDown\" title=\"Next Page\" onclick=\"PDFView.page++\" id=\"next\" tabindex=\"6\" data-l10n-id=\"next\">
                <span data-l10n-id=\"next_label\">";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
        echo "</span>
              </button>
            </div>
            <label id=\"pageNumberLabel\" class=\"toolbarLabel\" for=\"pageNumber\" data-l10n-id=\"page_label\">";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
        echo ": </label>
            <input type=\"number\" id=\"pageNumber\" class=\"toolbarField pageNumber\" onchange=\"PDFView.page = this.value;\" value=\"1\" size=\"4\" min=\"1\" tabindex=\"7\">
            </input>
            <span id=\"numPages\" class=\"toolbarLabel\"></span>
          </div>
          <div id=\"toolbarViewerRight\">

            <button id=\"fullscreen\" class=\"toolbarButton fullscreen\" title=\"Fullscreen\" tabindex=\"11\" data-l10n-id=\"fullscreen\" onclick=\"PDFView.fullscreen();\">
              <span data-l10n-id=\"fullscreen_label\">";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fullscreen"));
        echo "</span>
            </button>

            <button id=\"print\" class=\"toolbarButton print\" title=\"Print\" tabindex=\"13\" data-l10n-id=\"print\" onclick=\"window.print()\">
              <span data-l10n-id=\"print_label\">";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Print"));
        echo "</span>
            </button>

            <button id=\"download\" class=\"toolbarButton download\" title=\"Download\" onclick=\"PDFView.download();\" tabindex=\"14\" data-l10n-id=\"download\">
              <span data-l10n-id=\"download_label\">";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Download"));
        echo "</span>
            </button>
            <!-- <div class=\"toolbarButtonSpacer\"></div> -->
            <a href=\"#\" id=\"viewBookmark\" class=\"toolbarButton bookmark\" title=\"Current view (copy or open in new window)\" tabindex=\"15\" data-l10n-id=\"bookmark\"><span data-l10n-id=\"bookmark_label\">";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current View"));
        echo "</span></a>
          </div>
          <div class=\"outerCenter\">
            <div class=\"innerCenter\" id=\"toolbarViewerMiddle\">
              <div class=\"splitToolbarButton\">
                <button class=\"toolbarButton zoomOut\" title=\"Zoom Out\" onclick=\"PDFView.zoomOut();\" tabindex=\"8\" data-l10n-id=\"zoom_out\">
                  <span data-l10n-id=\"zoom_out_label\">";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Zoom Out"));
        echo "</span>
                </button>
                <div class=\"splitToolbarButtonSeparator\"></div>
                <button class=\"toolbarButton zoomIn\" title=\"Zoom In\" onclick=\"PDFView.zoomIn();\" tabindex=\"9\" data-l10n-id=\"zoom_in\">
                  <span data-l10n-id=\"zoom_in_label\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Zoom In"));
        echo "</span>
                </button>
              </div>
                  <span id=\"scaleSelectContainer\" class=\"dropdownToolbarButton\">
                     <select id=\"scaleSelect\" onchange=\"PDFView.parseScale(this.value);\" title=\"Zoom\" oncontextmenu=\"return false;\" tabindex=\"10\" data-l10n-id=\"zoom\">
                       <option id=\"pageAutoOption\" value=\"auto\" selected=\"selected\" data-l10n-id=\"page_scale_auto\">";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Automatic Zoom"));
        echo "</option>
                       <option id=\"pageActualOption\" value=\"page-actual\" data-l10n-id=\"page_scale_actual\">";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Actual Size"));
        echo "</option>
                       <option id=\"pageFitOption\" value=\"page-fit\" data-l10n-id=\"page_scale_fit\">";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fit Page"));
        echo "</option>
                       <option id=\"pageWidthOption\" value=\"page-width\" data-l10n-id=\"page_scale_width\">";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Full Width"));
        echo "</option>
                       <option id=\"customScaleOption\" value=\"custom\"></option>
                       <option value=\"0.5\">50%</option>
                       <option value=\"0.75\">75%</option>
                       <option value=\"1\">100%</option>
                       <option value=\"1.25\">125%</option>
                       <option value=\"1.5\">150%</option>
                       <option value=\"2\">200%</option>
                     </select>
                  </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id=\"viewerContainer\" ";
        // line 117
        if ( !twig_test_empty(($context["container_style"] ?? null))) {
            echo " style=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_style"] ?? null), 117, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
      <div id=\"viewer\"></div>
    </div>

    <div id=\"loadingBox\">
      <div id=\"loading\"></div>
      <div id=\"loadingBar\"><div class=\"progress\"></div></div>
    </div>

    <div id=\"errorWrapper\" hidden='true'>
      <div id=\"errorMessageLeft\">
        <span id=\"errorMessage\"></span>
        <button id=\"errorShowMore\" onclick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_more_info\">
          ";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("More Information"));
        echo "
        </button>
        <button id=\"errorShowLess\" onclick=\"\" oncontextmenu=\"return false;\" data-l10n-id=\"error_less_info\" hidden='true'>
          ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Less Information"));
        echo "
        </button>
      </div>
      <div id=\"errorMessageRight\">
        <button id=\"errorClose\" oncontextmenu=\"return false;\" data-l10n-id=\"error_close\">
          ";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
        echo "
        </button>
      </div>
      <div class=\"clearBoth\"></div>
      <textarea id=\"errorMoreInfo\" hidden='true' readonly=\"readonly\"></textarea>
    </div>
  </div> <!-- mainContainer -->

</div> <!-- outerContainer -->
<div id=\"printContainer\"></div>
    </div>
  ";
        // line 149
        if ((($context["download_link"] ?? null) && ($context["bottom"] ?? null))) {
            // line 150
            echo "<div class =\"download-pdf link-pdf\">
  <a href = \"";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["download_link"] ?? null), 151, $this->source), "html", null, true);
            echo "\" download>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click here to download"));
            echo "</a>
</div>
  ";
        }
        // line 154
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["height", "width", "download_link", "top", "service", "bottom"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/pdf_reader/templates/pdf-reader-js.html.twig";
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
        return array (  293 => 154,  285 => 151,  282 => 150,  280 => 149,  266 => 138,  258 => 133,  252 => 130,  232 => 117,  213 => 101,  209 => 100,  205 => 99,  201 => 98,  193 => 93,  186 => 89,  177 => 83,  171 => 80,  164 => 76,  157 => 72,  146 => 64,  140 => 61,  133 => 57,  125 => 52,  108 => 38,  94 => 27,  88 => 24,  82 => 21,  72 => 15,  64 => 12,  61 => 11,  59 => 10,  55 => 8,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/pdf_reader/templates/pdf-reader-js.html.twig", "C:\\xampp\\htdocs\\depedcarwebsite\\modules\\pdf_reader\\templates\\pdf-reader-js.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 12, "t" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
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
