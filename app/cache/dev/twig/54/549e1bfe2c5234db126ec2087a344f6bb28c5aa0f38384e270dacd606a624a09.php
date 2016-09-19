<?php

/* fullscreen.html.twig */
class __TwigTemplate_ec7ac6b8e59a4f445c0e3dddd73d63ad60d412c3e4254524b06e4fee3e01f5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e129448d94941dba373097d25ca3d3bd2cf566d3bc660e9d9826d958153616c = $this->env->getExtension("native_profiler");
        $__internal_2e129448d94941dba373097d25ca3d3bd2cf566d3bc660e9d9826d958153616c->enter($__internal_2e129448d94941dba373097d25ca3d3bd2cf566d3bc660e9d9826d958153616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fullscreen.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
                *{ margin: 0; padding: 0;}

                html, body{
                    width: 100%;
                    height: 100%;
                }
                #content{
                    width: 100%;
                    height: 100%;
                    min-height: 100%;
                    background-color: #AEF6EB;
                }
        </style>
    </head>
    <body>
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_2e129448d94941dba373097d25ca3d3bd2cf566d3bc660e9d9826d958153616c->leave($__internal_2e129448d94941dba373097d25ca3d3bd2cf566d3bc660e9d9826d958153616c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94c03a3b637e98217939dbec853b2b7af3aa3bee9cf59c52c8342c5eccbf2694 = $this->env->getExtension("native_profiler");
        $__internal_94c03a3b637e98217939dbec853b2b7af3aa3bee9cf59c52c8342c5eccbf2694->enter($__internal_94c03a3b637e98217939dbec853b2b7af3aa3bee9cf59c52c8342c5eccbf2694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido!";
        
        $__internal_94c03a3b637e98217939dbec853b2b7af3aa3bee9cf59c52c8342c5eccbf2694->leave($__internal_94c03a3b637e98217939dbec853b2b7af3aa3bee9cf59c52c8342c5eccbf2694_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80b1a532fc5bfea25d0be8e334a86c5270739b7508703375bffe7c6f4be01a98 = $this->env->getExtension("native_profiler");
        $__internal_80b1a532fc5bfea25d0be8e334a86c5270739b7508703375bffe7c6f4be01a98->enter($__internal_80b1a532fc5bfea25d0be8e334a86c5270739b7508703375bffe7c6f4be01a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\">
        ";
        
        $__internal_80b1a532fc5bfea25d0be8e334a86c5270739b7508703375bffe7c6f4be01a98->leave($__internal_80b1a532fc5bfea25d0be8e334a86c5270739b7508703375bffe7c6f4be01a98_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c109dfc98ab6253304385c868d7047c7c1ab40739749c0c425bf5caf0c469ac = $this->env->getExtension("native_profiler");
        $__internal_2c109dfc98ab6253304385c868d7047c7c1ab40739749c0c425bf5caf0c469ac->enter($__internal_2c109dfc98ab6253304385c868d7047c7c1ab40739749c0c425bf5caf0c469ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c109dfc98ab6253304385c868d7047c7c1ab40739749c0c425bf5caf0c469ac->leave($__internal_2c109dfc98ab6253304385c868d7047c7c1ab40739749c0c425bf5caf0c469ac_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6447efac04e0e7d6b46b732694c769781a7acb53f216e0e388dd59fb72556dbb = $this->env->getExtension("native_profiler");
        $__internal_6447efac04e0e7d6b46b732694c769781a7acb53f216e0e388dd59fb72556dbb->enter($__internal_6447efac04e0e7d6b46b732694c769781a7acb53f216e0e388dd59fb72556dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6447efac04e0e7d6b46b732694c769781a7acb53f216e0e388dd59fb72556dbb->leave($__internal_6447efac04e0e7d6b46b732694c769781a7acb53f216e0e388dd59fb72556dbb_prof);

    }

    public function getTemplateName()
    {
        return "fullscreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 35,  126 => 26,  118 => 7,  112 => 6,  100 => 5,  91 => 36,  89 => 35,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  61 => 27,  59 => 26,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bienvenido!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style>*/
/*                 *{ margin: 0; padding: 0;}*/
/* */
/*                 html, body{*/
/*                     width: 100%;*/
/*                     height: 100%;*/
/*                 }*/
/*                 #content{*/
/*                     width: 100%;*/
/*                     height: 100%;*/
/*                     min-height: 100%;*/
/*                     background-color: #AEF6EB;*/
/*                 }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*             {% block body %}{% endblock %}*/
/* */
/*             <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>*/
/*             <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*             <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*             <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/*             <script src="{{asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>*/
/*             <script src="{{asset('js/functions.js')}}"></script>*/
/* */
/*             {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
