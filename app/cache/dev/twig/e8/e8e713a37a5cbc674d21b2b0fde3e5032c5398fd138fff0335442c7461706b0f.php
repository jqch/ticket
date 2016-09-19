<?php

/* Agencia/list.html.twig */
class __TwigTemplate_c3eec76f124eb3c01db964d1542d3eac0da67b40626960a4a3694fa8d8a0b58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Agencia/index.html.twig", "Agencia/list.html.twig", 1);
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
        $__internal_246a9b363a2b67a8df9b5da670f8cede76e25ece2728b0a724cc703bcc767668 = $this->env->getExtension("native_profiler");
        $__internal_246a9b363a2b67a8df9b5da670f8cede76e25ece2728b0a724cc703bcc767668->enter($__internal_246a9b363a2b67a8df9b5da670f8cede76e25ece2728b0a724cc703bcc767668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Agencia/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_246a9b363a2b67a8df9b5da670f8cede76e25ece2728b0a724cc703bcc767668->leave($__internal_246a9b363a2b67a8df9b5da670f8cede76e25ece2728b0a724cc703bcc767668_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc39a7d3b7d71467d25f4c80f4401e0fb8aecf4d7e79c2f153c07338212b5bad = $this->env->getExtension("native_profiler");
        $__internal_cc39a7d3b7d71467d25f4c80f4401e0fb8aecf4d7e79c2f153c07338212b5bad->enter($__internal_cc39a7d3b7d71467d25f4c80f4401e0fb8aecf4d7e79c2f153c07338212b5bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "\t<h2>Lista de Agencias <small>";
        echo twig_escape_filter($this->env, (isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "html", null, true);
        echo "</small></h2>
\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agencia_new", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Nuevo</a>
\t<div class=\"card\">
\t\t<div class=\"table-responsive\">
            <table aria-busy=\"false\" id=\"data-table-selection\" class=\"table table-striped bootgrid-table\">
                <thead>
                    <tr>
                    \t<th data-column-id=\"id\">Id</th>
                    \t<th data-column-id=\"nombre\">Nombre</th>
                    \t<th data-column-id=\"direccion\">Direccion</th>
                    \t<th data-column-id=\"telefono\">Telefono</th>
                    </tr>
                </thead>
                <tbody>
                \t<tr>
                \t\t<td>1</td>
                \t\t<td>Carlyn Zollner</td>
                \t\t<td>Av. buenos aires</td>
                \t\t<td>7236423</td>
                \t</tr>
                \t<tr>
                \t\t<td>2</td>
                \t\t<td>Carlyn Zollsner</td>
                \t\t<td>Fiji</td>
                \t\t<td>157323</td>
                \t</tr>
                \t<tr>
                \t\t<td>3</td>
                \t\t<td>Carlyn Zollne33r</td>
                \t\t<td>Fiji</td>
                \t\t<td>157323</td>
                \t</tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_cc39a7d3b7d71467d25f4c80f4401e0fb8aecf4d7e79c2f153c07338212b5bad->leave($__internal_cc39a7d3b7d71467d25f4c80f4401e0fb8aecf4d7e79c2f153c07338212b5bad_prof);

    }

    public function getTemplateName()
    {
        return "Agencia/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'Agencia/index.html.twig' %}*/
/* {% block content %}*/
/* 	<h2>Lista de Agencias <small>{{departamento}}</small></h2>*/
/* 	<a href="{{path('agencia_new',{'id': id })}}" class="btn btn-primary">Nuevo</a>*/
/* 	<div class="card">*/
/* 		<div class="table-responsive">*/
/*             <table aria-busy="false" id="data-table-selection" class="table table-striped bootgrid-table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                     	<th data-column-id="id">Id</th>*/
/*                     	<th data-column-id="nombre">Nombre</th>*/
/*                     	<th data-column-id="direccion">Direccion</th>*/
/*                     	<th data-column-id="telefono">Telefono</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 	<tr>*/
/*                 		<td>1</td>*/
/*                 		<td>Carlyn Zollner</td>*/
/*                 		<td>Av. buenos aires</td>*/
/*                 		<td>7236423</td>*/
/*                 	</tr>*/
/*                 	<tr>*/
/*                 		<td>2</td>*/
/*                 		<td>Carlyn Zollsner</td>*/
/*                 		<td>Fiji</td>*/
/*                 		<td>157323</td>*/
/*                 	</tr>*/
/*                 	<tr>*/
/*                 		<td>3</td>*/
/*                 		<td>Carlyn Zollne33r</td>*/
/*                 		<td>Fiji</td>*/
/*                 		<td>157323</td>*/
/*                 	</tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
