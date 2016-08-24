<?php

/* DoctrineMongoDBBundle:Collector:mongodb.html.twig */
class __TwigTemplate_1f7a8b06907d5c51f537b5f8f9343d3bea7d937ecfd31badb7226e816298b29e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd88127b729c58253539626f15fd02e5b4cdaa2da010da13258bb003daa9e0c6 = $this->env->getExtension("native_profiler");
        $__internal_fd88127b729c58253539626f15fd02e5b4cdaa2da010da13258bb003daa9e0c6->enter($__internal_fd88127b729c58253539626f15fd02e5b4cdaa2da010da13258bb003daa9e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd88127b729c58253539626f15fd02e5b4cdaa2da010da13258bb003daa9e0c6->leave($__internal_fd88127b729c58253539626f15fd02e5b4cdaa2da010da13258bb003daa9e0c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_087ada140aba55c82b3f53ce43ee5b4b66c57ff535ca433d2d4aad146b73452d = $this->env->getExtension("native_profiler");
        $__internal_087ada140aba55c82b3f53ce43ee5b4b66c57ff535ca433d2d4aad146b73452d->enter($__internal_087ada140aba55c82b3f53ce43ee5b4b66c57ff535ca433d2d4aad146b73452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()) > 0)) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 9
                echo "                <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
                <span class=\"sf-toolbar-status\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@DoctrineMongoDB/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 22
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 22)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 23
            echo "    ";
        }
        
        $__internal_087ada140aba55c82b3f53ce43ee5b4b66c57ff535ca433d2d4aad146b73452d->leave($__internal_087ada140aba55c82b3f53ce43ee5b4b66c57ff535ca433d2d4aad146b73452d_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e66ad3da3314a32a3f9f4ef1aebd3e122cfa691fcae2e2e9bfcde52891dbac89 = $this->env->getExtension("native_profiler");
        $__internal_e66ad3da3314a32a3f9f4ef1aebd3e122cfa691fcae2e2e9bfcde52891dbac89->enter($__internal_e66ad3da3314a32a3f9f4ef1aebd3e122cfa691fcae2e2e9bfcde52891dbac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_e66ad3da3314a32a3f9f4ef1aebd3e122cfa691fcae2e2e9bfcde52891dbac89->leave($__internal_e66ad3da3314a32a3f9f4ef1aebd3e122cfa691fcae2e2e9bfcde52891dbac89_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e50abdf10cfc879133353fa365a6b7f1973b09c8085aa28e74c19b89fd64bedd = $this->env->getExtension("native_profiler");
        $__internal_e50abdf10cfc879133353fa365a6b7f1973b09c8085aa28e74c19b89fd64bedd->enter($__internal_e50abdf10cfc879133353fa365a6b7f1973b09c8085aa28e74c19b89fd64bedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    <h2>Queries</h2>

    ";
        // line 39
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()))) {
            // line 40
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 44
            echo "        <ul class=\"alt\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 46
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                    <div>
                        <code>";
                // line 48
                echo twig_escape_filter($this->env, $context["query"], "html", null, true);
                echo "</code>
                    </div>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </ul>
    ";
        }
        
        $__internal_e50abdf10cfc879133353fa365a6b7f1973b09c8085aa28e74c19b89fd64bedd->leave($__internal_e50abdf10cfc879133353fa365a6b7f1973b09c8085aa28e74c19b89fd64bedd_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineMongoDBBundle:Collector:mongodb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 52,  168 => 48,  162 => 46,  145 => 45,  142 => 44,  136 => 40,  134 => 39,  130 => 37,  124 => 36,  113 => 31,  107 => 27,  101 => 26,  93 => 23,  90 => 22,  84 => 19,  80 => 17,  77 => 16,  74 => 15,  69 => 13,  64 => 12,  59 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.queryCount > 0 %}*/
/*         {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*         {% set icon %}*/
/*             {% if profiler_markup_version == 1 %}*/
/*                 <img width="20" height="28" alt="Mongo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC"/>*/
/*                 <span class="sf-toolbar-status">{{ collector.queryCount }}</span>*/
/*             {% else %}*/
/*                 {{ include('@DoctrineMongoDB/Collector/icon.svg') }}*/
/*                 <span class="sf-toolbar-value">{{ collector.queryCount }}</span>*/
/*             {% endif %}*/
/*         {% endset %}*/
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Database Queries</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.queryCount }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/*         {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==" alt="Mongo" /></span>*/
/*     <strong>Doctrine MongoDB</strong>*/
/*     <span class="count">*/
/*         <span>{{ collector.queryCount }}</span>*/
/*     </span>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Queries</h2>*/
/* */
/*     {% if collector.queries is empty %}*/
/*         <p>*/
/*             <em>No queries.</em>*/
/*         </p>*/
/*     {% else %}*/
/*         <ul class="alt">*/
/*             {% for query in collector.queries %}*/
/*                 <li class="{{ cycle(['odd', 'even'], loop.index) }}">*/
/*                     <div>*/
/*                         <code>{{ query }}</code>*/
/*                     </div>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
