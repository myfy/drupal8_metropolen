<?php

/* themes/metropolen/templates/breadcrumb.html.twig */
class __TwigTemplate_b99372a5bdc29756f61149c67207f184be55f0703b5abb68a2f56e6b448d6d9e extends Twig_Template
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
        $tags = array("if" => 10, "set" => 13, "for" => 29);
        $filters = array("length" => 31, "slice" => 31);
        $functions = array("attach_library" => 11);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('length', 'slice'),
                array('attach_library')
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

        // line 10
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.responsivelists"), "html", null, true));
            echo "
  ";
            // line 13
            $context["classes"] = array(0 => "breadcrumb", 1 => ((            // line 15
(isset($context["breadcrumb_label"]) ? $context["breadcrumb_label"] : null)) ? ("has-title") : ("")));
            // line 18
            echo "  ";
            // line 19
            $context["title_classes"] = array(0 => ((            // line 20
(isset($context["breadcrumb_label"]) ? $context["breadcrumb_label"] : null)) ? ("is-responsive__item") : ("visually-hidden")), 1 => "breadcrumb__title");
            // line 24
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <nav class=\"is-responsive is-horizontal\" data-at-responsive-list>
      <div class=\"is-responsive__list\">
        <h3";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb_label_value"]) ? $context["breadcrumb_label_value"] : null), "html", null, true));
            echo "</h3>
        <ol class=\"breadcrumb__list\">";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                if (((isset($context["breadcrumb_item_length"]) ? $context["breadcrumb_item_length"] : null) > 0)) {
                    // line 31
                    $context["item_text"] = (((twig_length_filter($this->env, $this->getAttribute($context["item"], "text", array())) > (isset($context["breadcrumb_item_length"]) ? $context["breadcrumb_item_length"] : null))) ? ((twig_slice($this->env, $this->getAttribute($context["item"], "text", array()), 0, (isset($context["breadcrumb_item_length"]) ? $context["breadcrumb_item_length"] : null)) . "...")) : ($this->getAttribute($context["item"], "text", array())));
                } else {
                    // line 33
                    $context["item_text"] = $this->getAttribute($context["item"], "text", array());
                }
                // line 35
                echo "<li class=\"breadcrumb__list-item is-responsive__item\">";
                // line 36
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 37
                    echo "<a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\" class=\"breadcrumb__link\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_text"]) ? $context["item_text"] : null), "html", null, true));
                    echo "</a>";
                } else {
                    // line 39
                    echo "<span class=\"breadcrumb__link\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_text"]) ? $context["item_text"] : null), "html", null, true));
                    echo "</span>";
                }
                // line 41
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</ol>
      </div>
    </nav>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/metropolen/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  98 => 41,  93 => 39,  86 => 37,  84 => 36,  82 => 35,  79 => 33,  76 => 31,  74 => 30,  70 => 29,  64 => 27,  57 => 24,  55 => 20,  54 => 19,  52 => 18,  50 => 15,  49 => 13,  45 => 11,  43 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a breadcrumb trail.*/
/*  **/
/*  * Available variables:*/
/*  * - breadcrumb: Breadcrumb trail items.*/
/*  *//* */
/* #}*/
/* {% if breadcrumb -%}*/
/*   {{ attach_library('at_core/at.responsivelists') }}*/
/*   {%*/
/*     set classes = [*/
/*       'breadcrumb',*/
/*       breadcrumb_label ? 'has-title',*/
/*     ]*/
/*   %}*/
/*   {%*/
/*     set title_classes = [*/
/*       breadcrumb_label ? 'is-responsive__item' : 'visually-hidden',*/
/*       'breadcrumb__title',*/
/*     ]*/
/*   %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*     <nav class="is-responsive is-horizontal" data-at-responsive-list>*/
/*       <div class="is-responsive__list">*/
/*         <h3{{ title_attributes.addClass(title_classes) }}>{{ breadcrumb_label_value }}</h3>*/
/*         <ol class="breadcrumb__list">*/
/*           {%- for item in breadcrumb -%}*/
/*             {%- if breadcrumb_item_length > 0 -%}*/
/*               {%- set item_text = item.text|length > breadcrumb_item_length ? item.text|slice(0, breadcrumb_item_length) ~ '...' : item.text -%}*/
/*             {%- else -%}*/
/*               {%- set item_text = item.text -%}*/
/*             {%- endif -%}*/
/*             <li class="breadcrumb__list-item is-responsive__item">*/
/*               {%- if item.url -%}*/
/*                 <a href="{{ item.url }}" class="breadcrumb__link">{{ item_text }}</a>*/
/*               {%- else -%}*/
/*                 <span class="breadcrumb__link">{{ item_text }}</span>*/
/*               {%- endif -%}*/
/*             </li>*/
/*           {%- endfor -%}*/
/*         </ol>*/
/*       </div>*/
/*     </nav>*/
/*   </div>*/
/* {%- endif %}*/
/* */
