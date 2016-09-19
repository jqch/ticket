<?php

/* Login/login.html.twig */
class __TwigTemplate_d2377aa69c2f1398471c2adb992633822d0c642c3bea23a27c1e0f45534227ca extends Twig_Template
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
        $__internal_d51d86140bd82210bbd5d3b0d9299022832c576d790ad92f2edff5cbd755ef5e = $this->env->getExtension("native_profiler");
        $__internal_d51d86140bd82210bbd5d3b0d9299022832c576d790ad92f2edff5cbd755ef5e->enter($__internal_d51d86140bd82210bbd5d3b0d9299022832c576d790ad92f2edff5cbd755ef5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Login/login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
    <!--[if IE 9 ]><html class=\"ie9\"><![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Material Admin</title>

        <!-- Vendor CSS -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/google-material-color/dist/palette.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.min.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body>
        <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"login\" data-lbg=\"teal\">
            <!-- Login -->
            <div class=\"l-block toggled\" id=\"l-login\">
                <div class=\"lb-header palette-Teal bg\">
                    <i class=\"zmdi zmdi-account-circle\"></i>
                    Hola! Por favor registrese
                </div>

                <div class=\"lb-body\">
                    <div class=\"form-group fg-float\">
                        <div class=\"fg-line\">
                            <input type=\"text\" class=\"input-sm form-control fg-input\" name=\"usuario\">
                            <label class=\"fg-label\">Usuario</label>
                        </div>
                    </div>

                    <div class=\"form-group fg-float\">
                        <div class=\"fg-line\">
                            <input type=\"password\" class=\"input-sm form-control fg-input\">
                            <label class=\"fg-label\">Contrasena</label>
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn palette-Teal bg\">Ingresar</button>

                    <div class=\"m-t-20\">
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Javascript Libraries -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_d51d86140bd82210bbd5d3b0d9299022832c576d790ad92f2edff5cbd755ef5e->leave($__internal_d51d86140bd82210bbd5d3b0d9299022832c576d790ad92f2edff5cbd755ef5e_prof);

    }

    public function getTemplateName()
    {
        return "Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 63,  110 => 60,  103 => 56,  99 => 55,  95 => 54,  59 => 21,  52 => 17,  48 => 16,  42 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/*     <!--[if IE 9 ]><html class="ie9"><![endif]-->*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>Material Admin</title>*/
/* */
/*         <!-- Vendor CSS -->*/
/*         <link href="{{asset('vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bower_components/google-material-color/dist/palette.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">*/
/* */
/*         <!-- CSS -->*/
/*         <link href="{{asset('css/app.min.1.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('css/app.min.2.css')}}" rel="stylesheet">*/
/*     </head>*/
/* */
/*     <body>*/
/*         <form action="{{path('login_check')}}" method="post">*/
/*         <div class="login" data-lbg="teal">*/
/*             <!-- Login -->*/
/*             <div class="l-block toggled" id="l-login">*/
/*                 <div class="lb-header palette-Teal bg">*/
/*                     <i class="zmdi zmdi-account-circle"></i>*/
/*                     Hola! Por favor registrese*/
/*                 </div>*/
/* */
/*                 <div class="lb-body">*/
/*                     <div class="form-group fg-float">*/
/*                         <div class="fg-line">*/
/*                             <input type="text" class="input-sm form-control fg-input" name="usuario">*/
/*                             <label class="fg-label">Usuario</label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group fg-float">*/
/*                         <div class="fg-line">*/
/*                             <input type="password" class="input-sm form-control fg-input">*/
/*                             <label class="fg-label">Contrasena</label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <button type="submit" class="btn palette-Teal bg">Ingresar</button>*/
/* */
/*                     <div class="m-t-20">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </form>*/
/*         <!-- Javascript Libraries -->*/
/*         <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>*/
/* */
/*         <!-- Placeholder for IE9 -->*/
/*         <!--[if IE 9 ]>*/
/*             <script src="{{asset('vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js')}}"></script>*/
/*         <![endif]-->*/
/* */
/*         <script src="{{asset('js/functions.js')}}"></script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
