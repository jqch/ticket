<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b39012374d7e6b02b36addbb2ff77902b88172c7542c0db2274957822d646a0a extends Twig_Template
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
        $__internal_25c55a4e0934d555d3e66b50f85fe55441661ecd495cbf4214e22a63c233457e = $this->env->getExtension("native_profiler");
        $__internal_25c55a4e0934d555d3e66b50f85fe55441661ecd495cbf4214e22a63c233457e->enter($__internal_25c55a4e0934d555d3e66b50f85fe55441661ecd495cbf4214e22a63c233457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_25c55a4e0934d555d3e66b50f85fe55441661ecd495cbf4214e22a63c233457e->leave($__internal_25c55a4e0934d555d3e66b50f85fe55441661ecd495cbf4214e22a63c233457e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
