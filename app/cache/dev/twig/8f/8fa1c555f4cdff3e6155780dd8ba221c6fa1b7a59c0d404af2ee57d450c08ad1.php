<?php

/* Dispensador/dispensador.html.twig */
class __TwigTemplate_e12b75bb38199274ec1f0a573cdebea4c456eda3389faa7d78e8e5840e63be4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("fullscreen.html.twig", "Dispensador/dispensador.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fullscreen.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34c6801505fc4a28d6d2670bedcd1407c6f2a0dfcd3505ca9e4f7dba50bec6eb = $this->env->getExtension("native_profiler");
        $__internal_34c6801505fc4a28d6d2670bedcd1407c6f2a0dfcd3505ca9e4f7dba50bec6eb->enter($__internal_34c6801505fc4a28d6d2670bedcd1407c6f2a0dfcd3505ca9e4f7dba50bec6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Dispensador/dispensador.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c6801505fc4a28d6d2670bedcd1407c6f2a0dfcd3505ca9e4f7dba50bec6eb->leave($__internal_34c6801505fc4a28d6d2670bedcd1407c6f2a0dfcd3505ca9e4f7dba50bec6eb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cabf2d989b745b3370f174ada4cb9537b19895345a291c9b3869ea3f89def053 = $this->env->getExtension("native_profiler");
        $__internal_cabf2d989b745b3370f174ada4cb9537b19895345a291c9b3869ea3f89def053->enter($__internal_cabf2d989b745b3370f174ada4cb9537b19895345a291c9b3869ea3f89def053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- Vendor CSS -->
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- CSS -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <style>
        #content{
            background-color: #4534aa;
        }
        .btn{
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            padding-top: 30px;
            padding-bottom: 30px;
        }
    </style>
";
        
        $__internal_cabf2d989b745b3370f174ada4cb9537b19895345a291c9b3869ea3f89def053->leave($__internal_cabf2d989b745b3370f174ada4cb9537b19895345a291c9b3869ea3f89def053_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_26b3d0925d594ec6402993a174c6875821c16e74ce2a7f4d43ac6824a6a27c00 = $this->env->getExtension("native_profiler");
        $__internal_26b3d0925d594ec6402993a174c6875821c16e74ce2a7f4d43ac6824a6a27c00->enter($__internal_26b3d0925d594ec6402993a174c6875821c16e74ce2a7f4d43ac6824a6a27c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    <div id=\"content\">
        <br><br>
        <div class=\"row\" id=\"botones\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["servicios"]);
        foreach ($context['_seq'] as $context["_key"] => $context["servicios"]) {
            // line 28
            echo "            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <button id=\"";
            // line 29
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
        // line 32
        echo "        </div>
        <audio id=\"player\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("audio/beep.wav"), "html", null, true);
        echo "\"></audio>
    </div>
";
        
        $__internal_26b3d0925d594ec6402993a174c6875821c16e74ce2a7f4d43ac6824a6a27c00->leave($__internal_26b3d0925d594ec6402993a174c6875821c16e74ce2a7f4d43ac6824a6a27c00_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be8951092717bfbe5fda45af17e2144221e8a10f6674dfa48399d6422d5fd79e = $this->env->getExtension("native_profiler");
        $__internal_be8951092717bfbe5fda45af17e2144221e8a10f6674dfa48399d6422d5fd79e->enter($__internal_be8951092717bfbe5fda45af17e2144221e8a10f6674dfa48399d6422d5fd79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    <script>
        var xhr;
        function nextScreen(id,ticket){
            document.getElementById('player').play();
            if (xhr && xhr.readyState != 4) {
                    xhr.abort();
                }
            xhr = \$.ajax({
                    type: 'post',
                    cache: false,
                    data: {id: id, ticket: ticket},
                    url: \"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("dispensador_next_screen");
        echo "\",
                    beforeSend: function () {
                        \$('#'+id).attr('disabled','disabled')
                    },
                    success: function (data) {
                        \$('#botones').empty();
                        \$('#botones').append(data);
                    },
                    statusCode: {
                        500: function () {
                            \$('#'+id).removeAttr('disabled')
                        },
                        404: function () {

                        }
                    }
                });
        }
    </script>
";
        
        $__internal_be8951092717bfbe5fda45af17e2144221e8a10f6674dfa48399d6422d5fd79e->leave($__internal_be8951092717bfbe5fda45af17e2144221e8a10f6674dfa48399d6422d5fd79e_prof);

    }

    public function getTemplateName()
    {
        return "Dispensador/dispensador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  131 => 37,  125 => 36,  115 => 33,  112 => 32,  97 => 29,  94 => 28,  90 => 27,  85 => 24,  79 => 23,  57 => 8,  52 => 6,  48 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'fullscreen.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*     <!-- Vendor CSS -->*/
/*         <link href="{{asset('vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">*/
/*         <!-- CSS -->*/
/*         <link href="{{asset('css/app.min.1.css')}}" rel="stylesheet">*/
/* */
/*     <style>*/
/*         #content{*/
/*             background-color: #4534aa;*/
/*         }*/
/*         .btn{*/
/*             width: 100%;*/
/*             margin-bottom: 20px;*/
/*             padding: 10px;*/
/*             padding-top: 30px;*/
/*             padding-bottom: 30px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div id="content">*/
/*         <br><br>*/
/*         <div class="row" id="botones">*/
/*             {% for servicios in servicios %}*/
/*             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">*/
/*                 <button id="{{servicios.id}}" class="btn btn-primary btn-lg waves-effect" onclick="nextScreen({{servicios.id}},{{servicios.esticket}})">{{servicios.servicio}}</button>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <audio id="player" src="{{asset('audio/beep.wav')}}"></audio>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script>*/
/*         var xhr;*/
/*         function nextScreen(id,ticket){*/
/*             document.getElementById('player').play();*/
/*             if (xhr && xhr.readyState != 4) {*/
/*                     xhr.abort();*/
/*                 }*/
/*             xhr = $.ajax({*/
/*                     type: 'post',*/
/*                     cache: false,*/
/*                     data: {id: id, ticket: ticket},*/
/*                     url: "{{ path('dispensador_next_screen') }}",*/
/*                     beforeSend: function () {*/
/*                         $('#'+id).attr('disabled','disabled')*/
/*                     },*/
/*                     success: function (data) {*/
/*                         $('#botones').empty();*/
/*                         $('#botones').append(data);*/
/*                     },*/
/*                     statusCode: {*/
/*                         500: function () {*/
/*                             $('#'+id).removeAttr('disabled')*/
/*                         },*/
/*                         404: function () {*/
/* */
/*                         }*/
/*                     }*/
/*                 });*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
