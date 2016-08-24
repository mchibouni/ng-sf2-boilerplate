<?php

/* ::base.html.twig */
class __TwigTemplate_c288acfbe8c707b3f3638a3c47df9c175b7b9140569be530842e7bb8d05719a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_070b949fa01bc26aff40aa3e295b029674c77e22df1e9acad903b8775c91b65f = $this->env->getExtension("native_profiler");
        $__internal_070b949fa01bc26aff40aa3e295b029674c77e22df1e9acad903b8775c91b65f->enter($__internal_070b949fa01bc26aff40aa3e295b029674c77e22df1e9acad903b8775c91b65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"App\" ng-controller=\"appController\">

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
\t";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>

</html>";
        
        $__internal_070b949fa01bc26aff40aa3e295b029674c77e22df1e9acad903b8775c91b65f->leave($__internal_070b949fa01bc26aff40aa3e295b029674c77e22df1e9acad903b8775c91b65f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d32896a6a565c30afbb239b42c721064b6202f56eaa4ac087a2a311512f7e7c = $this->env->getExtension("native_profiler");
        $__internal_3d32896a6a565c30afbb239b42c721064b6202f56eaa4ac087a2a311512f7e7c->enter($__internal_3d32896a6a565c30afbb239b42c721064b6202f56eaa4ac087a2a311512f7e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d32896a6a565c30afbb239b42c721064b6202f56eaa4ac087a2a311512f7e7c->leave($__internal_3d32896a6a565c30afbb239b42c721064b6202f56eaa4ac087a2a311512f7e7c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ff99928b1ed030e62372a61eb650064617b6487a99e27754154cdc572e5fe4b = $this->env->getExtension("native_profiler");
        $__internal_7ff99928b1ed030e62372a61eb650064617b6487a99e27754154cdc572e5fe4b->enter($__internal_7ff99928b1ed030e62372a61eb650064617b6487a99e27754154cdc572e5fe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ff99928b1ed030e62372a61eb650064617b6487a99e27754154cdc572e5fe4b->leave($__internal_7ff99928b1ed030e62372a61eb650064617b6487a99e27754154cdc572e5fe4b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7bbb5b468ec97fb5fb40fe0cbd9bc8341de3c99e1cdf9c5ac80305f91a1f572 = $this->env->getExtension("native_profiler");
        $__internal_d7bbb5b468ec97fb5fb40fe0cbd9bc8341de3c99e1cdf9c5ac80305f91a1f572->enter($__internal_d7bbb5b468ec97fb5fb40fe0cbd9bc8341de3c99e1cdf9c5ac80305f91a1f572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7bbb5b468ec97fb5fb40fe0cbd9bc8341de3c99e1cdf9c5ac80305f91a1f572->leave($__internal_d7bbb5b468ec97fb5fb40fe0cbd9bc8341de3c99e1cdf9c5ac80305f91a1f572_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_821cdb7015a1e4aa7c7e423cc40d38e04117e2133650e13a7c68ccf52a301c1e = $this->env->getExtension("native_profiler");
        $__internal_821cdb7015a1e4aa7c7e423cc40d38e04117e2133650e13a7c68ccf52a301c1e->enter($__internal_821cdb7015a1e4aa7c7e423cc40d38e04117e2133650e13a7c68ccf52a301c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_821cdb7015a1e4aa7c7e423cc40d38e04117e2133650e13a7c68ccf52a301c1e->leave($__internal_821cdb7015a1e4aa7c7e423cc40d38e04117e2133650e13a7c68ccf52a301c1e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  84 => 13,  73 => 8,  62 => 7,  53 => 15,  50 => 14,  48 => 13,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="App" ng-controller="appController">*/
/* */
/* <head>*/
/* 	<meta charset="UTF-8" />*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* 	<title>{% block title %}{% endblock %}</title>*/
/* 	{% block stylesheets %}{% endblock %}*/
/* 	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* */
/* <body>*/
/* 	{% block body %}{% endblock %}*/
/* 	{% block javascripts %}{% endblock %}*/
/* </body>*/
/* */
/* </html>*/
