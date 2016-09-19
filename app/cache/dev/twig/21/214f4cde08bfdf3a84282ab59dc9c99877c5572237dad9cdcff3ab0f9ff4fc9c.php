<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d75ab30e1c8b2b21e3286123313a27e3cbef1786161687e0ffc04b812923394a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_117a1032b1096b064d854a74bf472d3ebf3b0699ab5c57e9ba68838eb0082314 = $this->env->getExtension("native_profiler");
        $__internal_117a1032b1096b064d854a74bf472d3ebf3b0699ab5c57e9ba68838eb0082314->enter($__internal_117a1032b1096b064d854a74bf472d3ebf3b0699ab5c57e9ba68838eb0082314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117a1032b1096b064d854a74bf472d3ebf3b0699ab5c57e9ba68838eb0082314->leave($__internal_117a1032b1096b064d854a74bf472d3ebf3b0699ab5c57e9ba68838eb0082314_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d7cdcdd8f73c3b8fc94f2de5f62a7d9b84495eb9022f243dc81d20c6491f8ea = $this->env->getExtension("native_profiler");
        $__internal_6d7cdcdd8f73c3b8fc94f2de5f62a7d9b84495eb9022f243dc81d20c6491f8ea->enter($__internal_6d7cdcdd8f73c3b8fc94f2de5f62a7d9b84495eb9022f243dc81d20c6491f8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d7cdcdd8f73c3b8fc94f2de5f62a7d9b84495eb9022f243dc81d20c6491f8ea->leave($__internal_6d7cdcdd8f73c3b8fc94f2de5f62a7d9b84495eb9022f243dc81d20c6491f8ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2e399853845c2882edb83e9cf4e372799d27e0a57f9a756237cca2985f4b2d7 = $this->env->getExtension("native_profiler");
        $__internal_b2e399853845c2882edb83e9cf4e372799d27e0a57f9a756237cca2985f4b2d7->enter($__internal_b2e399853845c2882edb83e9cf4e372799d27e0a57f9a756237cca2985f4b2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2e399853845c2882edb83e9cf4e372799d27e0a57f9a756237cca2985f4b2d7->leave($__internal_b2e399853845c2882edb83e9cf4e372799d27e0a57f9a756237cca2985f4b2d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8792689a8da44ad5f7e1188ee821d343038a98283a4b5dcb66eabe5d00e2fa4b = $this->env->getExtension("native_profiler");
        $__internal_8792689a8da44ad5f7e1188ee821d343038a98283a4b5dcb66eabe5d00e2fa4b->enter($__internal_8792689a8da44ad5f7e1188ee821d343038a98283a4b5dcb66eabe5d00e2fa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8792689a8da44ad5f7e1188ee821d343038a98283a4b5dcb66eabe5d00e2fa4b->leave($__internal_8792689a8da44ad5f7e1188ee821d343038a98283a4b5dcb66eabe5d00e2fa4b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
