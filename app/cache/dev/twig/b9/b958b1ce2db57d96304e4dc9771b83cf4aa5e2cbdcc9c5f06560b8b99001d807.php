<?php

/* Dispensador/botones.html.twig */
class __TwigTemplate_0367dd7b06c2f3ec0b72931afec574372afd1c8a8b735334033b560fa315da7f extends Twig_Template
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
        $__internal_2486c32f311d08c983c785efad95e39c1bf1710834b74dc4d894fe6cfa6309e2 = $this->env->getExtension("native_profiler");
        $__internal_2486c32f311d08c983c785efad95e39c1bf1710834b74dc4d894fe6cfa6309e2->enter($__internal_2486c32f311d08c983c785efad95e39c1bf1710834b74dc4d894fe6cfa6309e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Dispensador/botones.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["servicios"]);
        foreach ($context['_seq'] as $context["_key"] => $context["servicios"]) {
            // line 2
            echo "        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <button id=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicios"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg waves-effect\" onclick=\"nextScreen(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicios"], "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicios"], "esticket", array()), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicios"], "servicio", array()), "html", null, true);
            echo "</button>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicios'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2486c32f311d08c983c785efad95e39c1bf1710834b74dc4d894fe6cfa6309e2->leave($__internal_2486c32f311d08c983c785efad95e39c1bf1710834b74dc4d894fe6cfa6309e2_prof);

    }

    public function getTemplateName()
    {
        return "Dispensador/botones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for servicios in servicios %}*/
/*         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">*/
/*             <button id="{{servicios.id}}" class="btn btn-primary btn-lg waves-effect" onclick="nextScreen({{servicios.id}},{{servicios.esticket}})">{{servicios.servicio}}</button>*/
/*         </div>*/
/* {% endfor %}*/
/* */
