<?php

/* Agencia/new.html.twig */
class __TwigTemplate_0415b68b1c308b1f62702ac08fb413573594a973c5da8dd2517ba7fef2cb7d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Agencia/index.html.twig", "Agencia/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Agencia/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_484737809e8758d864fd2dc89175a4922875ed4865a52c63511b5bfd67caa7f2 = $this->env->getExtension("native_profiler");
        $__internal_484737809e8758d864fd2dc89175a4922875ed4865a52c63511b5bfd67caa7f2->enter($__internal_484737809e8758d864fd2dc89175a4922875ed4865a52c63511b5bfd67caa7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Agencia/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_484737809e8758d864fd2dc89175a4922875ed4865a52c63511b5bfd67caa7f2->leave($__internal_484737809e8758d864fd2dc89175a4922875ed4865a52c63511b5bfd67caa7f2_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f607232d6787de06b3577437171b73e924f260e108ad695f00d2016368137e5 = $this->env->getExtension("native_profiler");
        $__internal_9f607232d6787de06b3577437171b73e924f260e108ad695f00d2016368137e5->enter($__internal_9f607232d6787de06b3577437171b73e924f260e108ad695f00d2016368137e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "\t<h2>Registrar Agencia</h2>
";
        
        $__internal_9f607232d6787de06b3577437171b73e924f260e108ad695f00d2016368137e5->leave($__internal_9f607232d6787de06b3577437171b73e924f260e108ad695f00d2016368137e5_prof);

    }

    public function getTemplateName()
    {
        return "Agencia/new.html.twig";
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
/* {% extends 'Agencia/index.html.twig' %}*/
/* {% block content %}*/
/* 	<h2>Registrar Agencia</h2>*/
/* {% endblock %}*/
