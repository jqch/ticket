<?php

/* Ventanilla/ventanilla.html.twig */
class __TwigTemplate_eefea15aa7af0888452475a98adde24ff94c4ee94a6b664db6e025f11487df6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Ventanilla/ventanilla.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e10ed18240a806bec4de590a32f8e668b25019df912e9bc7d9921ee3d2d86d4 = $this->env->getExtension("native_profiler");
        $__internal_7e10ed18240a806bec4de590a32f8e668b25019df912e9bc7d9921ee3d2d86d4->enter($__internal_7e10ed18240a806bec4de590a32f8e668b25019df912e9bc7d9921ee3d2d86d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ventanilla/ventanilla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e10ed18240a806bec4de590a32f8e668b25019df912e9bc7d9921ee3d2d86d4->leave($__internal_7e10ed18240a806bec4de590a32f8e668b25019df912e9bc7d9921ee3d2d86d4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7d939ff44d288bf6f3159342cbcbd45548bb8ce92b716a35d2560996379e352 = $this->env->getExtension("native_profiler");
        $__internal_d7d939ff44d288bf6f3159342cbcbd45548bb8ce92b716a35d2560996379e352->enter($__internal_d7d939ff44d288bf6f3159342cbcbd45548bb8ce92b716a35d2560996379e352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        .ficha{
            padding: 10px;
            background-color: #222222;
            font-size: 4em;
            font-weight: bold;
            text-align: center;
            color: #FFFFFF;
            min-height: 100px;
        }
    </style>
";
        
        $__internal_d7d939ff44d288bf6f3159342cbcbd45548bb8ce92b716a35d2560996379e352->leave($__internal_d7d939ff44d288bf6f3159342cbcbd45548bb8ce92b716a35d2560996379e352_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_835ab2cd9f3a7af55528437f83f26d4d4b94e7ebbb8b172ed130db2b0049003a = $this->env->getExtension("native_profiler");
        $__internal_835ab2cd9f3a7af55528437f83f26d4d4b94e7ebbb8b172ed130db2b0049003a->enter($__internal_835ab2cd9f3a7af55528437f83f26d4d4b94e7ebbb8b172ed130db2b0049003a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <input type=\"hidden\" id=\"operadorId\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["operadorId"]) ? $context["operadorId"] : $this->getContext($context, "operadorId")), "html", null, true);
        echo "\">

    <div class=\"c-header\">
        <h2>Atencion en Ventanilla</h2>
    </div>
    <div class=\"card clearfix\" id=\"messages\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\"><h2>Total Tickets:</h2></div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                <h1 id=\"ticketsEsperaCantidad\"></h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding-bottom:20px\">
                <button id=\"btn-llamar\" class=\"btn btn-primary nivel1\" onclick=\"nextTicket(";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["operadorTipo"]) ? $context["operadorTipo"] : $this->getContext($context, "operadorTipo")), "html", null, true);
        echo ");\">Llamar Siguiente</button>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12\">
                <div class=\"ficha\">

                </div>
                <input type=\"hidden\" id=\"ficha\" value=\"\">
                <input type=\"hidden\" id=\"idTicket\" value=\"\">

                <input type=\"text\" id=\"horaInicio\" value=\"\">
                <input type=\"text\" id=\"horaFin\" value=\"\">

                <input type=\"text\" class=\"reloj\" id=\"Horas\" value=\"00\">
                <input type=\"text\" class=\"reloj\" id=\"Minutos\" value=\"00\">
                <input type=\"text\" class=\"reloj\" id=\"Segundos\" value=\"00\">
                <input type=\"text\" class=\"reloj\" id=\"Centesimas\" value=\"00\">

            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-12\">
                <button id=\"btn-rellamar\" class=\"btn btn-primary nivel2\" onclick=\"rellamar();\">Re-llamar</button>
                <button id=\"btn-suspender\" class=\"btn palette-Red bg waves-effect nivel2\" onclick=\"suspender()\">Suspender/Anular</button>
                <br><br>
                <label for=\"\">Transaccion del cliente:</label>
                <select name=\"\" id=\"transaccion\" class=\"nivel2\">
                    <option value=\"\">Seleccionar...</option>
                    <option value=\"1\">Cobro de cheque</option>
                    <option value=\"2\">Pago de servicios</option>
                </select><br><br>
                <button id=\"btn-iniciar\" class=\"btn palette-Indigo bg waves-effect nivel3\" onclick=\"iniciar()\">Iniciar</button>
                <button id=\"btn-pausar\" class=\"btn palette-Purple bg waves-effect nivel4\" onclick=\"pausarContinuar()\">Pausar</button>
                <button id=\"btn-finalizar\" class=\"btn palette-Green bg waves-effect nivel4\" onclick=\"finalizar()\">Finalizar</button><br><br>
                    <select name=\"\" id=\"siguienteOperador\" class=\"nivel4\">
                        <option value=\"\">Seleccionar...</option>
                        <option value=\"\">Jefe de Cajeros</option>
                        <option value=\"\">Supervisor</option>
                    </select>
                    <button class=\"btn palette-Orange bg waves-effect nivel4\">Derivar</button>
            </div>
        </div>
    </div>
";
        
        $__internal_835ab2cd9f3a7af55528437f83f26d4d4b94e7ebbb8b172ed130db2b0049003a->leave($__internal_835ab2cd9f3a7af55528437f83f26d4d4b94e7ebbb8b172ed130db2b0049003a_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc5c8d31e1798fcc182335a1efee7bae75d66c47515254406813512f1a24fac8 = $this->env->getExtension("native_profiler");
        $__internal_bc5c8d31e1798fcc182335a1efee7bae75d66c47515254406813512f1a24fac8->enter($__internal_bc5c8d31e1798fcc182335a1efee7bae75d66c47515254406813512f1a24fac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "    <script type=\"text/javascript\">
        var xhr, xhr1,xhr2,xhr3,xhr4,xhr5,xhr6;
        var centesimas = 0;
        var segundos = 0;
        var minutos = 0;
        var horas = 0;

        \$(document).ready(function() {
            \$('.nivel2').attr('disabled','disabled');
            \$('.nivel3').attr('disabled','disabled');
            \$('.nivel4').attr('disabled','disabled');
            function ticketsEspera(operadorTipo){
                if (xhr && xhr.readyState != 4) {
                        xhr.abort();
                }
                xhr = \$.ajax({
                        type: 'post',
                        cache: false,
                        data: {operadorTipo: operadorTipo},
                        url: \"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("ventanilla_tickets_espera");
        echo "\",
                        beforeSend: function () {

                        },
                        success: function (data) {
                            \$('#ticketsEsperaCantidad').empty();
                            \$('#ticketsEsperaCantidad').append(data.enEspera);
                        },
                        statusCode: {
                            500: function () {

                            },
                            404: function () {

                            }
                        }
                });
            }

            setInterval(function(){
                ticketsEspera(";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["operadorTipo"]) ? $context["operadorTipo"] : $this->getContext($context, "operadorTipo")), "html", null, true);
        echo ");
            }, 1000);

        });

        function nextTicket(){

            var operadorTipo = \$('#operadorTipo').val();
            if (xhr1 && xhr1.readyState != 4) {
                    xhr1.abort();
            }
            xhr1 = \$.ajax({
                    type: 'post',
                    cache: false,
                    data: {operadorTipo: operadorTipo},
                    url: \"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("ventanilla_next_ticket");
        echo "\",
                    beforeSend: function () {

                    },
                    success: function (data) {
                        \$('#ficha').val(data.nextTicketNumber);
                        \$('.ficha').empty();
                        \$('.ficha').append(data.nextTicketNumber);
                        \$('.nivel1').attr('disabled','disabled');
                        \$('.nivel2').removeAttr('disabled');
                    },
                    statusCode: {
                        500: function () {

                        },
                        404: function () {

                        }
                    }
            });
        }

        function cronometro () {
            if (centesimas < 99) {
                centesimas++;
                if (centesimas < 10) { centesimas = \"0\"+centesimas }
                \$('#Centesimas').val(centesimas);
            }
            if (centesimas == 99) {
                centesimas = -1;
            }
            if (centesimas == 0) {
                segundos ++;
                if (segundos < 10) { segundos = \"0\"+segundos }
                \$('#Segundos').val(segundos);
            }
            if (segundos == 59) {
                segundos = -1;
            }
            if ( (centesimas == 0)&&(segundos == 0) ) {
                minutos++;
                if (minutos < 10) { minutos = \"0\"+minutos }
                \$('#Minutos').val(minutos);
            }
            if (minutos == 59) {
                minutos = -1;
            }
            if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
                horas ++;
                if (horas < 10) { horas = \"0\"+horas }
                \$('#Horas').val(horas);
            }
        }



        // funciones para resetear los combos
        function resetearCombos(){
                \$('#transaccion').val(\"\").attr('selected', 'selected');
                \$('#siguienteOperador').val(\"\").attr('selected', 'selected');
        }
        function rellamar(){
            var idTicket = \$('#idTicket').val();
            if (xhr2 && xhr2.readyState != 4) {
                    xhr2.abort();
            }
            xhr2 = \$.ajax({
                    type: 'post',
                    cache: false,
                    data: {idTicket: idTicket},
                    url: \"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("ventanilla_rellamar");
        echo "\",
                    beforeSend: function () {

                    },
                    success: function (data) {

                    },
                    statusCode: {
                        500: function () {

                        },
                        404: function () {

                        }
                    }
            });
        }
        function suspender(){
            var idTicket = \$('#idTicket').val();
            if (xhr3 && xhr3.readyState != 4) {
                    xhr3.abort();
            }
            xhr3 = \$.ajax({
                    type: 'post',
                    cache: false,
                    data: {idTicket: idTicket},
                    url: \"";
        // line 225
        echo $this->env->getExtension('routing')->getPath("ventanilla_suspender");
        echo "\",
                    beforeSend: function () {

                    },
                    success: function (data) {
                        \$('.nivel1').removeAttr('disabled');
                        \$('.nivel2').attr('disabled','disabled');
                        \$('.nivel3').attr('disabled','disabled');
                        \$('.nivel4').attr('disabled','disabled');
                        resetearCombos();
                    },
                    statusCode: {
                        500: function () {

                        },
                        404: function () {

                        }
                    }
            });
        }

        \$('#transaccion').change( function(){
            if(this.value == \"\"){
                \$('.nivel3').attr('disabled','disabled');
                \$('.nivel4').attr('disabled','disabled');
            }else{
                \$('.nivel3').removeAttr('disabled');
            }
        });

        function iniciar(){

            var idTicket = \$('#idTicket').val();
            var idTransaccion = \$('#transaccion').val();
            if (xhr4 && xhr4.readyState != 4) {
                    xhr4.abort();
            }
            xhr4 = \$.ajax({
                    type: 'post',
                    cache: false,
                    data: {idTicket: idTicket, idTransaccion: idTransaccion},
                    url: \"";
        // line 267
        echo $this->env->getExtension('routing')->getPath("ventanilla_iniciar");
        echo "\",
                    beforeSend: function () {

                    },
                    success: function (data) {
                        control = setInterval(cronometro,10);
                        \$('.nivel2').attr('disabled','disabled');
                        \$('.nivel3').attr('disabled','disabled');
                        \$('.nivel4').removeAttr('disabled');

                        \$('#horaInicio').val(data.horaInicio);
                    },
                    statusCode: {
                        500: function () {

                        },
                        404: function () {

                        }
                    }
            });
        }

        function pausarContinuar(){
            var idTicket = \$('#idTicket').val();
            var idTransaccion = \$('#transaccion').val();
            if (xhr5 && xhr5.readyState != 4) {
                    xhr5.abort();
            }

            if(\$('#btn-pausar').text() == \"Pausar\"){ // pausar
                xhr5 = \$.ajax({
                        type: 'post',
                        cache: false,
                        data: {idTicket: idTicket, idTransaccion: idTransaccion},
                        url: \"";
        // line 302
        echo $this->env->getExtension('routing')->getPath("ventanilla_pausar");
        echo "\",
                        beforeSend: function () {

                        },
                        success: function (data) {
                            clearInterval(control);
                            \$('#btn-pausar').text('Continuar');
                        },
                        statusCode: {
                            500: function () {

                            },
                            404: function () {

                            }
                        }
                });

            }else{  // Continuar
                xhr5 = \$.ajax({
                        type: 'post',
                        cache: false,
                        data: {idTicket: idTicket, idTransaccion: idTransaccion},
                        url: \"";
        // line 325
        echo $this->env->getExtension('routing')->getPath("ventanilla_continuar");
        echo "\",
                        beforeSend: function () {

                        },
                        success: function (data) {
                            control = setInterval(cronometro,10);
                            \$('#btn-pausar').text('Pausar');
                        },
                        statusCode: {
                            500: function () {

                            },
                            404: function () {

                            }
                        }
                });
            }
        }

        function finalizar(){
            var idTicket = \$('#idTicket').val();
            var idTransaccion = \$('#transaccion').val();
            if (xhr6 && xhr6.readyState != 4) {
                    xhr6.abort();
            }
            xhr6 = \$.ajax({
                type: 'post',
                cache: false,
                data: {idTicket: idTicket, idTransaccion: idTransaccion},
                url: \"";
        // line 355
        echo $this->env->getExtension('routing')->getPath("ventanilla_finalizar");
        echo "\",
                beforeSend: function () {

                },
                success: function (data) {
                    clearInterval(control);
                    centesimas = 0;
                    segundos = 0;
                    minutos = 0;
                    horas = 0;
                    \$('#Centesimas').val(\"00\");
                    \$('#Segundos').val(\"00\");
                    \$('#Minutos').val(\"00\");
                    \$('#Horas').val(\"00\");

                    \$('.nivel1').removeAttr('disabled');
                    \$('.nivel2').attr('disabled','disabled');
                    \$('.nivel3').attr('disabled','disabled');
                    \$('.nivel4').attr('disabled','disabled');
                    resetearCombos();
                },
                statusCode: {
                    500: function () {

                    },
                    404: function () {

                    }
                }
            });
        }

    </script>
";
        
        $__internal_bc5c8d31e1798fcc182335a1efee7bae75d66c47515254406813512f1a24fac8->leave($__internal_bc5c8d31e1798fcc182335a1efee7bae75d66c47515254406813512f1a24fac8_prof);

    }

    public function getTemplateName()
    {
        return "Ventanilla/ventanilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 355,  415 => 325,  389 => 302,  351 => 267,  306 => 225,  277 => 199,  204 => 129,  186 => 114,  163 => 94,  142 => 75,  136 => 74,  86 => 31,  69 => 17,  66 => 16,  60 => 15,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <style>*/
/*         .ficha{*/
/*             padding: 10px;*/
/*             background-color: #222222;*/
/*             font-size: 4em;*/
/*             font-weight: bold;*/
/*             text-align: center;*/
/*             color: #FFFFFF;*/
/*             min-height: 100px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     <input type="hidden" id="operadorId" value="{{operadorId}}">*/
/* */
/*     <div class="c-header">*/
/*         <h2>Atencion en Ventanilla</h2>*/
/*     </div>*/
/*     <div class="card clearfix" id="messages">*/
/*         <div class="row">*/
/*             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h2>Total Tickets:</h2></div>*/
/*             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">*/
/*                 <h1 id="ticketsEsperaCantidad"></h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom:20px">*/
/*                 <button id="btn-llamar" class="btn btn-primary nivel1" onclick="nextTicket({{operadorTipo}});">Llamar Siguiente</button>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">*/
/*                 <div class="ficha">*/
/* */
/*                 </div>*/
/*                 <input type="hidden" id="ficha" value="">*/
/*                 <input type="hidden" id="idTicket" value="">*/
/* */
/*                 <input type="text" id="horaInicio" value="">*/
/*                 <input type="text" id="horaFin" value="">*/
/* */
/*                 <input type="text" class="reloj" id="Horas" value="00">*/
/*                 <input type="text" class="reloj" id="Minutos" value="00">*/
/*                 <input type="text" class="reloj" id="Segundos" value="00">*/
/*                 <input type="text" class="reloj" id="Centesimas" value="00">*/
/* */
/*             </div>*/
/*             <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">*/
/*                 <button id="btn-rellamar" class="btn btn-primary nivel2" onclick="rellamar();">Re-llamar</button>*/
/*                 <button id="btn-suspender" class="btn palette-Red bg waves-effect nivel2" onclick="suspender()">Suspender/Anular</button>*/
/*                 <br><br>*/
/*                 <label for="">Transaccion del cliente:</label>*/
/*                 <select name="" id="transaccion" class="nivel2">*/
/*                     <option value="">Seleccionar...</option>*/
/*                     <option value="1">Cobro de cheque</option>*/
/*                     <option value="2">Pago de servicios</option>*/
/*                 </select><br><br>*/
/*                 <button id="btn-iniciar" class="btn palette-Indigo bg waves-effect nivel3" onclick="iniciar()">Iniciar</button>*/
/*                 <button id="btn-pausar" class="btn palette-Purple bg waves-effect nivel4" onclick="pausarContinuar()">Pausar</button>*/
/*                 <button id="btn-finalizar" class="btn palette-Green bg waves-effect nivel4" onclick="finalizar()">Finalizar</button><br><br>*/
/*                     <select name="" id="siguienteOperador" class="nivel4">*/
/*                         <option value="">Seleccionar...</option>*/
/*                         <option value="">Jefe de Cajeros</option>*/
/*                         <option value="">Supervisor</option>*/
/*                     </select>*/
/*                     <button class="btn palette-Orange bg waves-effect nivel4">Derivar</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*         var xhr, xhr1,xhr2,xhr3,xhr4,xhr5,xhr6;*/
/*         var centesimas = 0;*/
/*         var segundos = 0;*/
/*         var minutos = 0;*/
/*         var horas = 0;*/
/* */
/*         $(document).ready(function() {*/
/*             $('.nivel2').attr('disabled','disabled');*/
/*             $('.nivel3').attr('disabled','disabled');*/
/*             $('.nivel4').attr('disabled','disabled');*/
/*             function ticketsEspera(operadorTipo){*/
/*                 if (xhr && xhr.readyState != 4) {*/
/*                         xhr.abort();*/
/*                 }*/
/*                 xhr = $.ajax({*/
/*                         type: 'post',*/
/*                         cache: false,*/
/*                         data: {operadorTipo: operadorTipo},*/
/*                         url: "{{ path('ventanilla_tickets_espera') }}",*/
/*                         beforeSend: function () {*/
/* */
/*                         },*/
/*                         success: function (data) {*/
/*                             $('#ticketsEsperaCantidad').empty();*/
/*                             $('#ticketsEsperaCantidad').append(data.enEspera);*/
/*                         },*/
/*                         statusCode: {*/
/*                             500: function () {*/
/* */
/*                             },*/
/*                             404: function () {*/
/* */
/*                             }*/
/*                         }*/
/*                 });*/
/*             }*/
/* */
/*             setInterval(function(){*/
/*                 ticketsEspera({{operadorTipo}});*/
/*             }, 1000);*/
/* */
/*         });*/
/* */
/*         function nextTicket(){*/
/* */
/*             var operadorTipo = $('#operadorTipo').val();*/
/*             if (xhr1 && xhr1.readyState != 4) {*/
/*                     xhr1.abort();*/
/*             }*/
/*             xhr1 = $.ajax({*/
/*                     type: 'post',*/
/*                     cache: false,*/
/*                     data: {operadorTipo: operadorTipo},*/
/*                     url: "{{ path('ventanilla_next_ticket') }}",*/
/*                     beforeSend: function () {*/
/* */
/*                     },*/
/*                     success: function (data) {*/
/*                         $('#ficha').val(data.nextTicketNumber);*/
/*                         $('.ficha').empty();*/
/*                         $('.ficha').append(data.nextTicketNumber);*/
/*                         $('.nivel1').attr('disabled','disabled');*/
/*                         $('.nivel2').removeAttr('disabled');*/
/*                     },*/
/*                     statusCode: {*/
/*                         500: function () {*/
/* */
/*                         },*/
/*                         404: function () {*/
/* */
/*                         }*/
/*                     }*/
/*             });*/
/*         }*/
/* */
/*         function cronometro () {*/
/*             if (centesimas < 99) {*/
/*                 centesimas++;*/
/*                 if (centesimas < 10) { centesimas = "0"+centesimas }*/
/*                 $('#Centesimas').val(centesimas);*/
/*             }*/
/*             if (centesimas == 99) {*/
/*                 centesimas = -1;*/
/*             }*/
/*             if (centesimas == 0) {*/
/*                 segundos ++;*/
/*                 if (segundos < 10) { segundos = "0"+segundos }*/
/*                 $('#Segundos').val(segundos);*/
/*             }*/
/*             if (segundos == 59) {*/
/*                 segundos = -1;*/
/*             }*/
/*             if ( (centesimas == 0)&&(segundos == 0) ) {*/
/*                 minutos++;*/
/*                 if (minutos < 10) { minutos = "0"+minutos }*/
/*                 $('#Minutos').val(minutos);*/
/*             }*/
/*             if (minutos == 59) {*/
/*                 minutos = -1;*/
/*             }*/
/*             if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {*/
/*                 horas ++;*/
/*                 if (horas < 10) { horas = "0"+horas }*/
/*                 $('#Horas').val(horas);*/
/*             }*/
/*         }*/
/* */
/* */
/* */
/*         // funciones para resetear los combos*/
/*         function resetearCombos(){*/
/*                 $('#transaccion').val("").attr('selected', 'selected');*/
/*                 $('#siguienteOperador').val("").attr('selected', 'selected');*/
/*         }*/
/*         function rellamar(){*/
/*             var idTicket = $('#idTicket').val();*/
/*             if (xhr2 && xhr2.readyState != 4) {*/
/*                     xhr2.abort();*/
/*             }*/
/*             xhr2 = $.ajax({*/
/*                     type: 'post',*/
/*                     cache: false,*/
/*                     data: {idTicket: idTicket},*/
/*                     url: "{{ path('ventanilla_rellamar') }}",*/
/*                     beforeSend: function () {*/
/* */
/*                     },*/
/*                     success: function (data) {*/
/* */
/*                     },*/
/*                     statusCode: {*/
/*                         500: function () {*/
/* */
/*                         },*/
/*                         404: function () {*/
/* */
/*                         }*/
/*                     }*/
/*             });*/
/*         }*/
/*         function suspender(){*/
/*             var idTicket = $('#idTicket').val();*/
/*             if (xhr3 && xhr3.readyState != 4) {*/
/*                     xhr3.abort();*/
/*             }*/
/*             xhr3 = $.ajax({*/
/*                     type: 'post',*/
/*                     cache: false,*/
/*                     data: {idTicket: idTicket},*/
/*                     url: "{{ path('ventanilla_suspender') }}",*/
/*                     beforeSend: function () {*/
/* */
/*                     },*/
/*                     success: function (data) {*/
/*                         $('.nivel1').removeAttr('disabled');*/
/*                         $('.nivel2').attr('disabled','disabled');*/
/*                         $('.nivel3').attr('disabled','disabled');*/
/*                         $('.nivel4').attr('disabled','disabled');*/
/*                         resetearCombos();*/
/*                     },*/
/*                     statusCode: {*/
/*                         500: function () {*/
/* */
/*                         },*/
/*                         404: function () {*/
/* */
/*                         }*/
/*                     }*/
/*             });*/
/*         }*/
/* */
/*         $('#transaccion').change( function(){*/
/*             if(this.value == ""){*/
/*                 $('.nivel3').attr('disabled','disabled');*/
/*                 $('.nivel4').attr('disabled','disabled');*/
/*             }else{*/
/*                 $('.nivel3').removeAttr('disabled');*/
/*             }*/
/*         });*/
/* */
/*         function iniciar(){*/
/* */
/*             var idTicket = $('#idTicket').val();*/
/*             var idTransaccion = $('#transaccion').val();*/
/*             if (xhr4 && xhr4.readyState != 4) {*/
/*                     xhr4.abort();*/
/*             }*/
/*             xhr4 = $.ajax({*/
/*                     type: 'post',*/
/*                     cache: false,*/
/*                     data: {idTicket: idTicket, idTransaccion: idTransaccion},*/
/*                     url: "{{ path('ventanilla_iniciar') }}",*/
/*                     beforeSend: function () {*/
/* */
/*                     },*/
/*                     success: function (data) {*/
/*                         control = setInterval(cronometro,10);*/
/*                         $('.nivel2').attr('disabled','disabled');*/
/*                         $('.nivel3').attr('disabled','disabled');*/
/*                         $('.nivel4').removeAttr('disabled');*/
/* */
/*                         $('#horaInicio').val(data.horaInicio);*/
/*                     },*/
/*                     statusCode: {*/
/*                         500: function () {*/
/* */
/*                         },*/
/*                         404: function () {*/
/* */
/*                         }*/
/*                     }*/
/*             });*/
/*         }*/
/* */
/*         function pausarContinuar(){*/
/*             var idTicket = $('#idTicket').val();*/
/*             var idTransaccion = $('#transaccion').val();*/
/*             if (xhr5 && xhr5.readyState != 4) {*/
/*                     xhr5.abort();*/
/*             }*/
/* */
/*             if($('#btn-pausar').text() == "Pausar"){ // pausar*/
/*                 xhr5 = $.ajax({*/
/*                         type: 'post',*/
/*                         cache: false,*/
/*                         data: {idTicket: idTicket, idTransaccion: idTransaccion},*/
/*                         url: "{{ path('ventanilla_pausar') }}",*/
/*                         beforeSend: function () {*/
/* */
/*                         },*/
/*                         success: function (data) {*/
/*                             clearInterval(control);*/
/*                             $('#btn-pausar').text('Continuar');*/
/*                         },*/
/*                         statusCode: {*/
/*                             500: function () {*/
/* */
/*                             },*/
/*                             404: function () {*/
/* */
/*                             }*/
/*                         }*/
/*                 });*/
/* */
/*             }else{  // Continuar*/
/*                 xhr5 = $.ajax({*/
/*                         type: 'post',*/
/*                         cache: false,*/
/*                         data: {idTicket: idTicket, idTransaccion: idTransaccion},*/
/*                         url: "{{ path('ventanilla_continuar') }}",*/
/*                         beforeSend: function () {*/
/* */
/*                         },*/
/*                         success: function (data) {*/
/*                             control = setInterval(cronometro,10);*/
/*                             $('#btn-pausar').text('Pausar');*/
/*                         },*/
/*                         statusCode: {*/
/*                             500: function () {*/
/* */
/*                             },*/
/*                             404: function () {*/
/* */
/*                             }*/
/*                         }*/
/*                 });*/
/*             }*/
/*         }*/
/* */
/*         function finalizar(){*/
/*             var idTicket = $('#idTicket').val();*/
/*             var idTransaccion = $('#transaccion').val();*/
/*             if (xhr6 && xhr6.readyState != 4) {*/
/*                     xhr6.abort();*/
/*             }*/
/*             xhr6 = $.ajax({*/
/*                 type: 'post',*/
/*                 cache: false,*/
/*                 data: {idTicket: idTicket, idTransaccion: idTransaccion},*/
/*                 url: "{{ path('ventanilla_finalizar') }}",*/
/*                 beforeSend: function () {*/
/* */
/*                 },*/
/*                 success: function (data) {*/
/*                     clearInterval(control);*/
/*                     centesimas = 0;*/
/*                     segundos = 0;*/
/*                     minutos = 0;*/
/*                     horas = 0;*/
/*                     $('#Centesimas').val("00");*/
/*                     $('#Segundos').val("00");*/
/*                     $('#Minutos').val("00");*/
/*                     $('#Horas').val("00");*/
/* */
/*                     $('.nivel1').removeAttr('disabled');*/
/*                     $('.nivel2').attr('disabled','disabled');*/
/*                     $('.nivel3').attr('disabled','disabled');*/
/*                     $('.nivel4').attr('disabled','disabled');*/
/*                     resetearCombos();*/
/*                 },*/
/*                 statusCode: {*/
/*                     500: function () {*/
/* */
/*                     },*/
/*                     404: function () {*/
/* */
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
