<?php

/* themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_cf80d8e788013a52cce95236e09a8b74a1ec81c2707475fe07868fd718a67aa8 extends Twig_Template
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
        $tags = array("set" => 30, "if" => 43, "block" => 51);
        $filters = array("clean_class" => 33, "clean_id" => 38, "without" => 39);
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

        // line 30
        $context["classes"] = array(0 => "block", 1 => "block-search", 2 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 33
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 3 => ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 34
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 4 => ((        // line 35
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 38
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 39
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "aria-labelledby"), "html", null, true));
        echo " aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\">
  <div class=\"block__inner block-search__inner\">

    ";
        // line 43
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 44
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
        }
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
      <h2";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title", 1 => "block-search__title"), "method"), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
        echo "><span>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</span></h2>
    ";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "</div>
</div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content", 1 => "block-search__content"), "method"), "html", null, true));
        echo ">";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        // line 54
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 54,  92 => 53,  88 => 52,  85 => 51,  79 => 57,  77 => 51,  75 => 49,  69 => 48,  65 => 47,  62 => 44,  60 => 43,  51 => 39,  49 => 38,  47 => 35,  46 => 34,  45 => 33,  44 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the search form block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values, including:*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: A list HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template. Includes:*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  * @see search_preprocess_block()*/
/*  *//* */
/* #}*/
/* {%-*/
/*   set classes = [*/
/*     'block',*/
/*     'block-search',*/
/*     'block-config-provider--' ~ configuration.provider|clean_class,*/
/*     'block-plugin-id--' ~ plugin_id|clean_class,*/
/*     label ? 'has-title'*/
/*   ]*/
/* -%}*/
/* {%- set heading_id = attributes.id ~ '-menu'|clean_id -%}*/
/* <div{{ attributes.addClass(classes)|without('aria-labelledby') }} aria-labelledby="{{ heading_id }}">*/
/*   <div class="block__inner block-search__inner">*/
/* */
/*     {# Label. If not displayed, we still provide it for screen readers. #}*/
/*     {%- if not configuration.label_display -%}*/
/*       {%- set title_attributes = title_attributes.addClass('visually-hidden') -%}*/
/*     {%- endif -%}*/
/* */
/*     {{ title_prefix }}*/
/*       <h2{{ title_attributes.addClass('block__title', 'block-search__title').setAttribute('id', heading_id) }}><span>{{ configuration.label }}</span></h2>*/
/*     {{ title_suffix }}*/
/* */
/*     {%- block content -%}*/
/*       <div{{ content_attributes.addClass('block__content', 'block-search__content') }}>*/
/*         {{- content -}}*/
/*       </div>*/
/*     {%- endblock -%}*/
/* */
/*   </div>*/
/* </div>*/
/* */
