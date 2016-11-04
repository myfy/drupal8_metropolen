<?php

/* block.html.twig */
class __TwigTemplate_e652831d7ea439d12973bff75d919170e5a72bd627bd201f72877a5f19349579 extends Twig_Template
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
        $tags = array("set" => 29, "if" => 37, "block" => 46);
        $filters = array("clean_class" => 31, "clean_id" => 36, "without" => 37);
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
        $context["classes"] = array(0 => "block", 1 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 32
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 3 => ((        // line 33
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 36
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-title"));
        // line 37
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-labelledby"), "html", null, true));
        if ((isset($context["label"]) ? $context["label"] : null)) {
            echo " role=\"region\" aria-labelledby=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
            echo "\"";
        }
        echo ">
  <div class=\"block__inner\">

    ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        // line 41
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 42
            echo "<h2 ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title"), "method"), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
            echo "><span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span></h2>";
        }
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "</div>
</div>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content"), "method"), "html", null, true));
        echo ">";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        // line 49
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 49,  91 => 48,  87 => 47,  84 => 46,  78 => 52,  76 => 46,  74 => 44,  67 => 42,  65 => 41,  63 => 40,  51 => 37,  49 => 36,  47 => 33,  46 => 32,  45 => 31,  44 => 29,);
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
/*     'block-config-provider--' ~ configuration.provider|clean_class,*/
/*     'block-plugin-id--' ~ plugin_id|clean_class,*/
/*     label ? 'has-title'*/
/*   ]*/
/* -%}*/
/* {%- set heading_id = attributes.id ~ '-title'|clean_id -%}*/
/* <div{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}{%- if label %} role="region" aria-labelledby="{{ heading_id }}"{%- endif -%}>*/
/*   <div class="block__inner">*/
/* */
/*     {{ title_prefix }}*/
/*     {%- if label -%}*/
/*       <h2 {{ title_attributes.addClass('block__title').setAttribute('id', heading_id) }}><span>{{ label }}</span></h2>*/
/*     {%- endif -%}*/
/*     {{ title_suffix }}*/
/* */
/*     {%- block content -%}*/
/*       <div{{ content_attributes.addClass('block__content') }}>*/
/*         {{- content -}}*/
/*       </div>*/
/*     {%- endblock -%}*/
/* */
/*   </div>*/
/* </div>*/
/* */
