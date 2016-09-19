<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f368c46a0d1038a131a0d2ae2d1e256cf2a837739238f063be8c73c28f7afb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef68cbb40976770ba2a20d9ec452740646ad04c2b17b5d533fb5778ae7840ea3 = $this->env->getExtension("native_profiler");
        $__internal_ef68cbb40976770ba2a20d9ec452740646ad04c2b17b5d533fb5778ae7840ea3->enter($__internal_ef68cbb40976770ba2a20d9ec452740646ad04c2b17b5d533fb5778ae7840ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef68cbb40976770ba2a20d9ec452740646ad04c2b17b5d533fb5778ae7840ea3->leave($__internal_ef68cbb40976770ba2a20d9ec452740646ad04c2b17b5d533fb5778ae7840ea3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03986ed1069b5ca7b8065427226d4590a9724842b8d114fdcac251fce1878c0d = $this->env->getExtension("native_profiler");
        $__internal_03986ed1069b5ca7b8065427226d4590a9724842b8d114fdcac251fce1878c0d->enter($__internal_03986ed1069b5ca7b8065427226d4590a9724842b8d114fdcac251fce1878c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_03986ed1069b5ca7b8065427226d4590a9724842b8d114fdcac251fce1878c0d->leave($__internal_03986ed1069b5ca7b8065427226d4590a9724842b8d114fdcac251fce1878c0d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
