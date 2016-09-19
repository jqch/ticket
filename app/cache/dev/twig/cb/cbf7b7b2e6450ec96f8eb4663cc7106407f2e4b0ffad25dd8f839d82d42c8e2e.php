<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a6fc7128f060844a7d5da1ea50f4686fd1add19fd3f78eecc2dc0ac216da301c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0fd38fbb0723bd8ec9ae4f6009b8d0fd8173405fb2a31d3394613f7e5152fca8 = $this->env->getExtension("native_profiler");
        $__internal_0fd38fbb0723bd8ec9ae4f6009b8d0fd8173405fb2a31d3394613f7e5152fca8->enter($__internal_0fd38fbb0723bd8ec9ae4f6009b8d0fd8173405fb2a31d3394613f7e5152fca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd38fbb0723bd8ec9ae4f6009b8d0fd8173405fb2a31d3394613f7e5152fca8->leave($__internal_0fd38fbb0723bd8ec9ae4f6009b8d0fd8173405fb2a31d3394613f7e5152fca8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c7436b344b37f90476094218b76841c4fd1b11cc6425ea688e07763552638d = $this->env->getExtension("native_profiler");
        $__internal_a7c7436b344b37f90476094218b76841c4fd1b11cc6425ea688e07763552638d->enter($__internal_a7c7436b344b37f90476094218b76841c4fd1b11cc6425ea688e07763552638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a7c7436b344b37f90476094218b76841c4fd1b11cc6425ea688e07763552638d->leave($__internal_a7c7436b344b37f90476094218b76841c4fd1b11cc6425ea688e07763552638d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_10a95f7b3a2f069c15a8694789a482fbe54e81f864ac3dad1611f5d055562384 = $this->env->getExtension("native_profiler");
        $__internal_10a95f7b3a2f069c15a8694789a482fbe54e81f864ac3dad1611f5d055562384->enter($__internal_10a95f7b3a2f069c15a8694789a482fbe54e81f864ac3dad1611f5d055562384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_10a95f7b3a2f069c15a8694789a482fbe54e81f864ac3dad1611f5d055562384->leave($__internal_10a95f7b3a2f069c15a8694789a482fbe54e81f864ac3dad1611f5d055562384_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
