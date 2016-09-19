<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ca063c6b9df4071c39417e5d812135298d6bf9b2a1319902bc3a0c623bf69f85 extends Twig_Template
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
        $__internal_0e3d8331344a8eae06e5dfbb451f6a6d6c437ec9af2226cf46d95f21e7be9316 = $this->env->getExtension("native_profiler");
        $__internal_0e3d8331344a8eae06e5dfbb451f6a6d6c437ec9af2226cf46d95f21e7be9316->enter($__internal_0e3d8331344a8eae06e5dfbb451f6a6d6c437ec9af2226cf46d95f21e7be9316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0e3d8331344a8eae06e5dfbb451f6a6d6c437ec9af2226cf46d95f21e7be9316->leave($__internal_0e3d8331344a8eae06e5dfbb451f6a6d6c437ec9af2226cf46d95f21e7be9316_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
