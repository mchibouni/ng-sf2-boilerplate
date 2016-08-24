<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8af63daaff2eea51d9f0efd7dad985ea9ad8db5ef4e521ee03ea625e68756941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f687553ac2900fb98fe527726d0a65ebc008401d2c389090ed78339ba1a4810 = $this->env->getExtension("native_profiler");
        $__internal_1f687553ac2900fb98fe527726d0a65ebc008401d2c389090ed78339ba1a4810->enter($__internal_1f687553ac2900fb98fe527726d0a65ebc008401d2c389090ed78339ba1a4810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f687553ac2900fb98fe527726d0a65ebc008401d2c389090ed78339ba1a4810->leave($__internal_1f687553ac2900fb98fe527726d0a65ebc008401d2c389090ed78339ba1a4810_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a230bc70bdd1ec0b3548b8dc9cd4d8167d787b28ccd9ac8c820f290d015b7a4 = $this->env->getExtension("native_profiler");
        $__internal_9a230bc70bdd1ec0b3548b8dc9cd4d8167d787b28ccd9ac8c820f290d015b7a4->enter($__internal_9a230bc70bdd1ec0b3548b8dc9cd4d8167d787b28ccd9ac8c820f290d015b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a230bc70bdd1ec0b3548b8dc9cd4d8167d787b28ccd9ac8c820f290d015b7a4->leave($__internal_9a230bc70bdd1ec0b3548b8dc9cd4d8167d787b28ccd9ac8c820f290d015b7a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1d140059ddd7e7392281fdbaaacdcc45f49f5f8c98454824da72b0f16c08372 = $this->env->getExtension("native_profiler");
        $__internal_c1d140059ddd7e7392281fdbaaacdcc45f49f5f8c98454824da72b0f16c08372->enter($__internal_c1d140059ddd7e7392281fdbaaacdcc45f49f5f8c98454824da72b0f16c08372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1d140059ddd7e7392281fdbaaacdcc45f49f5f8c98454824da72b0f16c08372->leave($__internal_c1d140059ddd7e7392281fdbaaacdcc45f49f5f8c98454824da72b0f16c08372_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0a4cebced1ebe0b768bb38eb450031aaf760178aad015412df60e0822f0dd41 = $this->env->getExtension("native_profiler");
        $__internal_f0a4cebced1ebe0b768bb38eb450031aaf760178aad015412df60e0822f0dd41->enter($__internal_f0a4cebced1ebe0b768bb38eb450031aaf760178aad015412df60e0822f0dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0a4cebced1ebe0b768bb38eb450031aaf760178aad015412df60e0822f0dd41->leave($__internal_f0a4cebced1ebe0b768bb38eb450031aaf760178aad015412df60e0822f0dd41_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
