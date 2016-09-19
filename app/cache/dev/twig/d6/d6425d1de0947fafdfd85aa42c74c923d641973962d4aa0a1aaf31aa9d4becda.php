<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_218455ecf6a765c6902ce7f2af4180a7879c11ef8063d83c7626ec25e30cb5e8 extends Twig_Template
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
        $__internal_a7c0da8ff9f49f6e30d2d94ff10949027cc34905cb87fc07e0c694baceea9bcc = $this->env->getExtension("native_profiler");
        $__internal_a7c0da8ff9f49f6e30d2d94ff10949027cc34905cb87fc07e0c694baceea9bcc->enter($__internal_a7c0da8ff9f49f6e30d2d94ff10949027cc34905cb87fc07e0c694baceea9bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a7c0da8ff9f49f6e30d2d94ff10949027cc34905cb87fc07e0c694baceea9bcc->leave($__internal_a7c0da8ff9f49f6e30d2d94ff10949027cc34905cb87fc07e0c694baceea9bcc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
