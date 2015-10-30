<?php

/* partials/navigation.html.twig */
class __TwigTemplate_41198b34ebd6d56f4811d86fea0528893ac1bddd45f165f000c6dc64ca0bafcf extends Twig_Template
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
        // line 17
        echo "
<div class=\"clock\" style=\"margin:2em;\"></div>
\t<div class=\"message\"></div>

\t<script type=\"text/javascript\">
\t\tvar clock;
\t\t
\t\t\$(document).ready(function() {
\t\t\tvar clock;

\t\t\tclock = \$('.clock').FlipClock({
\t\t        clockFace: 'DailyCounter',
\t\t        autoStart: false,
\t\t        callbacks: {
\t\t        \tstop: function() {
\t\t        \t\t\$('.message').html('The clock has stopped!')
\t\t        \t}
\t\t        }
\t\t    });
\t\t\t\t    
\t\t    clock.setTime(220880);
\t\t    clock.setCountdown(true);
\t\t    clock.start();

\t\t});
\t</script>

<ul class=\"navigation myclass\" id=\"something\" >
    ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 46
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 48
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 50
                echo "            <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                <a href=\"";
                // line 51
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 52
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 53
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo " test wooo
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 59
            echo "        <li>
            <a href=\"";
            // line 60
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 61
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 62
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 67
            echo "        <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 67)->display($context);
            echo "</li>
    ";
        }
        // line 69
        echo "</ul>

";
    }

    // line 1
    public function getloop($__page__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo " howaboutthis\">
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 7
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 10
                    echo "                <ul>
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 14,  184 => 11,  181 => 10,  179 => 9,  173 => 7,  167 => 6,  163 => 5,  158 => 4,  155 => 3,  150 => 2,  138 => 1,  132 => 69,  126 => 67,  123 => 66,  112 => 62,  106 => 61,  102 => 60,  99 => 59,  94 => 58,  91 => 57,  80 => 53,  74 => 52,  70 => 51,  65 => 50,  62 => 49,  57 => 48,  51 => 46,  49 => 45,  19 => 17,);
    }
}
/* {% macro loop(page) %}*/
/*     {% for p in page.children.visible %}*/
/*         {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}*/
/*         <li class="{{ current_page }} howaboutthis">*/
/*             <a href="{{ p.url }}">*/
/*                 {% if p.header.icon %}<i class="fa fa-{{ p.header.icon }}"></i>{% endif %}*/
/*                 {{ p.menu }}*/
/*             </a>*/
/*             {% if p.children.visible.count > 0 %}*/
/*                 <ul>*/
/*                     {{ _self.loop(p) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* <div class="clock" style="margin:2em;"></div>*/
/* 	<div class="message"></div>*/
/* */
/* 	<script type="text/javascript">*/
/* 		var clock;*/
/* 		*/
/* 		$(document).ready(function() {*/
/* 			var clock;*/
/* */
/* 			clock = $('.clock').FlipClock({*/
/* 		        clockFace: 'DailyCounter',*/
/* 		        autoStart: false,*/
/* 		        callbacks: {*/
/* 		        	stop: function() {*/
/* 		        		$('.message').html('The clock has stopped!')*/
/* 		        	}*/
/* 		        }*/
/* 		    });*/
/* 				    */
/* 		    clock.setTime(220880);*/
/* 		    clock.setCountdown(true);*/
/* 		    clock.start();*/
/* */
/* 		});*/
/* 	</script>*/
/* */
/* <ul class="navigation myclass" id="something" >*/
/*     {% if theme_config.dropdown.enabled %}*/
/*         {{ _self.loop(pages) }}*/
/*     {% else %}*/
/*         {% for page in pages.children.visible %}*/
/*             {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*             <li class="{{ current_page }}">*/
/*                 <a href="{{ page.url }}">*/
/*                     {% if page.header.icon %}<i class="fa fa-{{ page.header.icon }}"></i>{% endif %}*/
/*                     {{ page.menu }} test wooo*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {% for mitem in site.menu %}*/
/*         <li>*/
/*             <a href="{{ mitem.url }}">*/
/*                 {% if mitem.icon %}<i class="fa fa-{{ mitem.icon }}"></i>{% endif %}*/
/*                 {{ mitem.text }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/*     {% if config.plugins.login.enabled and grav.user.username %}*/
/*         <li><i class="fa fa-lock"></i> {% include 'partials/login-status.html.twig' %}</li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
/* */
