<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_e67256a4ec7f347dfa1aa932c12b4a2a8013345e3eaab3d60dff9e76a2b3c737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:page:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747a2c6b5901a0918db251e5b9073217e97add9e568aefd3d3059e25cc5b4959 = $this->env->getExtension("native_profiler");
        $__internal_747a2c6b5901a0918db251e5b9073217e97add9e568aefd3d3059e25cc5b4959->enter($__internal_747a2c6b5901a0918db251e5b9073217e97add9e568aefd3d3059e25cc5b4959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747a2c6b5901a0918db251e5b9073217e97add9e568aefd3d3059e25cc5b4959->leave($__internal_747a2c6b5901a0918db251e5b9073217e97add9e568aefd3d3059e25cc5b4959_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4758f5aed2acfb180235d0506b6fd300c3a13bcf2c5c83696a6f3abcd656bdcb = $this->env->getExtension("native_profiler");
        $__internal_4758f5aed2acfb180235d0506b6fd300c3a13bcf2c5c83696a6f3abcd656bdcb->enter($__internal_4758f5aed2acfb180235d0506b6fd300c3a13bcf2c5c83696a6f3abcd656bdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4758f5aed2acfb180235d0506b6fd300c3a13bcf2c5c83696a6f3abcd656bdcb->leave($__internal_4758f5aed2acfb180235d0506b6fd300c3a13bcf2c5c83696a6f3abcd656bdcb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e2e0ccb88dbf6f9e571ae801ea76092d1ff2b0f4d94bf13e0e10529771437c8 = $this->env->getExtension("native_profiler");
        $__internal_7e2e0ccb88dbf6f9e571ae801ea76092d1ff2b0f4d94bf13e0e10529771437c8->enter($__internal_7e2e0ccb88dbf6f9e571ae801ea76092d1ff2b0f4d94bf13e0e10529771437c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div id=\"container\" class=\"container\">
\t\t";
        // line 8
        $this->loadTemplate("AppBundle::page/modules/slideA.html.twig", "AppBundle:page:home.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("AppBundle::page/modules/slideB.html.twig", "AppBundle:page:home.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div ng-view></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>var title=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\";</script>
\t<script>var intro=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["intro"]) ? $context["intro"] : $this->getContext($context, "intro")), "html", null, true);
        echo "\";</script>

";
        
        $__internal_7e2e0ccb88dbf6f9e571ae801ea76092d1ff2b0f4d94bf13e0e10529771437c8->leave($__internal_7e2e0ccb88dbf6f9e571ae801ea76092d1ff2b0f4d94bf13e0e10529771437c8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 17,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div id="container" class="container">*/
/* 		{% include 'AppBundle::page/modules/slideA.html.twig' %}*/
/* 		{% include 'AppBundle::page/modules/slideB.html.twig' %}*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<div ng-view></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<script>var title="{{ title }}";</script>*/
/* 	<script>var intro="{{ intro }}";</script>*/
/* */
/* {% endblock %}*/
/* */
