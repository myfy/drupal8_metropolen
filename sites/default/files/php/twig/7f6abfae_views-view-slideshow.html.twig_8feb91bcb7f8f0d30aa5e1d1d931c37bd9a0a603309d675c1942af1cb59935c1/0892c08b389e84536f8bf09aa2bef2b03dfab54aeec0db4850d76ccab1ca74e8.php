<?php

/* modules/views_slideshow/templates/views-view-slideshow.html.twig */
class __TwigTemplate_c1b7767293e41086e4d27b1ecbbed15dc081341abc4480ae0073e7e57e99d8ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if ((isset($context["slideshow"]) ? $context["slideshow"] : null)) {
            // line 2
            echo "  <div class=\"skin-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skin"]) ? $context["skin"] : null), "html", null, true));
            echo "\">
    ";
            // line 3
            if ((isset($context["top_widget_rendered"]) ? $context["top_widget_rendered"] : null)) {
                // line 4
                echo "      <div class=\"views-slideshow-controls-top clearfix\">
        ";
                // line 5
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_widget_rendered"]) ? $context["top_widget_rendered"] : null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 8
            echo "
    ";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slideshow"]) ? $context["slideshow"] : null), "html", null, true));
            echo "

    ";
            // line 11
            if ((isset($context["bottom_widget_rendered"]) ? $context["bottom_widget_rendered"] : null)) {
                // line 12
                echo "      <div class=\"views-slideshow-controls-bottom clearfix\">
        ";
                // line 13
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_widget_rendered"]) ? $context["bottom_widget_rendered"] : null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 16
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/templates/views-view-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  74 => 13,  71 => 12,  69 => 11,  64 => 9,  61 => 8,  55 => 5,  52 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if slideshow %}*/
/*   <div class="skin-{{ skin }}">*/
/*     {% if top_widget_rendered %}*/
/*       <div class="views-slideshow-controls-top clearfix">*/
/*         {{ top_widget_rendered }}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {{ slideshow }}*/
/* */
/*     {% if bottom_widget_rendered %}*/
/*       <div class="views-slideshow-controls-bottom clearfix">*/
/*         {{ bottom_widget_rendered }}*/
/*       </div>*/
/*     {% endif %}*/
/*     </div>*/
/* {% endif %}*/
/* */
