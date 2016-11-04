<?php

/* themes/adaptivetheme/at_core/templates/layout/region.html.twig */
class __TwigTemplate_0d1a3c88d34f50d66fd3318f629bfd536ea8b30b54070562d571415c4742e890 extends Twig_Template
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
        $tags = array("set" => 16, "if" => 22);
        $filters = array("clean_class" => 19);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 16
        $context["classes"] = array(0 => "l-r", 1 => "region", 2 => ((        // line 19
(isset($context["region_row"]) ? $context["region_row"] : null)) ? (((("pr-" . \Drupal\Component\Utility\Html::getClass((isset($context["region_row"]) ? $context["region_row"] : null))) . "__") . \Drupal\Component\Utility\Html::getClass((isset($context["region"]) ? $context["region"] : null)))) : (\Drupal\Component\Utility\Html::getClass((isset($context["region"]) ? $context["region"] : null)))));
        // line 22
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 23
            echo "<div ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 23,  46 => 22,  44 => 19,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region <div>.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  *//* */
/* #}*/
/* {%-*/
/*   set classes = [*/
/*     'l-r',*/
/*     'region',*/
/*     region_row ? 'pr-' ~ region_row|clean_class ~ '__' ~ region|clean_class : region|clean_class*/
/*   ]*/
/* -%}*/
/* {%- if content -%}*/
/*   <div {{ attributes.addClass(classes) }}>{{- content -}}</div>*/
/* {%- endif -%}*/
/* */
