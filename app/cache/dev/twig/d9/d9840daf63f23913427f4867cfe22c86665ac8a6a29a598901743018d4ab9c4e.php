<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8a5b42a04ef85af41952a5e832a0b7cd8f6442de50c592d2ac8313c98051b37c extends Twig_Template
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
        $__internal_a061ad28381f5a2de2bfae019658ffbb6178b8edf74327bf380d76a7b602982c = $this->env->getExtension("native_profiler");
        $__internal_a061ad28381f5a2de2bfae019658ffbb6178b8edf74327bf380d76a7b602982c->enter($__internal_a061ad28381f5a2de2bfae019658ffbb6178b8edf74327bf380d76a7b602982c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a061ad28381f5a2de2bfae019658ffbb6178b8edf74327bf380d76a7b602982c->leave($__internal_a061ad28381f5a2de2bfae019658ffbb6178b8edf74327bf380d76a7b602982c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
