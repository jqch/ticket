<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bb7c5ac64fa83f47759b487c4e30e0e056c73a463ca236eaea888ed857a598ab extends Twig_Template
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
        $__internal_9152c8786d297446bbd59a2b8686a83b372d8228df6ac0075226dddfaa8b95dd = $this->env->getExtension("native_profiler");
        $__internal_9152c8786d297446bbd59a2b8686a83b372d8228df6ac0075226dddfaa8b95dd->enter($__internal_9152c8786d297446bbd59a2b8686a83b372d8228df6ac0075226dddfaa8b95dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9152c8786d297446bbd59a2b8686a83b372d8228df6ac0075226dddfaa8b95dd->leave($__internal_9152c8786d297446bbd59a2b8686a83b372d8228df6ac0075226dddfaa8b95dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
