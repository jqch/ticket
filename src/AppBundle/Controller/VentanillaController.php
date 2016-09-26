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
        try {
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();

            $operador = $em->getRepository('AppBundle:Operador')->find(1);
            $fecha = date('d-m-Y');
            $operadorTipo = 2;

            $em->getConnection()->commit();
            return $this->render('Ventanilla/ventanilla.html.twig', array(
                'operadorId'=>$operador->getId(),
                'operadorTipo'=>$operadorTipo,
                'fecha'=>$fecha
            ));

        } catch (Exception $e) {

        }

    }

     /**
     * @Route("/tickets_espera", name="ventanilla_tickets_espera")
     */
    public function ticketsEsperaAction(Request $request)
    {
        try {
            $operadorId = $request->get('operadorId');
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $serviciosOperador = $em->getRepository('AppBundle:OperadorServicio')->findBy(array('operador'=>$operadorId));
            $arrayServicios = array();
            foreach ($serviciosOperador as $so) {
                $arrayServicios[] = $so->getServicio()->getId();
            }
            //dump($arrayServicios);die;
            $enEspera = $em->createQueryBuilder()
                                    ->select('t.id')
                                    ->from('AppBundle:Ticket','t')
                                    ->innerJoin('AppBundle:Servicio','s','with','t.servicio = s.id')
                                    ->innerJoin('AppBundle:TicketEstado','te','with','t.ticketEstado = te.id')
                                    ->where('Date(t.fechahora) = :fechaActual')
                                    ->andWhere('s.id IN (:servicios)')
                                    ->andWhere('te.id = 0')
                                    ->orderBy('t.fechahora','DESC')
                                    ->setParameter('fechaActual',new \DateTime('now'))
                                    ->setParameter('servicios',$arrayServicios)
                                    ->getQuery()
                                    ->getResult();

            $em->getConnection()->commit();
            $enEspera = count($enEspera);
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
            $operadorId = $request->get('operadorId');

            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $serviciosOperador = $em->getRepository('AppBundle:OperadorServicio')->findBy(array('operador'=>$operadorId));
            $arrayServicios = array();
            foreach ($serviciosOperador as $so) {
                $arrayServicios[] = $so->getServicio()->getId();
            }
            //dump($arrayServicios);die;
            $siguiente = $em->createQueryBuilder()
                                    ->select('t')
                                    ->from('AppBundle:Ticket','t')
                                    ->innerJoin('AppBundle:Servicio','s','with','t.servicio = s.id')
                                    ->innerJoin('AppBundle:TicketEstado','te','with','t.ticketEstado = te.id')
                                    ->where('Date(t.fechahora) = :fechaActual')
                                    ->andWhere('s.id IN (:servicios)')
                                    ->andWhere('te.id = 0')
                                    ->orderBy('t.fechahora','DESC')
                                    ->setMaxResults(1)
                                    ->setParameter('fechaActual',new \DateTime('now'))
                                    ->setParameter('servicios',$arrayServicios)
                                    ->getQuery()
                                    ->getResult();

            $em->getConnection()->commit();
            return new JsonResponse(array('nextTicketNumber'=>$siguiente[0]->getCodigoticket(),'fecha'=>date('d-m-Y')));
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
