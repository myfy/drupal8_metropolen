<?php

/* themes/adaptivetheme/at_core/templates/user/user.html.twig */
class __TwigTemplate_dee7869549fd264228315b5d481f8556c5951ef81866afd2e75d6bbe9951e892 extends Twig_Template
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
        $tags = array("set" => 24, "if" => 35, "trans" => 37);
        $filters = array("join" => 28, "clean_class" => 30, "without" => 33);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('join', 'clean_class', 'without'),
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

        // line 24
        $context["classes"] = array(0 => "user", 1 => "user--profile", 2 => ("user--id-" . $this->getAttribute(        // line 27
(isset($context["user"]) ? $context["user"] : null), "id", array())), 3 => ((        // line 28
(isset($context["roles"]) ? $context["roles"] : null)) ? (twig_join_filter((isset($context["roles"]) ? $context["roles"] : null), " ")) : ("")), 4 => (($this->getAttribute(        // line 29
(isset($context["user"]) ? $context["user"] : null), "isBlocked", array(), "method")) ? ("user--is-blocked") : ("user--is-active")), 5 => ((        // line 30
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("user--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 33
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "setAttribute", array(0 => "role", 1 => "article"), "method"), "id"), "html", null, true));
        echo ">";
        // line 35
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isBlocked", array(), "method")) {
            // line 36
            echo "<span class=\"user__status user--is-blocked marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
      <span class=\"visually-hidden\">";
            // line 37
            echo t("This user is", array());
            echo "</span>";
            echo t("Blocked", array());
            // line 38
            echo "</span>";
        }
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        // line 42
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 43
            if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full")) {
                // line 44
                echo "<h1";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "user__title"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</h1>";
            } else {
                // line 46
                echo "<h2";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "user__title"), "method"), "html", null, true));
                echo ">";
                // line 47
                if ((isset($context["access_profiles"]) ? $context["access_profiles"] : null)) {
                    // line 48
                    echo "<a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
                    echo "user/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
                    echo "\" class=\"user__title-link\" rel=\"bookmark\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                    echo "</a>";
                } else {
                    // line 50
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                }
                // line 52
                echo "</h2>";
            }
        }
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        // line 57
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
        // line 61
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 61,  104 => 58,  102 => 57,  100 => 55,  96 => 52,  93 => 50,  84 => 48,  82 => 47,  78 => 46,  71 => 44,  69 => 43,  67 => 42,  65 => 41,  62 => 38,  58 => 37,  55 => 36,  53 => 35,  49 => 33,  47 => 30,  46 => 29,  45 => 28,  44 => 27,  43 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to present all user data.*/
/*  **/
/*  * This template is used when viewing a registered user's page,*/
/*  * e.g., example.com/user/123. 123 being the user's ID.*/
/*  **/
/*  * Available variables:*/
/*  * - content: A list of content items. Use 'content' to print all content, or*/
/*  *   print a subset such as 'content.field_example'. Fields attached to a user*/
/*  *   such as 'user_picture' are available as 'content.user_picture'.*/
/*  * - attributes: HTML attributes for the container element.*/
/*  * - user: A Drupal User entity.*/
/*  * - roles: Array of roles for this user.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - base_path: The base path, the result of base_path().*/
/*  * - access_profiles: Does the current user have access to view profiles.*/
/*  **/
/*  * @see template_preprocess_user()*/
/*  *//* */
/* #}*/
/* {%-*/
/*   set classes = [*/
/*     'user',*/
/*     'user--profile',*/
/*     'user--id-' ~ user.id,*/
/*     roles ? roles|join(' '),*/
/*     user.isBlocked() ? 'user--is-blocked' : 'user--is-active',*/
/*     view_mode ? 'user--view-mode-' ~ view_mode|clean_class,*/
/*   ]*/
/* -%}*/
/* <article{{ attributes.addClass(classes).setAttribute('role', 'article')|without('id') }}>*/
/* */
/*   {%- if user.isBlocked() -%}*/
/*     <span class="user__status user--is-blocked marker marker--warning" aria-label="Status message" role="contentinfo">*/
/*       <span class="visually-hidden">{%- trans %}This user is {% endtrans %}</span>{% trans %}Blocked{% endtrans -%}*/
/*     </span>*/
/*   {%- endif -%}*/
/* */
/*   {{- title_prefix -}}*/
/*   {%- if label -%}*/
/*     {%- if view_mode == 'full' -%}*/
/*       <h1{{ title_attributes.addClass('user__title') }}>{{- label -}}</h1>*/
/*     {%- else -%}*/
/*       <h2{{ title_attributes.addClass('user__title') }}>*/
/*         {%- if access_profiles -%}*/
/*           <a href="{{ base_path }}user/{{ user.id }}" class="user__title-link" rel="bookmark">{{- label -}}</a>*/
/*         {%- else -%}*/
/*           {{- label -}}*/
/*         {%- endif -%}*/
/*       </h2>*/
/*     {%- endif -%}*/
/*   {%- endif -%}*/
/*   {{- title_suffix -}}*/
/* */
/*   {%- if content -%}*/
/*     {{- content -}}*/
/*   {%- endif -%}*/
/* */
/* </article>*/
/* */
