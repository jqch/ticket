<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a59df9c1ed0bf488c3e3e30eb30a647281c63effcb89ca1f250b02c24ae23bb2 extends Twig_Template
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
        $__internal_8be0245b05157991aec5b965b66e63fd0245885dc83689dcbe3fde65fd314f40 = $this->env->getExtension("native_profiler");
        $__internal_8be0245b05157991aec5b965b66e63fd0245885dc83689dcbe3fde65fd314f40->enter($__internal_8be0245b05157991aec5b965b66e63fd0245885dc83689dcbe3fde65fd314f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8be0245b05157991aec5b965b66e63fd0245885dc83689dcbe3fde65fd314f40->leave($__internal_8be0245b05157991aec5b965b66e63fd0245885dc83689dcbe3fde65fd314f40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
