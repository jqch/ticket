<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Ticket;

/**
 * @Route("/ventanilla", name="ventanilla")
 */

class VentanillaController extends Controller
{
    private $cont = 12;
    public $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     * @Route("/", name="ventanilla_index")
     */
    public function indexAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();

            $areaTipoId = $this->session->get('areaTipoId');

            $area = $em->getRepository('AppBundle:AreaTipo')->find($areaTipoId);

            $ventanillas = $em->getRepository('AppBundle:Ventanilla')->findBy(array(
                'agencia'=>$this->session->get('agenciaId'),
                'areaTipo'=>$areaTipoId
            ));

            $em->getConnection()->commit();
            return $this->render('Ventanilla/index.html.twig', array(
                'area'=>$area,
                'ventanillas'=>$ventanillas,
                'operadorId' => $this->session->get('operadorId'),
                'agenciaId' => $this->session->get('agenciaId')
            ));

        } catch (Exception $e) {

        }

    }

    /**
     * @Route("/show", name="ventanilla_show")
     */
    public function showAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();


            $area = $request->get('area');
            $areaId = $request->get('areaId');
            $ventanillaId = $request->get('ventanillaId');
            $ventanilla = $em->getRepository('AppBundle:Ventanilla')->find($ventanillaId);
            $operadorId = $request->get('operadorId');
            $agenciaId = $request->get('agenciaId');

            $agencia = $em->getRepository('AppBundle:Agencia')->find($agenciaId);

            $operador = $em->getRepository('AppBundle:Operador')->find($operadorId);
            $areaTipoId = $operador->getAreaTipo()->getId();
            $fecha = date('d-m-Y');

            $transaccionCliente = $em->getRepository('AppBundle:TransaccionTipo')->findAll();

            $em->getConnection()->commit();
            return $this->render('Ventanilla/ventanilla.html.twig', array(
                'area'=>$area,
                'operadorId'=>$operador->getId(),
                'areaTipoId'=>$areaTipoId,
                'fecha'=>$fecha,
                'ventanillaNro'=>$ventanilla->getNumero(),
                'ventanillaId'=>$ventanillaId,
                'transaccionCliente'=>$transaccionCliente,
                'agenciaId' => $agenciaId,
                'agencia'=>$agencia
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
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();

            $operadorId = $request->get('operadorId');
            $areaTipoId = $request->get('areaTipoId');
            $agenciaId = $request->get('agenciaId');

            $query = $em->getConnection()->prepare('SELECT get_cantidad_ticket_espera_json(:agencia_id::INT, :area_tipo_id::INT, :fecha::DATE)');
            $query->bindValue(':agencia_id',$agenciaId);
            $query->bindValue(':area_tipo_id',$areaTipoId);
            $query->bindValue(':fecha',date('Y-m-d'));
            $query->execute();


            $ticket = $query->fetchAll();
            $ticket = json_decode($ticket[0]['get_cantidad_ticket_espera_json']);

            $em->getConnection()->commit();
            $enEspera = $ticket->get_cantidad_ticket_espera;
            return new JsonResponse(array('enEspera'=>$enEspera,'ticket'=>$ticket));
        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/next_ticket", name="ventanilla_next_ticket")
     */
    public function nextTicketAction(Request $request)
    {
        try {

            $agenciaId = $request->get('agenciaId');
            $areaTipoId = $request->get('areaTipoId');
            $fecha = $request->get('fecha');
            $ventanillaId = $request->get('ventanillaId');
            $operadorId = $request->get('operadorId');

            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            
            $query = $em->getConnection()->prepare('SELECT get_generar_ticket_llamada_json(:agencia_id::INT, :area_tipo_id::INT, :fecha::DATE, :ventanilla_id::INT, :operador_id::INT)');
            $query->bindValue(':agencia_id',$agenciaId);
            $query->bindValue(':area_tipo_id',$areaTipoId);
            $query->bindValue(':fecha',date('Y-m-d'));
            $query->bindValue(':ventanilla_id',$ventanillaId);
            $query->bindValue(':operador_id',$operadorId);
            $query->execute();
            $ticket = $query->fetchAll();
            $ticket = json_decode($ticket[0]['get_generar_ticket_llamada_json']);

            //dump($ticket);die;
            
            $servicioId = $ticket->o_servicio_id;
            $clienteTipoId = $ticket->o_cliente_tipo_id;
            $ticketNro = $ticket->o_numeroticket;

            $em->getConnection()->commit();
            return new JsonResponse(array(
                'existe'=>1,
                'estado'=>1,
                'servicioId'=>$servicioId,
                'clienteTipoId'=>$clienteTipoId,
                'ticketNro'=>$ticketNro,
                'codigo'=>$servicioId.$clienteTipoId.$ticketNro
            ));
            
        } catch (Exception $e) {

        }
    }


    /**
     * @Route("/accion", name="ventanilla_accion")
     */
    public function accionAction(Request $request)
    {
        try {
            $agenciaId = $request->get('agenciaId');
            $servicioId = $request->get('servicioId');
            $clienteTipoId = $request->get('clienteTipoId');
            $ticketNro = $request->get('ticketNro');
            $ventanillaId = $request->get('ventanillaId');
            $operadorId = $request->get('operadorId');
            $fecha = $request->get('fecha');
            $accion = $request->get('accion');
            $transaccionId = $request->get('transaccionId');
            $observacion = $request->get('observacion');

            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            
            // Switch para el boton de pausa y continuar
            if($accion == 3){
                $accion = $request->get('newEstado');
            }

            $newTicket = new Ticket();
            $newTicket->setVentanilla($em->getRepository('AppBundle:Ventanilla')->find($ventanillaId));
            $newTicket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find($accion));
            $newTicket->setTransaccionTipo($em->getRepository('AppBundle:TransaccionTipo')->find($transaccionId));
            $newTicket->setServicio($em->getRepository('AppBundle:Servicio')->find($servicioId));
            $newTicket->setClienteTipo($em->getRepository('AppBundle:ClienteTipo')->find($clienteTipoId));
            $newTicket->setNumeroticket($ticketNro);
            $newTicket->setFechahora(new \DateTime('now'));
            $newTicket->setFecha(new \DateTime('now'));
            $newTicket->setHora(new \DateTime('now'));
            $newTicket->setOperador($operadorId);
            $newTicket->setAgenciaId(203);
            $newTicket->setObs($observacion);
            $em->persist($newTicket);
            $em->flush();

            $em->getConnection()->commit();

            // Registrar  la operacion
            return new JsonResponse(array('mensaje'=>$accion));

        } catch (Exception $e) {

        }
    }

}
