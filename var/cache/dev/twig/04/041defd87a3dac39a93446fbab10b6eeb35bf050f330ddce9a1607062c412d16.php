<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_138ee09d940f92a885fa7da84db4dcc5fa8cdfb65c621e05185e058bc5d8d2fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b6106d2b0c2dc3f1c22feda4829a6729dd76f127ed4dc597324a3b91def361b = $this->env->getExtension("native_profiler");
        $__internal_0b6106d2b0c2dc3f1c22feda4829a6729dd76f127ed4dc597324a3b91def361b->enter($__internal_0b6106d2b0c2dc3f1c22feda4829a6729dd76f127ed4dc597324a3b91def361b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b6106d2b0c2dc3f1c22feda4829a6729dd76f127ed4dc597324a3b91def361b->leave($__internal_0b6106d2b0c2dc3f1c22feda4829a6729dd76f127ed4dc597324a3b91def361b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_185036ed5044777c290452d8aa99562552752a52a061a8fcb4020742e48de615 = $this->env->getExtension("native_profiler");
        $__internal_185036ed5044777c290452d8aa99562552752a52a061a8fcb4020742e48de615->enter($__internal_185036ed5044777c290452d8aa99562552752a52a061a8fcb4020742e48de615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_185036ed5044777c290452d8aa99562552752a52a061a8fcb4020742e48de615->leave($__internal_185036ed5044777c290452d8aa99562552752a52a061a8fcb4020742e48de615_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39b42b44f52ac183fb759bf80d28703a129473beb3e4c680194b98991f68fd5b = $this->env->getExtension("native_profiler");
        $__internal_39b42b44f52ac183fb759bf80d28703a129473beb3e4c680194b98991f68fd5b->enter($__internal_39b42b44f52ac183fb759bf80d28703a129473beb3e4c680194b98991f68fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39b42b44f52ac183fb759bf80d28703a129473beb3e4c680194b98991f68fd5b->leave($__internal_39b42b44f52ac183fb759bf80d28703a129473beb3e4c680194b98991f68fd5b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fc48fc611655f7740bc4f5c16a2c7ac04d6c766fc6418dc1a6c30455b5c8f1e = $this->env->getExtension("native_profiler");
        $__internal_2fc48fc611655f7740bc4f5c16a2c7ac04d6c766fc6418dc1a6c30455b5c8f1e->enter($__internal_2fc48fc611655f7740bc4f5c16a2c7ac04d6c766fc6418dc1a6c30455b5c8f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2fc48fc611655f7740bc4f5c16a2c7ac04d6c766fc6418dc1a6c30455b5c8f1e->leave($__internal_2fc48fc611655f7740bc4f5c16a2c7ac04d6c766fc6418dc1a6c30455b5c8f1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
