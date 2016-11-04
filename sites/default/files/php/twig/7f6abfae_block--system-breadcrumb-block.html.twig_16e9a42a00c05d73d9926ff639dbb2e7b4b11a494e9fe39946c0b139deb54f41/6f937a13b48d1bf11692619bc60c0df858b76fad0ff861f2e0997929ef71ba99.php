<?php

/* themes/adaptivetheme/at_core/templates/block/block--system-breadcrumb-block.html.twig */
class __TwigTemplate_a6cf1dbc96de960f92587c474632cb872951703b5e18d1615986e007818bf571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 29, "if" => 42, "block" => 50);
        $filters = array("clean_class" => 32, "clean_id" => 37, "without" => 38);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id', 'without'),
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

        // line 29
        $context["classes"] = array(0 => "block", 1 => "block-breadcrumbs", 2 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 32
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 3 => ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 33
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 4 => (($this->getAttribute(        // line 34
(isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) ? ("has-title") : ("")));
        // line 37
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 38
        echo "<div role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  <div class=\"block__inner\">

    ";
        // line 42
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 43
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
        }
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    <h2";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title", 1 => "block-breadcrumbs__title"), "method"), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
        echo "><span>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</span></h2>
    ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "</div>
</div>
";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--system-breadcrumb-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 51,  85 => 50,  79 => 54,  77 => 50,  75 => 48,  69 => 47,  65 => 46,  62 => 43,  60 => 42,  51 => 38,  49 => 37,  47 => 34,  46 => 33,  45 => 32,  44 => 29,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  *//* */
/* #}*/
/* {%-*/
/*   set classes = [*/
/*     'block',*/
/*     'block-breadcrumbs',*/
/*     'block-config-provider--' ~ configuration.provider|clean_class,*/
/*     'block-plugin-id--' ~ plugin_id|clean_class,*/
/*     configuration.label_display ? 'has-title'*/
/*   ]*/
/* -%}*/
/* {%- set heading_id = attributes.id ~ '-menu'|clean_id -%}*/
/* <div role="navigation" aria-labelledby="{{ heading_id }}"{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}>*/
/*   <div class="block__inner">*/
/* */
/*     {# Label. If not displayed, we still provide it for screen readers. #}*/
/*     {%- if not configuration.label_display -%}*/
/*       {%- set title_attributes = title_attributes.addClass('visually-hidden') -%}*/
/*     {%- endif -%}*/
/* */
/*     {{ title_prefix }}*/
/*     <h2{{ title_attributes.addClass('block__title', 'block-breadcrumbs__title').setAttribute('id', heading_id) }}><span>{{ configuration.label }}</span></h2>*/
/*     {{ title_suffix }}*/
/* */
/*     {%- block content -%}*/
/*       {{- content -}}*/
/*     {%- endblock -%}*/
/* */
/*   </div>*/
/* </div>*/
/* */
