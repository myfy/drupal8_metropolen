<?php

/* themes/adaptivetheme/at_core/templates/navigation/menu.html.twig */
class __TwigTemplate_ad5503745b54057943d1f402e60a2903e41ce557902e78042a558657337e9ce2 extends Twig_Template
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
        $tags = array("import" => 24, "macro" => 31, "if" => 33, "set" => 36, "for" => 47);
        $filters = array("clean_class" => 40, "render" => 60, "without" => 64);
        $functions = array("cycle" => 45, "link" => 65);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for'),
                array('clean_class', 'render', 'without'),
                array('cycle', 'link')
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
        $context["menus"] = $this;
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, (isset($context["menu_name"]) ? $context["menu_name"] : null))));
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            $context["menus"] = $this;
            // line 33
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 34
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 36
                    $context["menu_classes"] = array(0 => "menu", 1 => "odd", 2 => "menu-level-1", 3 => ((                    // line 40
(isset($context["menu_name"]) ? $context["menu_name"] : null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass((isset($context["menu_name"]) ? $context["menu_name"] : null)))) : ("")));
                    // line 43
                    echo "<ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "html", null, true));
                    echo ">";
                } else {
                    // line 45
                    echo "<ul class=\"menu is-child ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["menu_level"]) ? $context["menu_level"] : null)), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("menu-level-" . ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)), "html", null, true));
                    echo "\">";
                }
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    if ( !twig_test_empty($this->getAttribute($context["item"], "below", array()))) {
                        // line 49
                        $context["is_parent"] = true;
                    } else {
                        // line 51
                        $context["is_parent"] = false;
                    }
                    // line 54
                    $context["item_classes"] = array(0 => "menu__item", 1 => ((                    // line 56
(isset($context["is_parent"]) ? $context["is_parent"] : null)) ? ("is-parent") : ("")), 2 => (($this->getAttribute(                    // line 57
$context["item"], "is_expanded", array())) ? ("menu__item--expanded") : ("")), 3 => (($this->getAttribute(                    // line 58
$context["item"], "is_collapsed", array())) ? ("menu__item--collapsed") : ("")), 4 => (($this->getAttribute(                    // line 59
$context["item"], "in_active_trail", array())) ? ("menu__item--active-trail") : ("")), 5 => ("menu__item-title--" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('drupal_core')->renderVar($this->getAttribute(                    // line 60
$context["item"], "title", array())))));
                    // line 64
                    echo "        <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "setAttribute", array(0 => "id", 1 => ("mlid-" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["item"], "title", array()))))), "method"), "role"), "html", null, true));
                    echo ">
          <span class=\"menu__link--wrapper";
                    // line 65
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["is_parent"]) ? $context["is_parent"] : null)) ? (" is-parent__wrapper") : (""))));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "</span>";
                    // line 66
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 67
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["menu_name"]) ? $context["menu_name"] : null))));
                    }
                    // line 69
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "</ul>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 71,  119 => 69,  116 => 67,  114 => 66,  109 => 65,  104 => 64,  102 => 60,  101 => 59,  100 => 58,  99 => 57,  98 => 56,  97 => 54,  94 => 51,  91 => 49,  89 => 48,  85 => 47,  78 => 45,  73 => 43,  71 => 40,  70 => 36,  68 => 34,  66 => 33,  64 => 32,  49 => 31,  45 => 29,  43 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  snippets...*/
/*  item.original_link ? 'menu__item-original-link--' ~ item.original_link.getPluginId()|clean_class,*/
/*  {{ link(item.title, item.url, {'class':['main-nav__link']}) }}*/
/*  *//* */
/* #}*/
/* {%- import _self as menus -%}*/
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{- menus.menu_links(items, attributes, 0, menu_name) -}}*/
/* */
/* {%- macro menu_links(items, attributes, menu_level, menu_name) -%}*/
/*   {%- import _self as menus -%}*/
/*   {%- if items -%}*/
/*     {%- if menu_level == 0 -%}*/
/*       {%-*/
/*         set menu_classes = [*/
/*           'menu',*/
/*           'odd',*/
/*           'menu-level-1',*/
/*           menu_name ? 'menu-name--' ~ menu_name|clean_class,*/
/*         ]*/
/*       -%}*/
/*       <ul{{ attributes.addClass(menu_classes) }}>*/
/*     {%- else -%}*/
/*       <ul class="menu is-child {{ cycle(['odd', 'even'], menu_level) }} {{ 'menu-level-' ~ (menu_level + 1) }}">*/
/*     {%- endif -%}*/
/*       {%- for item in items -%}*/
/*         {%- if item.below is not empty -%}*/
/*           {%- set is_parent = true -%}*/
/*         {% else %}*/
/*           {%- set is_parent = false -%}*/
/*         {%- endif -%}*/
/*         {%-*/
/*           set item_classes = [*/
/*             'menu__item',*/
/*             is_parent ? 'is-parent',*/
/*             item.is_expanded ? 'menu__item--expanded',*/
/*             item.is_collapsed ? 'menu__item--collapsed',*/
/*             item.in_active_trail ? 'menu__item--active-trail',*/
/*             'menu__item-title--' ~ item.title|render|clean_class,*/
/*           ]*/
/*         -%}*/
/*         {# We set an id on list items to provide context for aria attributes in responsive menu toggle buttons. #}*/
/*         <li{{ item.attributes.addClass(item_classes).setAttribute('id', 'mlid-' ~ item.title|render|clean_class)|without('role') }}>*/
/*           <span class="menu__link--wrapper{{ is_parent ? ' is-parent__wrapper' }}">{{ link(item.title, item.url) }}</span>*/
/*           {%- if item.below -%}*/
/*             {{ menus.menu_links(item.below, attributes, menu_level + 1, menu_name) }}*/
/*           {%- endif -%}*/
/*         </li>*/
/*       {%- endfor -%}*/
/*     </ul>*/
/*   {%- endif -%}*/
/* {%- endmacro -%}*/
/* */
