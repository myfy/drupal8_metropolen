<?php

/* themes/metropolen/templates/generated/page.html.twig */
class __TwigTemplate_b14538463e09459563846be5e81a2a1411adaca7118aa402333a66798210f86c extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array();
        $functions = array("attach_library" => 7);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("metropolen/metropolen.layout.page"), "html", null, true));
        echo "
<div";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 9
        if (($this->getAttribute((isset($context["leaderboard"]) ? $context["leaderboard"] : null), "has_regions", array()) == true)) {
            // line 10
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["leaderboard"]) ? $context["leaderboard"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["leaderboard"]) ? $context["leaderboard"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "leaderboard", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 16
        echo "  ";
        if (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "has_regions", array()) == true)) {
            // line 17
            echo "  <header";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()), "html", null, true));
            echo "
      ";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array()), "html", null, true));
            echo "
    </div>
  </header>
  ";
        }
        // line 24
        echo "  ";
        if (($this->getAttribute((isset($context["navbar"]) ? $context["navbar"] : null), "has_regions", array()) == true)) {
            // line 25
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar"]) ? $context["navbar"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar"]) ? $context["navbar"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navbar", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 31
        echo "  ";
        if (($this->getAttribute((isset($context["highlighted"]) ? $context["highlighted"] : null), "has_regions", array()) == true)) {
            // line 32
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["highlighted"]) ? $context["highlighted"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["highlighted"]) ? $context["highlighted"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 38
        echo "  ";
        if (($this->getAttribute((isset($context["features"]) ? $context["features"] : null), "has_regions", array()) == true)) {
            // line 39
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["features"]) ? $context["features"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["features"]) ? $context["features"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_first", array()), "html", null, true));
            echo "
      ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_second", array()), "html", null, true));
            echo "
      ";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_third", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 47
        echo "  ";
        if (($this->getAttribute((isset($context["content_prefix"]) ? $context["content_prefix"] : null), "has_regions", array()) == true)) {
            // line 48
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_prefix"]) ? $context["content_prefix"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_prefix"]) ? $context["content_prefix"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_prefix", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 54
        echo "  ";
        if (($this->getAttribute((isset($context["main"]) ? $context["main"] : null), "has_regions", array()) == true)) {
            // line 55
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
      ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 63
        echo "  ";
        if (($this->getAttribute((isset($context["content_suffix"]) ? $context["content_suffix"] : null), "has_regions", array()) == true)) {
            // line 64
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_suffix"]) ? $context["content_suffix"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_suffix"]) ? $context["content_suffix"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_suffix", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 70
        echo "  ";
        if (($this->getAttribute((isset($context["subfeatures"]) ? $context["subfeatures"] : null), "has_regions", array()) == true)) {
            // line 71
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["subfeatures"]) ? $context["subfeatures"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["subfeatures"]) ? $context["subfeatures"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 73
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_first", array()), "html", null, true));
            echo "
      ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_second", array()), "html", null, true));
            echo "
      ";
            // line 75
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_third", array()), "html", null, true));
            echo "
      ";
            // line 76
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_fourth", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 80
        echo "  ";
        if (($this->getAttribute((isset($context["footer"]) ? $context["footer"] : null), "has_regions", array()) == true)) {
            // line 81
            echo "  <footer";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : null), "wrapper_attributes", array()), "html", null, true));
            echo ">
    <div";
            // line 82
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : null), "container_attributes", array()), "html", null, true));
            echo ">
      ";
            // line 83
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
  ";
        }
        // line 87
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attribution"]) ? $context["attribution"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/metropolen/templates/generated/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 87,  265 => 83,  261 => 82,  256 => 81,  253 => 80,  246 => 76,  242 => 75,  238 => 74,  234 => 73,  230 => 72,  225 => 71,  222 => 70,  215 => 66,  211 => 65,  206 => 64,  203 => 63,  196 => 59,  192 => 58,  188 => 57,  184 => 56,  179 => 55,  176 => 54,  169 => 50,  165 => 49,  160 => 48,  157 => 47,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  133 => 39,  130 => 38,  123 => 34,  119 => 33,  114 => 32,  111 => 31,  104 => 27,  100 => 26,  95 => 25,  92 => 24,  85 => 20,  81 => 19,  77 => 18,  72 => 17,  69 => 16,  62 => 12,  58 => 11,  53 => 10,  51 => 9,  47 => 8,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * site-builder page template.*/
/*  * Generated on: Mon, 15 Aug 16 10:44:57 +0200*/
/*  *//* */
/* #}*/
/* {{ attach_library('metropolen/metropolen.layout.page') }}*/
/* <div{{ attributes }}>*/
/*   {% if leaderboard.has_regions == true %}*/
/*   <div{{ leaderboard.wrapper_attributes }}>*/
/*     <div{{ leaderboard.container_attributes }}>*/
/*       {{ page.leaderboard }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if header.has_regions == true %}*/
/*   <header{{ header.wrapper_attributes }}>*/
/*     <div{{ header.container_attributes }}>*/
/*       {{ page.header_first }}*/
/*       {{ page.header_second }}*/
/*     </div>*/
/*   </header>*/
/*   {% endif %}*/
/*   {% if navbar.has_regions == true %}*/
/*   <div{{ navbar.wrapper_attributes }}>*/
/*     <div{{ navbar.container_attributes }}>*/
/*       {{ page.navbar }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if highlighted.has_regions == true %}*/
/*   <div{{ highlighted.wrapper_attributes }}>*/
/*     <div{{ highlighted.container_attributes }}>*/
/*       {{ page.highlighted }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if features.has_regions == true %}*/
/*   <div{{ features.wrapper_attributes }}>*/
/*     <div{{ features.container_attributes }}>*/
/*       {{ page.features_first }}*/
/*       {{ page.features_second }}*/
/*       {{ page.features_third }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if content_prefix.has_regions == true %}*/
/*   <div{{ content_prefix.wrapper_attributes }}>*/
/*     <div{{ content_prefix.container_attributes }}>*/
/*       {{ page.content_prefix }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if main.has_regions == true %}*/
/*   <div{{ main.wrapper_attributes }}>*/
/*     <div{{ main.container_attributes }}>*/
/*       {{ page.content }}*/
/*       {{ page.sidebar_first }}*/
/*       {{ page.sidebar_second }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if content_suffix.has_regions == true %}*/
/*   <div{{ content_suffix.wrapper_attributes }}>*/
/*     <div{{ content_suffix.container_attributes }}>*/
/*       {{ page.content_suffix }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if subfeatures.has_regions == true %}*/
/*   <div{{ subfeatures.wrapper_attributes }}>*/
/*     <div{{ subfeatures.container_attributes }}>*/
/*       {{ page.subfeatures_first }}*/
/*       {{ page.subfeatures_second }}*/
/*       {{ page.subfeatures_third }}*/
/*       {{ page.subfeatures_fourth }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if footer.has_regions == true %}*/
/*   <footer{{ footer.wrapper_attributes }}>*/
/*     <div{{ footer.container_attributes }}>*/
/*       {{ page.footer }}*/
/*     </div>*/
/*   </footer>*/
/*   {% endif %}*/
/*   {{ attribution }}*/
/* </div>*/
/* */
