<?php

/* themes/adaptivetheme/at_core/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_952575d49ed01541af99147f2e67a1ef4d680e0478fcce6ea9f427c5c8062d11 extends Twig_Template
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
        $tags = array("if" => 12, "trans" => 28);
        $filters = array("t" => 14, "without" => 19, "default" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
                array('t', 'without', 'default'),
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

        // line 12
        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()))) {
            // line 13
            echo "  <nav class=\"pager pager--mini\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"pager__heading visually-hidden\">";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items\">

      ";
            // line 17
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 18
                echo "        <li class=\"pager__item pager__item--previous pager__item--text\">
          <a href=\"";
                // line 19
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 20
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹‹"))) : (t("‹‹"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 25
            echo "
      ";
            // line 26
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array())) {
                // line 27
                echo "        <li class=\"pager__item is-active\">
          <span class=\"pager__link pager__link--is-active\">(";
                // line 28
                echo t("Page @items.current", array("@items.current" => $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array()), ));
                echo ")</span>
        </li>
      ";
            }
            // line 31
            echo "
      ";
            // line 32
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 33
                echo "        <li class=\"pager__item pager__item--next pager__item--text\">
          <a href=\"";
                // line 34
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 35
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 36
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("››"))) : (t("››"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 40
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 36,  108 => 35,  100 => 34,  97 => 33,  95 => 32,  92 => 31,  86 => 28,  83 => 27,  81 => 26,  78 => 25,  71 => 21,  67 => 20,  59 => 19,  56 => 18,  54 => 17,  48 => 14,  45 => 13,  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a views mini-pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  **/
/*  * @see template_preprocess_views_mini_pager()*/
/*  *//* */
/* #}*/
/* {% if items.previous or items.next %}*/
/*   <nav class="pager pager--mini" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 id="pagination-heading" class="pager__heading visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pager__items">*/
/* */
/*       {% if items.previous %}*/
/*         <li class="pager__item pager__item--previous pager__item--text">*/
/*           <a href="{{ items.previous.href }}" class="pager__link" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes|without('href', 'title', 'rel') }}>*/
/*             <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.previous.text|default('‹‹'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {% if items.current %}*/
/*         <li class="pager__item is-active">*/
/*           <span class="pager__link pager__link--is-active">({% trans %}Page {{ items.current }}{% endtrans %})</span>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {% if items.next %}*/
/*         <li class="pager__item pager__item--next pager__item--text">*/
/*           <a href="{{ items.next.href }}" class="pager__link" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes|without('href', 'title', 'rel') }}>*/
/*             <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.next.text|default('››'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
