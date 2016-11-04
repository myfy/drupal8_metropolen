<?php

/* themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_a6624ebe0fc7c59c12624e883f2c078b7e4cfa0a859cbad1630def0301913d46 extends Twig_Template
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
        $tags = array("set" => 16, "if" => 28, "block" => 33);
        $filters = array("clean_class" => 19, "t" => 36);
        $functions = array("path" => 36);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array('path')
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
        $context["classes"] = array(0 => "block", 1 => "block-branding", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 19
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 20
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 4 => ((        // line 21
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 24
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <div class=\"block__inner block-branding__inner\">

    ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        // line 28
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 29
            echo "<h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title"), "method"), "html", null, true));
            echo "><span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span></h2>";
        }
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "</div>
</div>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content", 1 => "block-branding__content", 2 => "site-branding"), "method"), "html", null, true));
        echo ">";
        // line 35
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 36
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__logo-link\"><img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" itemprop=\"logo\" class=\"site-branding__logo-img\" /></a>";
        }
        // line 38
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 39
            echo "<span class=\"site-branding__text\">";
            // line 40
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 41
                echo "<strong class=\"site-branding__name\"><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__name-link\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a></strong>";
            }
            // line 43
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 44
                echo "<em class=\"site-branding__slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</em>";
            }
            // line 46
            echo "</span>";
        }
        // line 48
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  119 => 46,  114 => 44,  112 => 43,  103 => 41,  101 => 40,  99 => 39,  97 => 38,  86 => 36,  84 => 35,  80 => 34,  77 => 33,  71 => 51,  69 => 33,  67 => 31,  60 => 29,  58 => 28,  56 => 27,  49 => 24,  47 => 21,  46 => 20,  45 => 19,  44 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {%-*/
/*   set classes = [*/
/*     'block',*/
/*     'block-branding',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*     label ? 'has-title'*/
/*   ]*/
/* -%}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   <div class="block__inner block-branding__inner">*/
/* */
/*     {{ title_prefix }}*/
/*     {%- if label -%}*/
/*       <h2{{ title_attributes.addClass('block__title') }}><span>{{- label -}}</span></h2>*/
/*     {%- endif -%}*/
/*     {{ title_suffix }}*/
/* */
/*     {%- block content -%}*/
/*       <div{{ content_attributes.addClass('block__content', 'block-branding__content', 'site-branding') }}>*/
/*         {%- if site_logo -%}*/
/*           <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" itemprop="url" rel="home" class="site-branding__logo-link"><img src="{{ site_logo }}" alt="{{ 'Home'|t }}" itemprop="logo" class="site-branding__logo-img" /></a>*/
/*         {%- endif -%}*/
/*         {%- if site_name or site_slogan -%}*/
/*           <span class="site-branding__text">*/
/*             {%- if site_name -%}*/
/*               <strong class="site-branding__name"><a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" itemprop="url" rel="home" class="site-branding__name-link">{{ site_name }}</a></strong>*/
/*             {%- endif -%}*/
/*             {%- if site_slogan -%}*/
/*               <em class="site-branding__slogan">{{ site_slogan }}</em>*/
/*             {%- endif -%}*/
/*           </span>*/
/*         {%- endif -%}*/
/*       </div>*/
/*     {%- endblock -%}*/
/* */
/*   </div>*/
/* </div>*/
/* */
