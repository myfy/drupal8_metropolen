<?php

/* themes/adaptivetheme/at_core/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_c58e8d4683eb96971c1f654d888e535d51b4fc93b52d0a58b6e424bddbc60766 extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array("t" => 19);
        $functions = array("attach_library" => 15);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 14
        if (((isset($context["primary"]) ? $context["primary"] : null) || (isset($context["secondary"]) ? $context["secondary"] : null))) {
            // line 15
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.responsivelists"), "html", null, true));
            echo "
";
        }
        // line 17
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 18
            echo "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"primary-tabs-title\" data-at-responsive-list>
    <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
    <ul class=\"tabs tabs--primary is-responsive__list\">";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
        // line 23
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 24
            echo "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"secondary-tabs-title\" data-at-responsive-list>
    <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
    <ul class=\"tabs tabs--secondary is-responsive__list\">";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  71 => 25,  68 => 24,  66 => 23,  60 => 20,  56 => 19,  53 => 18,  51 => 17,  45 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  *//* */
/* #}*/
/* {% if primary or secondary %}*/
/*   {{ attach_library('at_core/at.responsivelists') }}*/
/* {% endif %}*/
/* {% if primary %}*/
/*   <nav class="is-horizontal is-responsive" role="navigation" aria-labelledby="primary-tabs-title" data-at-responsive-list>*/
/*     <h2 id="primary-tabs-title" class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*     <ul class="tabs tabs--primary is-responsive__list">{{ primary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <nav class="is-horizontal is-responsive" role="navigation" aria-labelledby="secondary-tabs-title" data-at-responsive-list>*/
/*     <h2 id="secondary-tabs-title" class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*     <ul class="tabs tabs--secondary is-responsive__list">{{ secondary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
