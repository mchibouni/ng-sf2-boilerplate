<?php

/* AppBundle::page/modules/slideA.html.twig */
class __TwigTemplate_b07b346484a67b17edcac7b315c362f68ec15d072659780001a406bf18334d0c extends Twig_Template
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
        $__internal_3de92b2e138e6892395ad5a0668af4aae0c500d5812f91ea4f2fb777d24ec137 = $this->env->getExtension("native_profiler");
        $__internal_3de92b2e138e6892395ad5a0668af4aae0c500d5812f91ea4f2fb777d24ec137->enter($__internal_3de92b2e138e6892395ad5a0668af4aae0c500d5812f91ea4f2fb777d24ec137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::page/modules/slideA.html.twig"));

        // line 1
        echo "<script type=\"text/ng-template\" id=\"/modules/slideA.html\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<h2>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
\t\t\t<h3>[[ subtitle ]]</h3>
\t\t\t<a class=\"btn btn-default\" ng-click=\"gotoView('home/b')\">CHANGE SUBVIEW</a>
\t
\t\t\t<div>
\t\t\t\t<strong>items</strong>
\t\t\t\t<div ng-repeat=\"item in items\">
\t\t\t\t\t<p>[[ item ]]</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</script>
";
        
        $__internal_3de92b2e138e6892395ad5a0668af4aae0c500d5812f91ea4f2fb777d24ec137->leave($__internal_3de92b2e138e6892395ad5a0668af4aae0c500d5812f91ea4f2fb777d24ec137_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::page/modules/slideA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <script type="text/ng-template" id="/modules/slideA.html">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<h2>{{ title }}</h2>*/
/* 			<h3>[[ subtitle ]]</h3>*/
/* 			<a class="btn btn-default" ng-click="gotoView('home/b')">CHANGE SUBVIEW</a>*/
/* 	*/
/* 			<div>*/
/* 				<strong>items</strong>*/
/* 				<div ng-repeat="item in items">*/
/* 					<p>[[ item ]]</p>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </script>*/
/* */
