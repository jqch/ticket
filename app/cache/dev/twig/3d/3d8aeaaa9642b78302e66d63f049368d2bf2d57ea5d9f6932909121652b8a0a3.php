<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d1160bb9e55fdaffb48028cad8ffb1b64d2351684b02f791d0019671ba1072e4 extends Twig_Template
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
        $__internal_70ea5c523fae55327ca276a30449d74952bbcbbe8b02c3e0ad7399fe100c38c8 = $this->env->getExtension("native_profiler");
        $__internal_70ea5c523fae55327ca276a30449d74952bbcbbe8b02c3e0ad7399fe100c38c8->enter($__internal_70ea5c523fae55327ca276a30449d74952bbcbbe8b02c3e0ad7399fe100c38c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_70ea5c523fae55327ca276a30449d74952bbcbbe8b02c3e0ad7399fe100c38c8->leave($__internal_70ea5c523fae55327ca276a30449d74952bbcbbe8b02c3e0ad7399fe100c38c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
