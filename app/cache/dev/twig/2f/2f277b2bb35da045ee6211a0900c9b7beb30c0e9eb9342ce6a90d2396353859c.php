<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1c9af6f057e13b87b0e110a4a47a4bf005d090c8129bfd6d0e8c0535ee6c2cf extends Twig_Template
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
        $__internal_b479c438a06c2665940ef4bb66f330c4662a579d33343b9a2591b2e776beb9f8 = $this->env->getExtension("native_profiler");
        $__internal_b479c438a06c2665940ef4bb66f330c4662a579d33343b9a2591b2e776beb9f8->enter($__internal_b479c438a06c2665940ef4bb66f330c4662a579d33343b9a2591b2e776beb9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b479c438a06c2665940ef4bb66f330c4662a579d33343b9a2591b2e776beb9f8->leave($__internal_b479c438a06c2665940ef4bb66f330c4662a579d33343b9a2591b2e776beb9f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
