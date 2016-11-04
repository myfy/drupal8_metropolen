<?php

/* themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_291caaecd76cf6874dbc16fa854151e9fa0b4deae5d230edffb743e89f19c0f1 extends Twig_Template
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
        $tags = array("set" => 29, "block" => 49, "if" => 52);
        $filters = array("clean_class" => 31, "clean_id" => 36, "t" => 37, "without" => 39);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'clean_id', 't', 'without'),
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
        $context["classes"] = array(0 => "rm-block", 1 => ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("rm-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 32
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 3 => "js-hide");
        // line 36
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        $context["config_label"] = (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) ? ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) : (t("Main menu")));
        // line 38
        $context["rm_label_class"] = (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 39
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  <div class=\"rm-block__inner\">
    <div";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "rm-toggle"), "method"), "id"), "html", null, true));
        echo ">
      <button href=\"#rm-content\" class=\"rm-toggle__link un-button\" role='button' aria-controls=\"rm-content\" aria-expanded=\"false\">
        ";
        // line 44
        echo "        <svg class=\"rm-toggle__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/></svg>
        ";
        // line 46
        echo "        <span class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rm_label_class"]) ? $context["rm_label_class"] : null), "html", null, true));
        echo "\" id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["config_label"]) ? $context["config_label"] : null), "html", null, true));
        echo "</span>
      </button>
    </div>";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "</div>
</nav>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "<div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 52
        if ((isset($context["click_menus_enabled"]) ? $context["click_menus_enabled"] : null)) {
            // line 53
            echo "<span id=\"rm-accordion-trigger\" class=\"hidden\">
            <button class=\"rm-accordion-trigger un-button\" role='button' aria-controls=\"child-menu\" aria-expanded=\"false\">
              <svg class=\"rm-accordion-trigger__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z\"/></svg>
            </button>
          </span>";
        }
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        // line 60
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  103 => 59,  96 => 53,  94 => 52,  91 => 50,  88 => 49,  82 => 62,  80 => 49,  70 => 46,  67 => 44,  62 => 41,  54 => 39,  52 => 38,  50 => 37,  48 => 36,  46 => 32,  45 => 31,  44 => 29,);
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
/*     'rm-block',*/
/*     'rm-config-provider--' ~ configuration.provider|clean_class,*/
/*     'rm-plugin-id--' ~ plugin_id|clean_class,*/
/*     'js-hide',*/
/*   ]*/
/* -%}*/
/* {%- set heading_id = attributes.id ~ '-menu'|clean_id -%}*/
/* {%- set config_label = configuration.label ? configuration.label : 'Main menu'|t -%}*/
/* {%- set rm_label_class = configuration.label ? 'rm-toggle__label' : 'visually-hidden' -%}*/
/* <nav role="navigation" aria-labelledby="{{ heading_id }}"{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}>*/
/*   <div class="rm-block__inner">*/
/*     <div{{ title_attributes.addClass('rm-toggle')|without('id') }}>*/
/*       <button href="#rm-content" class="rm-toggle__link un-button" role='button' aria-controls="rm-content" aria-expanded="false">*/
/*         {# SVG hamburger icon. #}*/
/*         <svg class="rm-toggle__icon" viewBox="0 0 1792 1792" preserveAspectRatio="xMinYMid meet"><path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z"/></svg>*/
/*         {# Button text, may be visually hidden. #}*/
/*         <span class="{{ rm_label_class }}" id="{{ heading_id }}">{{- config_label -}}</span>*/
/*       </button>*/
/*     </div>*/
/*     {%- block content -%}*/
/*       <div class="rm-block__content" id="rm-content">*/
/*         {# SVG accordion trigger icon. #}*/
/*         {%- if click_menus_enabled -%}*/
/*           <span id="rm-accordion-trigger" class="hidden">*/
/*             <button class="rm-accordion-trigger un-button" role='button' aria-controls="child-menu" aria-expanded="false">*/
/*               <svg class="rm-accordion-trigger__icon" viewBox="0 0 1792 1792" preserveAspectRatio="xMinYMid meet"><path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"/></svg>*/
/*             </button>*/
/*           </span>*/
/*         {%- endif -%}*/
/*         {{- content -}}*/
/*       </div>*/
/*     {%- endblock -%}*/
/*   </div>*/
/* </nav>*/
/* */
