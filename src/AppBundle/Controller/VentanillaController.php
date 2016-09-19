<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/ventanilla", name="ventanilla")
 */

class VentanillaController extends Controller
{
    /**
     * @Route("/", name="ventanilla_index")
     */
    public function indexAction(Request $request)
    {
        $operadorId = 1;
        $operadorTipo = 2;
        return $this->render('Ventanilla/ventanilla.html.twig', array(
            'operadorId'=>$operadorId,
            'operadorTipo'=>$operadorTipo
        ));
    }

     /**
     * @Route("/tickets_espera", name="ventanilla_tickets_espera")
     */
    public function ticketsEsperaAction(Request $request)
    {
        try {
            $operadorTipo = $request->get('operadorTipo');
            //dump($tipoOperador);die;
            // Consulta de cantidad en espera del dia
            $enEspera = rand(0,10);
            return new JsonResponse(array('enEspera'=>$enEspera));
        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/next_ticket", name="ventanilla_next_ticket")
     */
    public function nextTicketAction(Request $request)
    {
        try {
            $operadorTipo = $request->get('operadorTipo');
            //dump($tipoOperador);die;
            // Consulta de cantidad en espera del dia
            $nextTicketNumber = 'C - 980';
            return new JsonResponse(array('nextTicketNumber'=>$nextTicketNumber));
        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/rellamar", name="ventanilla_rellamar")
     */
    public function rellamarAction(Request $request)
    {
        try {
            $idTicket = $request->get('idTicket');
            // Registrar  la operacion
            return new JsonResponse(array('mensaje'=>'Re-llamando'));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/suspender", name="ventanilla_suspender")
     */
    public function suspenderAction(Request $request)
    {
        try {
            $idTicket = $request->get('idTicket');
            // Registrar  la operacion
            return new JsonResponse(array('mensaje'=>'Suspendido'));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/iniciar", name="ventanilla_iniciar")
     */
    public function iniciarAction(Request $request)
    {
        try {
            $idTicket = $request->get('idTicket');
            $idTransaccion = $request->get('idTransaccion');
            // Registrar  la operacion

            // Obtener la hora
            $horaInicio = date("H:i:s");

            return new JsonResponse(array(
                'mensaje'=>'Iniciando',
                'horaInicio'=>$horaInicio
            ));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/pausar", name="ventanilla_pausar")
     */
    public function pausarAction(Request $request)
    {
        try {
            $idTicket = $request->get('idTicket');
            // Registrar  la operacion

            // Obtener la hora
            $horaInicio = date("H:i:s");

            return new JsonResponse(array(
                'mensaje'=>'Iniciando',
                'horaInicio'=>$horaInicio
            ));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/continuar", name="ventanilla_continuar")
     */
    public function continuarAction(Request $request)
    {
        try {
            $idTicket = $request->get('idTicket');
            // Registrar  la operacion

            // Obtener la hora
            $horaInicio = date("H:i:s");

            return new JsonResponse(array(
                'mensaje'=>'Iniciando',
                'horaInicio'=>$horaInicio
            ));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/finalizar", name="ventanilla_finalizar")
     */
    public function finalizarAction(Request $request)
    {
        try {
            $idTicket = $request->get('idTicket');
            // Registrar  la operacion

            // Obtener la hora
            $horaInicio = date("H:i:s");

            return new JsonResponse(array(
                'mensaje'=>'Iniciando',
                'horaInicio'=>$horaInicio
            ));

        } catch (Exception $e) {

        }
    }
}
