<?php

/* themes/adaptivetheme/at_core/templates/misc/status-messages.html.twig */
class __TwigTemplate_99feb82ad10d0cf25951ea0011e43f0c58c15771eaa2c1253b810e3f2b8305d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 26, "for" => 28, "set" => 29, "if" => 31);
        $filters = array("without" => 30, "length" => 39, "first" => 46);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'for', 'set', 'if'),
                array('without', 'length', 'first'),
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

        // line 26
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 27
        echo "<div data-drupal-messages>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            $context["classes"] = array(0 => "messages", 1 => ("messages--" . $context["type"]));
            // line 30
            echo "<div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-label"), "html", null, true));
            echo ">
      <div class=\"messages__container\"";
            // line 31
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">";
            // line 33
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 34
                echo "<h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>";
            }
            // line 37
            echo "<span class=\"icon icon-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["type"], "html", null, true));
            echo "\" aria-hidden=\"true\"></span>";
            // line 39
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 40
                echo "<ul class=\"messages__list\">";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 42
                    echo "<li class=\"messages__item\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "</ul>";
            } else {
                // line 46
                echo "<div class=\"messages__list\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "</div>";
            }
            // line 49
            echo "</div>
    </div>
    ";
            // line 52
            $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 54,  109 => 52,  105 => 49,  100 => 46,  97 => 44,  89 => 42,  85 => 41,  83 => 40,  81 => 39,  77 => 37,  72 => 34,  70 => 33,  65 => 31,  58 => 30,  56 => 29,  52 => 28,  50 => 27,  44 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  *//* */
/* #}*/
/* {% block messages %}*/
/* <div data-drupal-messages>*/
/*   {%- for type, messages in message_list -%}*/
/*     {%- set classes = ['messages', 'messages--' ~ type] -%}*/
/*     <div role="contentinfo" aria-label="{{- status_headings[type] -}}"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>*/
/*       <div class="messages__container"{% if type == 'error' %} role="alert"{% endif %}>*/
/* */
/*         {%- if status_headings[type] -%}*/
/*           <h2 class="visually-hidden">{{- status_headings[type] -}}</h2>*/
/*         {%- endif -%}*/
/* */
/*         <span class="icon icon-{{- type -}}" aria-hidden="true"></span>*/
/* */
/*         {%- if messages|length > 1 -%}*/
/*           <ul class="messages__list">*/
/*             {%- for message in messages -%}*/
/*               <li class="messages__item">{{- message -}}</li>*/
/*             {%- endfor -%}*/
/*           </ul>*/
/*         {%- else -%}*/
/*           <div class="messages__list">{{- messages|first -}}</div>*/
/*         {%- endif -%}*/
/* */
/*       </div>*/
/*     </div>*/
/*     {# Remove type specific classes. #}*/
/*     {%- set attributes = attributes.removeClass(classes) -%}*/
/*   {%- endfor -%}*/
/* </div>*/
/* {% endblock messages %}*/
/* */
