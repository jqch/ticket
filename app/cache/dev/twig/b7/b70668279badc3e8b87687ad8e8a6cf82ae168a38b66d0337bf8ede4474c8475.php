<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bdbea67340e6dcb1055ceb28cbf655f5c736f54a0266dbf9319ddf16778c6c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_929a69fd9b86e080b9e0477511d571759ee65c72f2f8ea9af71161eba91dcc99 = $this->env->getExtension("native_profiler");
        $__internal_929a69fd9b86e080b9e0477511d571759ee65c72f2f8ea9af71161eba91dcc99->enter($__internal_929a69fd9b86e080b9e0477511d571759ee65c72f2f8ea9af71161eba91dcc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_929a69fd9b86e080b9e0477511d571759ee65c72f2f8ea9af71161eba91dcc99->leave($__internal_929a69fd9b86e080b9e0477511d571759ee65c72f2f8ea9af71161eba91dcc99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f179ce2d6dd494aba5378f7589cbdcf4c7f04cdef6135f305d1ad0828d9f61c = $this->env->getExtension("native_profiler");
        $__internal_0f179ce2d6dd494aba5378f7589cbdcf4c7f04cdef6135f305d1ad0828d9f61c->enter($__internal_0f179ce2d6dd494aba5378f7589cbdcf4c7f04cdef6135f305d1ad0828d9f61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f179ce2d6dd494aba5378f7589cbdcf4c7f04cdef6135f305d1ad0828d9f61c->leave($__internal_0f179ce2d6dd494aba5378f7589cbdcf4c7f04cdef6135f305d1ad0828d9f61c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67ffce1201bf7bdcfb0a4dce602dbc2101513ed9e2f7d3147b7358a5ee9ad21e = $this->env->getExtension("native_profiler");
        $__internal_67ffce1201bf7bdcfb0a4dce602dbc2101513ed9e2f7d3147b7358a5ee9ad21e->enter($__internal_67ffce1201bf7bdcfb0a4dce602dbc2101513ed9e2f7d3147b7358a5ee9ad21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_67ffce1201bf7bdcfb0a4dce602dbc2101513ed9e2f7d3147b7358a5ee9ad21e->leave($__internal_67ffce1201bf7bdcfb0a4dce602dbc2101513ed9e2f7d3147b7358a5ee9ad21e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_184b1f810dc498407f7954eef03e4e27b8efa4dc3f5a773b3efd0ebe2f309a03 = $this->env->getExtension("native_profiler");
        $__internal_184b1f810dc498407f7954eef03e4e27b8efa4dc3f5a773b3efd0ebe2f309a03->enter($__internal_184b1f810dc498407f7954eef03e4e27b8efa4dc3f5a773b3efd0ebe2f309a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_184b1f810dc498407f7954eef03e4e27b8efa4dc3f5a773b3efd0ebe2f309a03->leave($__internal_184b1f810dc498407f7954eef03e4e27b8efa4dc3f5a773b3efd0ebe2f309a03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
