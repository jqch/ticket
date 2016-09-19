<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ed3cda6e7b1d42f814fa4c94858702eb21cb14ad6d7e2288a120586e04811b8c extends Twig_Template
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
        $__internal_c7208c81b631a7f16d87bcb9912d5fbd60251d97ca212ccb59a31b266c5d2c72 = $this->env->getExtension("native_profiler");
        $__internal_c7208c81b631a7f16d87bcb9912d5fbd60251d97ca212ccb59a31b266c5d2c72->enter($__internal_c7208c81b631a7f16d87bcb9912d5fbd60251d97ca212ccb59a31b266c5d2c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c7208c81b631a7f16d87bcb9912d5fbd60251d97ca212ccb59a31b266c5d2c72->leave($__internal_c7208c81b631a7f16d87bcb9912d5fbd60251d97ca212ccb59a31b266c5d2c72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
