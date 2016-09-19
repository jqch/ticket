<?php

/* Agencia/index.html.twig */
class __TwigTemplate_6279705047d0e09edeb0b3b9b83908cb8cb984c3781e5cfd83fb60d694e6834c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Agencia/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd5120b135a210b31298098f8753e2a38a0339d5e191872c97ca0661f337448d = $this->env->getExtension("native_profiler");
        $__internal_fd5120b135a210b31298098f8753e2a38a0339d5e191872c97ca0661f337448d->enter($__internal_fd5120b135a210b31298098f8753e2a38a0339d5e191872c97ca0661f337448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Agencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd5120b135a210b31298098f8753e2a38a0339d5e191872c97ca0661f337448d->leave($__internal_fd5120b135a210b31298098f8753e2a38a0339d5e191872c97ca0661f337448d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4732bd31d773fe0ffe85e5304dce9107e38c489b52180e82e65f68a5a9ad79c2 = $this->env->getExtension("native_profiler");
        $__internal_4732bd31d773fe0ffe85e5304dce9107e38c489b52180e82e65f68a5a9ad79c2->enter($__internal_4732bd31d773fe0ffe85e5304dce9107e38c489b52180e82e65f68a5a9ad79c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"c-header\">
\t\t<h2>Agencias <small>Administración de agencias a nivel nacional</small> </h2>
\t</div>
\t<div class=\"card\" id=\"profile-main\">

        <div class=\"pm-overview c-overflow\">
\t\t\t<div class=\"list-group lg-alt m-t-10\">
                <a class=\"list-group-item media\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("agencia_list");
        echo "\">
                    <div class=\"pull-left\">
                        <i class=\"zmdi zmdi-globe zmdi-hc-fw text-5\"></i>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"lgi-heading\">La Paz</div>
                        <small class=\"lgi-text\">Fierent fastidii recteque ad pro</small>
                    </div>
                </a>
                <a class=\"list-group-item media\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("agencia_list", array("id" => "2"));
        echo "\">
                    <div class=\"pull-left\">
                        <i class=\"zmdi zmdi-globe zmdi-hc-fw text-5\"></i>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"lgi-heading\">Cochabamba</div>
                        <small class=\"lgi-text\">Cum sociis natoque penatibus </small>
                    </div>
                </a>
                <a class=\"list-group-item media\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("agencia_list", array("id" => "3"));
        echo "\">
                    <div class=\"pull-left\">
                        <i class=\"zmdi zmdi-globe zmdi-hc-fw text-5\"></i>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"lgi-heading\">Santa Cruz</div>
                        <small class=\"lgi-text\">Suspendisse sapien ligula</small>
                    </div>
                </a>
            </div>
        </div>

        <div class=\"pm-body clearfix\">
        \t";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "        </div>
    </div>
";
        
        $__internal_4732bd31d773fe0ffe85e5304dce9107e38c489b52180e82e65f68a5a9ad79c2->leave($__internal_4732bd31d773fe0ffe85e5304dce9107e38c489b52180e82e65f68a5a9ad79c2_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_a52e0b289628a40e2a1722a0ffd0dd84e1bb969580fdebb18751cfe2c8b08db4 = $this->env->getExtension("native_profiler");
        $__internal_a52e0b289628a40e2a1722a0ffd0dd84e1bb969580fdebb18751cfe2c8b08db4->enter($__internal_a52e0b289628a40e2a1722a0ffd0dd84e1bb969580fdebb18751cfe2c8b08db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "\t\t\t\t\t
            ";
        
        $__internal_a52e0b289628a40e2a1722a0ffd0dd84e1bb969580fdebb18751cfe2c8b08db4->leave($__internal_a52e0b289628a40e2a1722a0ffd0dd84e1bb969580fdebb18751cfe2c8b08db4_prof);

    }

    public function getTemplateName()
    {
        return "Agencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  101 => 41,  92 => 44,  90 => 41,  74 => 28,  62 => 19,  50 => 10,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* 	<div class="c-header">*/
/* 		<h2>Agencias <small>Administración de agencias a nivel nacional</small> </h2>*/
/* 	</div>*/
/* 	<div class="card" id="profile-main">*/
/* */
/*         <div class="pm-overview c-overflow">*/
/* 			<div class="list-group lg-alt m-t-10">*/
/*                 <a class="list-group-item media" href="{{path('agencia_list')}}">*/
/*                     <div class="pull-left">*/
/*                         <i class="zmdi zmdi-globe zmdi-hc-fw text-5"></i>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <div class="lgi-heading">La Paz</div>*/
/*                         <small class="lgi-text">Fierent fastidii recteque ad pro</small>*/
/*                     </div>*/
/*                 </a>*/
/*                 <a class="list-group-item media" href="{{path('agencia_list',{'id':'2'})}}">*/
/*                     <div class="pull-left">*/
/*                         <i class="zmdi zmdi-globe zmdi-hc-fw text-5"></i>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <div class="lgi-heading">Cochabamba</div>*/
/*                         <small class="lgi-text">Cum sociis natoque penatibus </small>*/
/*                     </div>*/
/*                 </a>*/
/*                 <a class="list-group-item media" href="{{path('agencia_list',{'id':'3'})}}">*/
/*                     <div class="pull-left">*/
/*                         <i class="zmdi zmdi-globe zmdi-hc-fw text-5"></i>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <div class="lgi-heading">Santa Cruz</div>*/
/*                         <small class="lgi-text">Suspendisse sapien ligula</small>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="pm-body clearfix">*/
/*         	{% block content %}*/
/* 					*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
