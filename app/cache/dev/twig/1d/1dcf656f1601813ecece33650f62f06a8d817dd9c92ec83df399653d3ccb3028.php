<?php

/* ::center.html.twig */
class __TwigTemplate_7efb7666a354e2d8093a2abc8caaf511af4fff3b0ea8f4cf074967720a4fc53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_600b36863f6374c21e87a3fb0f0e729bf2f14623d36f2c69c54cbf83577492d7 = $this->env->getExtension("native_profiler");
        $__internal_600b36863f6374c21e87a3fb0f0e729bf2f14623d36f2c69c54cbf83577492d7->enter($__internal_600b36863f6374c21e87a3fb0f0e729bf2f14623d36f2c69c54cbf83577492d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::center.html.twig"));

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
        <div class=\"login\" data-lbg=\"teal\">
            <!-- Login -->
            <div class=\"l-block toggled\" id=\"l-login\">
                ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "            </div>
        </div>
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

        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_600b36863f6374c21e87a3fb0f0e729bf2f14623d36f2c69c54cbf83577492d7->leave($__internal_600b36863f6374c21e87a3fb0f0e729bf2f14623d36f2c69c54cbf83577492d7_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_017b49a4b457522aa9ac58474eaaf37d3f58eff91f7d513ad53d1b74374de6d8 = $this->env->getExtension("native_profiler");
        $__internal_017b49a4b457522aa9ac58474eaaf37d3f58eff91f7d513ad53d1b74374de6d8->enter($__internal_017b49a4b457522aa9ac58474eaaf37d3f58eff91f7d513ad53d1b74374de6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "                <div class=\"lb-header palette-Teal bg\">
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
                ";
        
        $__internal_017b49a4b457522aa9ac58474eaaf37d3f58eff91f7d513ad53d1b74374de6d8->leave($__internal_017b49a4b457522aa9ac58474eaaf37d3f58eff91f7d513ad53d1b74374de6d8_prof);

    }

    public function getTemplateName()
    {
        return "::center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  95 => 24,  83 => 58,  78 => 56,  74 => 55,  70 => 54,  65 => 51,  63 => 24,  53 => 17,  49 => 16,  43 => 13,  39 => 12,  35 => 11,  23 => 1,);
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
/*         <div class="login" data-lbg="teal">*/
/*             <!-- Login -->*/
/*             <div class="l-block toggled" id="l-login">*/
/*                 {% block body %}*/
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
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         <!-- Javascript Libraries -->*/
/*         <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('js/functions.js')}}"></script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
