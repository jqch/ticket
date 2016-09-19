<?php

/* :Pantalla:pantalla.html.twig */
class __TwigTemplate_935a601d06e1d9cfb60483358d1cee1516260632d1343df8330e31a6156aacc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("fullscreen.html.twig", ":Pantalla:pantalla.html.twig", 1);
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
        $__internal_0bcd8b8dbb91df2fb20f52e00b9a006b5e432440f451612fce86bcc153953ba1 = $this->env->getExtension("native_profiler");
        $__internal_0bcd8b8dbb91df2fb20f52e00b9a006b5e432440f451612fce86bcc153953ba1->enter($__internal_0bcd8b8dbb91df2fb20f52e00b9a006b5e432440f451612fce86bcc153953ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Pantalla:pantalla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bcd8b8dbb91df2fb20f52e00b9a006b5e432440f451612fce86bcc153953ba1->leave($__internal_0bcd8b8dbb91df2fb20f52e00b9a006b5e432440f451612fce86bcc153953ba1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2f3adabb8f3d24eca590eba319a24e9c770801ab7b83e9e0eedcee66f33537f = $this->env->getExtension("native_profiler");
        $__internal_b2f3adabb8f3d24eca590eba319a24e9c770801ab7b83e9e0eedcee66f33537f->enter($__internal_b2f3adabb8f3d24eca590eba319a24e9c770801ab7b83e9e0eedcee66f33537f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t#cuerpo{
\t\t\twidth: 100%;
\t\t\theight: 90%;
\t\t\tmin-height: 90%;
\t\t\tbackground-color: #000000;
\t\t}
\t\t#video{
\t\t\twidth: 75%;
\t\t\tmin-width: 75%;
\t\t\theight: 100%;
\t\t\tbackground-color: #050202;
\t\t\tfloat: left;
\t\t}
\t\t#logo{
\t\t\twidth: 100%;
\t\t\theight: 20%;
\t\t}
\t\t#botones{
\t\t\twidth: 25%;
\t\t\tmin-width: 25%;
\t\t\theight: 100%;
\t\t\tbackground-color: #00372F;
\t\t\tfloat: right;
\t\t}
\t\t#pie{
\t\t\twidth: 100%;
\t\t\theight: 10%;
\t\t\tmin-height: 10%;
\t\t\tbackground-color: #042A00;
\t\t\tvertical-align: middle;
\t\t}
\t\t#texto{
\t\t\tfont-size: 3.5rem;
\t\t\tcolor: #15CD00;
\t\t}
\t\t.marquee {
\t\t\tdisplay:flex;
\t\t\tjustify-content: center;
\t\t\talign-content: center;
\t\t\tflex-direction: column;

\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tfont-size: 3.5rem;
\t\t\tcolor: #FFFFFF;
\t\t  \toverflow: hidden;
\t\t  \tvertical-align: middle;
\t\t}
\t\t#hora{
\t\t\twidth: 100%;
\t\t\theight: 40%;
\t\t}
\t\t.ficha{
\t\t\twidth: 100%;
\t\t\theight: 20%;
\t\t\tbackground-color: #00372F;
\t\t\tborder-top: 1px solid #006255;
\t\t}

\t</style>
";
        
        $__internal_b2f3adabb8f3d24eca590eba319a24e9c770801ab7b83e9e0eedcee66f33537f->leave($__internal_b2f3adabb8f3d24eca590eba319a24e9c770801ab7b83e9e0eedcee66f33537f_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_68c0c336d972f0ef4b5473e80611c97883fb170fc70803574d082cc7aa39152f = $this->env->getExtension("native_profiler");
        $__internal_68c0c336d972f0ef4b5473e80611c97883fb170fc70803574d082cc7aa39152f->enter($__internal_68c0c336d972f0ef4b5473e80611c97883fb170fc70803574d082cc7aa39152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "\t<div id=\"content\">
\t\t<div id=\"cuerpo\">
\t\t\t<div id=\"video\">
\t\t\t\t<div id=\"logo\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.gif"), "html", null, true);
        echo "\" alt=\"\" style=\"display:none\"></div>
\t\t\t\t<video id=\"reproductor\" width=\"100%\" height=\"80%\" autoplay=\"true\" controls></video>
\t\t\t</div>
\t\t\t<div id=\"botones\">
\t\t\t\t<div id=\"hora\"></div>
\t\t\t\t<div id=\"b1\" class=\"ficha\"></div>
\t\t\t\t<div id=\"b2\" class=\"ficha\"></div>
\t\t\t\t<div id=\"b3\" class=\"ficha\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"pie\">
\t\t\t<!--marquee direction=\"left\" scrolldelay=\"1\" id=\"texto\" loop=\"1\">
\t\t\t\thola
\t\t\t</marquee-->
\t\t\t<div class='marquee' id=\"marquee\"></div>
\t\t\t<input type=\"hidden\" id=\"text\" value=\"\">
\t\t</div>
\t</div>
";
        
        $__internal_68c0c336d972f0ef4b5473e80611c97883fb170fc70803574d082cc7aa39152f->leave($__internal_68c0c336d972f0ef4b5473e80611c97883fb170fc70803574d082cc7aa39152f_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91e0d65ffc43ebd28c2543aefad385a6d00e3ab44b3a1c57006f8e3ffece0f74 = $this->env->getExtension("native_profiler");
        $__internal_91e0d65ffc43ebd28c2543aefad385a6d00e3ab44b3a1c57006f8e3ffece0f74->enter($__internal_91e0d65ffc43ebd28c2543aefad385a6d00e3ab44b3a1c57006f8e3ffece0f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js\" type=\"text/javascript\"></script>
\t<script>
\t\tvar xhr, xhr1;
\t\tvar nextVideo;

\t\t/* Reproductor de video */

\t\t\$(function() {
\t\t\tnextVideo = '/vid/'+'";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["firstVideo"]) ? $context["firstVideo"] : $this->getContext($context, "firstVideo")), "html", null, true);
        echo "';
\t\t\t\$('#reproductor').attr('src', nextVideo);
\t\t\t\$('#reproductor').play();
\t\t});

\t\t\$('#reproductor').on('ended',function(){
\t\t\tif (xhr && xhr.readyState != 4) {
\t            xhr.abort();
\t        }

\t        var currentVideo = \$('#reproductor').attr('src');

\t        xhr = \$.ajax({
\t            type: 'post',
\t            cache: false,
\t            data: {currentVideo: currentVideo},
\t            url: \"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("pantalla_next_video");
        echo "\",
\t            beforeSend: function () {
\t\t\t\t\t//\$('#reproductor').attr('poster', 'img/poster-pantalla.gif');
\t            },
\t            success: function (data) {
\t                \$('#reproductor').stop();
\t\t\t\t\t\$('#reproductor').attr('src', '/vid/' + data.nextVideo );
\t\t\t\t\t\$('#reproductor').play();
\t            },
\t            statusCode: {
\t                500: function () {
\t                \tnextVideo = '/vid/'+'";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["firstVideo"]) ? $context["firstVideo"] : $this->getContext($context, "firstVideo")), "html", null, true);
        echo "';
\t\t\t\t\t\t\$('#reproductor').attr('src', nextVideo);
\t\t\t\t\t\t\$('#reproductor').play();
\t                },
\t                404: function () {
\t                \tnextVideo = '/vid/'+'";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["firstVideo"]) ? $context["firstVideo"] : $this->getContext($context, "firstVideo")), "html", null, true);
        echo "';
\t\t\t\t\t\t\$('#reproductor').attr('src', nextVideo);
\t\t\t\t\t\t\$('#reproductor').play();
\t                }
\t            }
\t        });
\t\t});

\t\t/* animaciones marquesina */

\t\t\$('.marquee').marquee();

\t\t\$('.marquee').bind('finished', function(){
\t\t\tif (xhr1 && xhr1.readyState != 4) {
\t            xhr1.abort();
\t        }
\t\t\tvar currentText = \$('#text').val();

\t\t\txhr1 = \$.ajax({
\t            type: 'post',
\t            cache: false,
\t            data: {currentText: currentText},
\t            url: \"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("pantalla_next_text");
        echo "\",
\t            beforeSend: function () {
\t\t\t\t\t\$('.marquee').empty();
\t            },
\t            success: function (data) {
\t            \t\$('.marquee').empty();
\t                \$('.marquee').text(data.nextText);
\t                \$('.marquee').marquee({
\t                \tduration: 15000
\t                });
\t                \$('#text').val(data.nextText);
\t            },
\t            statusCode: {
\t                500: function () {
\t                \t\$('.marquee').empty();
\t                \t\$('.marquee').text('');
\t                \t\$('.marquee').marquee();
\t                \t\$('#text').val('');
\t                },
\t                404: function () {
\t                \t\$('.marquee').empty();
\t                \t\$('.marquee').text('');
\t                \t\$('.marquee').marquee();
\t                \t\$('#text').val('');
\t                }
\t            }
\t        });
\t\t});

\t\t// Fichas
\t\t\$(document).ready(function(){

\t\t});

\t</script>
";
        
        $__internal_91e0d65ffc43ebd28c2543aefad385a6d00e3ab44b3a1c57006f8e3ffece0f74->leave($__internal_91e0d65ffc43ebd28c2543aefad385a6d00e3ab44b3a1c57006f8e3ffece0f74_prof);

    }

    public function getTemplateName()
    {
        return ":Pantalla:pantalla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 153,  210 => 131,  202 => 126,  188 => 115,  169 => 99,  156 => 90,  150 => 89,  124 => 70,  119 => 67,  113 => 66,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'fullscreen.html.twig' %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<style>*/
/* 		#cuerpo{*/
/* 			width: 100%;*/
/* 			height: 90%;*/
/* 			min-height: 90%;*/
/* 			background-color: #000000;*/
/* 		}*/
/* 		#video{*/
/* 			width: 75%;*/
/* 			min-width: 75%;*/
/* 			height: 100%;*/
/* 			background-color: #050202;*/
/* 			float: left;*/
/* 		}*/
/* 		#logo{*/
/* 			width: 100%;*/
/* 			height: 20%;*/
/* 		}*/
/* 		#botones{*/
/* 			width: 25%;*/
/* 			min-width: 25%;*/
/* 			height: 100%;*/
/* 			background-color: #00372F;*/
/* 			float: right;*/
/* 		}*/
/* 		#pie{*/
/* 			width: 100%;*/
/* 			height: 10%;*/
/* 			min-height: 10%;*/
/* 			background-color: #042A00;*/
/* 			vertical-align: middle;*/
/* 		}*/
/* 		#texto{*/
/* 			font-size: 3.5rem;*/
/* 			color: #15CD00;*/
/* 		}*/
/* 		.marquee {*/
/* 			display:flex;*/
/* 			justify-content: center;*/
/* 			align-content: center;*/
/* 			flex-direction: column;*/
/* */
/* 			width: 100%;*/
/* 			height: 100%;*/
/* 			font-size: 3.5rem;*/
/* 			color: #FFFFFF;*/
/* 		  	overflow: hidden;*/
/* 		  	vertical-align: middle;*/
/* 		}*/
/* 		#hora{*/
/* 			width: 100%;*/
/* 			height: 40%;*/
/* 		}*/
/* 		.ficha{*/
/* 			width: 100%;*/
/* 			height: 20%;*/
/* 			background-color: #00372F;*/
/* 			border-top: 1px solid #006255;*/
/* 		}*/
/* */
/* 	</style>*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content">*/
/* 		<div id="cuerpo">*/
/* 			<div id="video">*/
/* 				<div id="logo"><img src="{{asset('img/logo.gif')}}" alt="" style="display:none"></div>*/
/* 				<video id="reproductor" width="100%" height="80%" autoplay="true" controls></video>*/
/* 			</div>*/
/* 			<div id="botones">*/
/* 				<div id="hora"></div>*/
/* 				<div id="b1" class="ficha"></div>*/
/* 				<div id="b2" class="ficha"></div>*/
/* 				<div id="b3" class="ficha"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="pie">*/
/* 			<!--marquee direction="left" scrolldelay="1" id="texto" loop="1">*/
/* 				hola*/
/* 			</marquee-->*/
/* 			<div class='marquee' id="marquee"></div>*/
/* 			<input type="hidden" id="text" value="">*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* 	{{parent()}}*/
/* 	<script src="//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js" type="text/javascript"></script>*/
/* 	<script>*/
/* 		var xhr, xhr1;*/
/* 		var nextVideo;*/
/* */
/* 		/* Reproductor de video *//* */
/* */
/* 		$(function() {*/
/* 			nextVideo = '/vid/'+'{{firstVideo}}';*/
/* 			$('#reproductor').attr('src', nextVideo);*/
/* 			$('#reproductor').play();*/
/* 		});*/
/* */
/* 		$('#reproductor').on('ended',function(){*/
/* 			if (xhr && xhr.readyState != 4) {*/
/* 	            xhr.abort();*/
/* 	        }*/
/* */
/* 	        var currentVideo = $('#reproductor').attr('src');*/
/* */
/* 	        xhr = $.ajax({*/
/* 	            type: 'post',*/
/* 	            cache: false,*/
/* 	            data: {currentVideo: currentVideo},*/
/* 	            url: "{{ path('pantalla_next_video') }}",*/
/* 	            beforeSend: function () {*/
/* 					//$('#reproductor').attr('poster', 'img/poster-pantalla.gif');*/
/* 	            },*/
/* 	            success: function (data) {*/
/* 	                $('#reproductor').stop();*/
/* 					$('#reproductor').attr('src', '/vid/' + data.nextVideo );*/
/* 					$('#reproductor').play();*/
/* 	            },*/
/* 	            statusCode: {*/
/* 	                500: function () {*/
/* 	                	nextVideo = '/vid/'+'{{firstVideo}}';*/
/* 						$('#reproductor').attr('src', nextVideo);*/
/* 						$('#reproductor').play();*/
/* 	                },*/
/* 	                404: function () {*/
/* 	                	nextVideo = '/vid/'+'{{firstVideo}}';*/
/* 						$('#reproductor').attr('src', nextVideo);*/
/* 						$('#reproductor').play();*/
/* 	                }*/
/* 	            }*/
/* 	        });*/
/* 		});*/
/* */
/* 		/* animaciones marquesina *//* */
/* */
/* 		$('.marquee').marquee();*/
/* */
/* 		$('.marquee').bind('finished', function(){*/
/* 			if (xhr1 && xhr1.readyState != 4) {*/
/* 	            xhr1.abort();*/
/* 	        }*/
/* 			var currentText = $('#text').val();*/
/* */
/* 			xhr1 = $.ajax({*/
/* 	            type: 'post',*/
/* 	            cache: false,*/
/* 	            data: {currentText: currentText},*/
/* 	            url: "{{ path('pantalla_next_text') }}",*/
/* 	            beforeSend: function () {*/
/* 					$('.marquee').empty();*/
/* 	            },*/
/* 	            success: function (data) {*/
/* 	            	$('.marquee').empty();*/
/* 	                $('.marquee').text(data.nextText);*/
/* 	                $('.marquee').marquee({*/
/* 	                	duration: 15000*/
/* 	                });*/
/* 	                $('#text').val(data.nextText);*/
/* 	            },*/
/* 	            statusCode: {*/
/* 	                500: function () {*/
/* 	                	$('.marquee').empty();*/
/* 	                	$('.marquee').text('');*/
/* 	                	$('.marquee').marquee();*/
/* 	                	$('#text').val('');*/
/* 	                },*/
/* 	                404: function () {*/
/* 	                	$('.marquee').empty();*/
/* 	                	$('.marquee').text('');*/
/* 	                	$('.marquee').marquee();*/
/* 	                	$('#text').val('');*/
/* 	                }*/
/* 	            }*/
/* 	        });*/
/* 		});*/
/* */
/* 		// Fichas*/
/* 		$(document).ready(function(){*/
/* */
/* 		});*/
/* */
/* 	</script>*/
/* {% endblock %}*/
/* */
