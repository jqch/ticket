<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b28e48c37eac99eb99129203612aca7f9a4c2ffeea0db994c00703680aeab97c extends Twig_Template
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
        $__internal_ffcda1e329b409fdbe5af5025c48f2591e106341f5813c0e9512483c89a5fd0a = $this->env->getExtension("native_profiler");
        $__internal_ffcda1e329b409fdbe5af5025c48f2591e106341f5813c0e9512483c89a5fd0a->enter($__internal_ffcda1e329b409fdbe5af5025c48f2591e106341f5813c0e9512483c89a5fd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ffcda1e329b409fdbe5af5025c48f2591e106341f5813c0e9512483c89a5fd0a->leave($__internal_ffcda1e329b409fdbe5af5025c48f2591e106341f5813c0e9512483c89a5fd0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
