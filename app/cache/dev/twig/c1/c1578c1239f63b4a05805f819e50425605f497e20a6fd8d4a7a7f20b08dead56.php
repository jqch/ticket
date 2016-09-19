<?php

/* Agencia/edit.html.twig */
class __TwigTemplate_1ce68c5ab223efa1728940d45b3f52144ebf0a12e22e4ade6b276733fd3306da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Agencia/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48a8d388332c283f98d97d5ca519fa71bca9f10c316a8ee2088939a5138c2557 = $this->env->getExtension("native_profiler");
        $__internal_48a8d388332c283f98d97d5ca519fa71bca9f10c316a8ee2088939a5138c2557->enter($__internal_48a8d388332c283f98d97d5ca519fa71bca9f10c316a8ee2088939a5138c2557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Agencia/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a8d388332c283f98d97d5ca519fa71bca9f10c316a8ee2088939a5138c2557->leave($__internal_48a8d388332c283f98d97d5ca519fa71bca9f10c316a8ee2088939a5138c2557_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c28c27d9dfb8e947fb93489bd03a3cb4f0f7382b7fefe471e3bf2530ee0083ea = $this->env->getExtension("native_profiler");
        $__internal_c28c27d9dfb8e947fb93489bd03a3cb4f0f7382b7fefe471e3bf2530ee0083ea->enter($__internal_c28c27d9dfb8e947fb93489bd03a3cb4f0f7382b7fefe471e3bf2530ee0083ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"c-header\">
\t\t<h2>Titulo <small></small> </h2>
\t</div>
\t<div class=\"card\">
\t\t
\t</div>
";
        
        $__internal_c28c27d9dfb8e947fb93489bd03a3cb4f0f7382b7fefe471e3bf2530ee0083ea->leave($__internal_c28c27d9dfb8e947fb93489bd03a3cb4f0f7382b7fefe471e3bf2530ee0083ea_prof);

    }

    public function getTemplateName()
    {
        return "Agencia/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* 	<div class="c-header">*/
/* 		<h2>Titulo <small></small> </h2>*/
/* 	</div>*/
/* 	<div class="card">*/
/* 		*/
/* 	</div>*/
/* {% endblock %}*/
