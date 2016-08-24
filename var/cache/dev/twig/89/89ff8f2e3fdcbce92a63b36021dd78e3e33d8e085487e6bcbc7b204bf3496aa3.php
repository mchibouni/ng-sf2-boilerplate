<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_461e1b1ef7a8f82d2a4b8d661c278529623417751fe1c84bcce3db0aa0321e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::base.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header_nav' => array($this, 'block_header_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_642889264f9d9261a6fdf3523c4452b7f0d645a415c6245ae4863ad49dc25f3e = $this->env->getExtension("native_profiler");
        $__internal_642889264f9d9261a6fdf3523c4452b7f0d645a415c6245ae4863ad49dc25f3e->enter($__internal_642889264f9d9261a6fdf3523c4452b7f0d645a415c6245ae4863ad49dc25f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_642889264f9d9261a6fdf3523c4452b7f0d645a415c6245ae4863ad49dc25f3e->leave($__internal_642889264f9d9261a6fdf3523c4452b7f0d645a415c6245ae4863ad49dc25f3e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_faf5e8b24ae6c358e861eb3e860c3bb2814244aa69491156ccccff9a2bee5233 = $this->env->getExtension("native_profiler");
        $__internal_faf5e8b24ae6c358e861eb3e860c3bb2814244aa69491156ccccff9a2bee5233->enter($__internal_faf5e8b24ae6c358e861eb3e860c3bb2814244aa69491156ccccff9a2bee5233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/normalize.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/animate.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles_1.css");
            // line 8
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "3e7b5a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles.css_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_faf5e8b24ae6c358e861eb3e860c3bb2814244aa69491156ccccff9a2bee5233->leave($__internal_faf5e8b24ae6c358e861eb3e860c3bb2814244aa69491156ccccff9a2bee5233_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d64be15d405751d685ccb28bae1572ed647dc74471e4d60547765d6b3034f91a = $this->env->getExtension("native_profiler");
        $__internal_d64be15d405751d685ccb28bae1572ed647dc74471e4d60547765d6b3034f91a->enter($__internal_d64be15d405751d685ccb28bae1572ed647dc74471e4d60547765d6b3034f91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/require.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_init_1.js");
            // line 22
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_d64be15d405751d685ccb28bae1572ed647dc74471e4d60547765d6b3034f91a->leave($__internal_d64be15d405751d685ccb28bae1572ed647dc74471e4d60547765d6b3034f91a_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d8afea1cc7e426fb9719a414ab6d908d09b65dee1a20cb6e8d10832ef1ac684 = $this->env->getExtension("native_profiler");
        $__internal_1d8afea1cc7e426fb9719a414ab6d908d09b65dee1a20cb6e8d10832ef1ac684->enter($__internal_1d8afea1cc7e426fb9719a414ab6d908d09b65dee1a20cb6e8d10832ef1ac684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "\t<div id=\"wrapper\">
\t\t<header>
\t\t\t<div id=\"logo-box\">
\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"/>
\t\t\t</div>
\t\t\t";
        // line 32
        $this->displayBlock('header_nav', $context, $blocks);
        // line 40
        echo "\t\t</header>
\t\t<secction id=\"content\">
\t\t\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "\t\t</secction>
\t\t<footer>
\t\t\t";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "\t\t</footer>
\t</div>
";
        
        $__internal_1d8afea1cc7e426fb9719a414ab6d908d09b65dee1a20cb6e8d10832ef1ac684->leave($__internal_1d8afea1cc7e426fb9719a414ab6d908d09b65dee1a20cb6e8d10832ef1ac684_prof);

    }

    // line 32
    public function block_header_nav($context, array $blocks = array())
    {
        $__internal_2a5980226f62789ae36f056b7afe6cd3bc36440e40b342bb0c1f9c19f5f4e15d = $this->env->getExtension("native_profiler");
        $__internal_2a5980226f62789ae36f056b7afe6cd3bc36440e40b342bb0c1f9c19f5f4e15d->enter($__internal_2a5980226f62789ae36f056b7afe6cd3bc36440e40b342bb0c1f9c19f5f4e15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_nav"));

        // line 33
        echo "\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"botHome\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Home</a></li>
\t\t\t\t\t\t<li class=\"botHome\"><a ng-click=\"gotoView('/intro')\">Intro</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
        
        $__internal_2a5980226f62789ae36f056b7afe6cd3bc36440e40b342bb0c1f9c19f5f4e15d->leave($__internal_2a5980226f62789ae36f056b7afe6cd3bc36440e40b342bb0c1f9c19f5f4e15d_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c7ae6ef99187ea64fc29f1b31d503234ed7bdebba2f843555f3d961b28abf15 = $this->env->getExtension("native_profiler");
        $__internal_0c7ae6ef99187ea64fc29f1b31d503234ed7bdebba2f843555f3d961b28abf15->enter($__internal_0c7ae6ef99187ea64fc29f1b31d503234ed7bdebba2f843555f3d961b28abf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0c7ae6ef99187ea64fc29f1b31d503234ed7bdebba2f843555f3d961b28abf15->leave($__internal_0c7ae6ef99187ea64fc29f1b31d503234ed7bdebba2f843555f3d961b28abf15_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dfd149c85b5a5250d191c36b0a5e47ae13ce28f9bdbbd15e2648c0fd0a37a045 = $this->env->getExtension("native_profiler");
        $__internal_dfd149c85b5a5250d191c36b0a5e47ae13ce28f9bdbbd15e2648c0fd0a37a045->enter($__internal_dfd149c85b5a5250d191c36b0a5e47ae13ce28f9bdbbd15e2648c0fd0a37a045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<p>@Symfonangular 2016</p>";
        
        $__internal_dfd149c85b5a5250d191c36b0a5e47ae13ce28f9bdbbd15e2648c0fd0a37a045->leave($__internal_dfd149c85b5a5250d191c36b0a5e47ae13ce28f9bdbbd15e2648c0fd0a37a045_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 45,  210 => 42,  198 => 35,  194 => 33,  188 => 32,  179 => 46,  177 => 45,  173 => 43,  171 => 42,  167 => 40,  165 => 32,  160 => 30,  155 => 27,  149 => 26,  130 => 22,  126 => 21,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  93 => 13,  87 => 12,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/normalize.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/animate.min.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css') }}"/>*/
/* 	{% stylesheets '@AppBundle/Resources/public/css/*' filter='cssrewrite' %}*/
/* 	<link rel="stylesheet" href="{{ asset_url }}" />*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	<script src="{{ asset('lib/scripts/require.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular-route.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/html5shiv.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* 	<script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* 	{% javascripts '@AppBundle/Resources/public/js/*' %}*/
/* 	<script src="{{ asset_url }}"></script>*/
/* 	{% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/* 		<header>*/
/* 			<div id="logo-box">*/
/* 				<img src="{{ asset('images/logo.png') }}" alt="Logo"/>*/
/* 			</div>*/
/* 			{% block header_nav %}*/
/* 				<nav>*/
/* 					<ul>*/
/* 						<li class="botHome"><a href="{{ path('_home') }}">Home</a></li>*/
/* 						<li class="botHome"><a ng-click="gotoView('/intro')">Intro</a></li>*/
/* 					</ul>*/
/* 				</nav>*/
/* 			{% endblock %}*/
/* 		</header>*/
/* 		<secction id="content">*/
/* 			{% block content %}{% endblock %}*/
/* 		</secction>*/
/* 		<footer>*/
/* 			{% block footer %}<p>@Symfonangular 2016</p>{% endblock %}*/
/* 		</footer>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
