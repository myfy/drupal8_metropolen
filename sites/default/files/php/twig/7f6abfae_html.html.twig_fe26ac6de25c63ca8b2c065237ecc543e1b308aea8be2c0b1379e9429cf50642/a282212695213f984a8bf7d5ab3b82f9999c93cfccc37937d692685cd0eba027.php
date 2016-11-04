<?php

/* themes/adaptivetheme/at_core/templates/layout/html.html.twig */
class __TwigTemplate_6f17dd5965adab14473dce2ef3019d070136b4097fa9d19f6b33dcac729d9efa extends Twig_Template
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
        $tags = array("set" => 33, "if" => 40);
        $filters = array("raw" => 57, "safe_join" => 65, "clean_class" => 72, "without" => 81, "t" => 83);
        $functions = array("attach_library" => 26);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('raw', 'safe_join', 'clean_class', 'without', 't'),
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

        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.fastclick_initialize"), "html", null, true));
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.breakpoints"), "html", null, true));
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary(($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()) . "/fontfaceobserver")), "html", null, true));
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary(($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()) . "/base")), "html", null, true));
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary(($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()) . "/color")), "html", null, true));
        // line 31
        echo "<!DOCTYPE html>";
        // line 33
        $context["html_classes"] = array(0 => "no-js", 1 => "adaptivetheme");
        // line 38
        echo "<html";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["html_attributes"]) ? $context["html_attributes"] : null), "addClass", array(0 => (isset($context["html_classes"]) ? $context["html_classes"] : null)), "method"), "html", null, true));
        echo ">
  <head>";
        // line 40
        if (((isset($context["touch_icons"]) ? $context["touch_icons"] : null) == true)) {
            // line 41
            if ((isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null)) {
                // line 42
                echo "<link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"152x152\" />";
            }
            // line 44
            if ((isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null)) {
                // line 45
                echo "<link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"120x120\" />";
            }
            // line 47
            if ((isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null)) {
                // line 48
                echo "<link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"76x76\" />";
            }
            // line 50
            if ((isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null)) {
                // line 51
                echo "<link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"60x60\" />";
            }
            // line 53
            if ((isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null)) {
                // line 54
                echo "<link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null), "html", null, true));
                echo "\" rel=\"shortcut icon\" />";
            }
        }
        // line 57
        echo "<head-placeholder token=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <link rel=\"dns-prefetch\" href=\"//cdnjs.cloudflare.com\">";
        // line 59
        if ((isset($context["google_dns_prefetch"]) ? $context["google_dns_prefetch"] : null)) {
            // line 60
            echo "<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">";
        }
        // line 62
        if ((isset($context["typekit_dns_prefetch"]) ? $context["typekit_dns_prefetch"] : null)) {
            // line 63
            echo "<link rel=\"dns-prefetch\" href=\"//use.typekit.net\">";
        }
        // line 65
        echo "<title>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </head>";
        // line 70
        $context["body_classes"] = array(0 => ((        // line 71
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("user-logged-out")), 1 => (( !        // line 72
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => (($this->getAttribute(        // line 73
(isset($context["path_info"]) ? $context["path_info"] : null), "args", array())) ? (("path-" . $this->getAttribute((isset($context["path_info"]) ? $context["path_info"] : null), "args", array()))) : ("")), 3 => (($this->getAttribute(        // line 74
(isset($context["path_info"]) ? $context["path_info"] : null), "query", array())) ? (("path-query-" . $this->getAttribute((isset($context["path_info"]) ? $context["path_info"] : null), "query", array()))) : ("")), 4 => ((        // line 75
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("page-node-type--" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 5 => (($this->getAttribute(        // line 76
(isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())))) : ("")), 6 => (($this->getAttribute(        // line 77
(isset($context["theme"]) ? $context["theme"] : null), "name", array())) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())))) : ("")), 7 => ((        // line 78
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")));
        // line 81
        echo "<body role=\"document\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "role"), "html", null, true));
        echo ">
    ";
        // line 83
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skip_link_target"]) ? $context["skip_link_target"] : null), "html", null, true));
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "</a>
    ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 87,  166 => 86,  162 => 85,  158 => 84,  151 => 83,  146 => 81,  144 => 78,  143 => 77,  142 => 76,  141 => 75,  140 => 74,  139 => 73,  138 => 72,  137 => 71,  136 => 70,  132 => 67,  128 => 66,  123 => 65,  120 => 63,  118 => 62,  115 => 60,  113 => 59,  108 => 57,  102 => 54,  100 => 53,  93 => 51,  91 => 50,  84 => 48,  82 => 47,  75 => 45,  73 => 44,  66 => 42,  64 => 41,  62 => 40,  57 => 38,  55 => 33,  53 => 31,  51 => 30,  49 => 29,  47 => 28,  45 => 27,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  *//* */
/* #}*/
/* {{- attach_library('at_core/at.fastclick_initialize') -}}*/
/* {{- attach_library('at_core/at.breakpoints') -}}*/
/* {{- attach_library(theme.name ~ '/fontfaceobserver') -}}*/
/* {{- attach_library(theme.name ~ '/base') -}}*/
/* {{- attach_library(theme.name ~ '/color') -}}*/
/* <!DOCTYPE html>*/
/* {%-*/
/*   set html_classes = [*/
/*     'no-js',*/
/*     'adaptivetheme',*/
/*   ]*/
/* -%}*/
/* <html{{ html_attributes.addClass(html_classes) }}>*/
/*   <head>*/
/*     {%- if touch_icons == true -%}*/
/*       {%- if touch_icon_ipad_retina -%}*/
/*         <link href="{{ touch_icon_ipad_retina }}" rel="{{ touch_rel }}" sizes="152x152" />*/
/*       {%- endif -%}*/
/*       {%- if touch_icon_iphone_retina -%}*/
/*         <link href="{{ touch_icon_iphone_retina }}" rel="{{ touch_rel }}" sizes="120x120" />*/
/*       {%- endif -%}*/
/*       {%- if touch_icon_ipad -%}*/
/*         <link href="{{ touch_icon_ipad }}" rel="{{ touch_rel }}" sizes="76x76" />*/
/*       {%- endif -%}*/
/*       {%- if touch_icon_default -%}*/
/*         <link href="{{ touch_icon_default }}" rel="{{ touch_rel }}" sizes="60x60" />*/
/*       {%- endif -%}*/
/*       {%- if touch_icon_nokia -%}*/
/*         <link href="{{ touch_icon_nokia }}" rel="shortcut icon" />*/
/*       {%- endif -%}*/
/*     {%- endif -%}*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">*/
/*     {%- if google_dns_prefetch -%}*/
/*       <link rel="dns-prefetch" href="//fonts.googleapis.com">*/
/*     {%- endif -%}*/
/*     {%- if typekit_dns_prefetch -%}*/
/*       <link rel="dns-prefetch" href="//use.typekit.net">*/
/*     {%- endif -%}*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   {%-*/
/*     set body_classes = [*/
/*       logged_in ? 'user-logged-in' : 'user-logged-out',*/
/*       not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*       path_info.args ? 'path-' ~ path_info.args,*/
/*       path_info.query ? 'path-query-' ~ path_info.query,*/
/*       node_type ? 'page-node-type--' ~ node_type|clean_class,*/
/*       head_title_array.name ? 'site-name--' ~ head_title_array.name|clean_class,*/
/*       theme.name ? 'theme-name--' ~ theme.name|clean_class,*/
/*       db_offline ? 'db-offline',*/
/*     ]*/
/*   -%}*/
/*   <body role="document"{{ attributes.addClass(body_classes)|without('role') }}>*/
/*     {# Keyboard navigation/accessibility links to content in page.html.twig. #}*/
/*     <a href="{{ skip_link_target }}" class="visually-hidden focusable skip-link">{{ 'Skip to main content'|t }}</a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
