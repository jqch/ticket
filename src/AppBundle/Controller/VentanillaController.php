<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;

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
                'operadorId' => $this->session->get('operadorId')
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
            $nroVentanilla = $request->get('nroVentanilla');
            $operadorId = $request->get('operadorId');

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
                'nroVentanilla'=>$nroVentanilla,
                'transaccionCliente'=>$transaccionCliente
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

            $operadorId = $request->get('operadorId');
            $areaTipoId = $request->get('areaTipoId');
            $nroVentanilla = $request->get('nroVentanilla');

            /*
            //look for the tuicion
            $query = $em->getConnection()->prepare('SELECT get_ue_tuicion (:user_id::INT, :sie::INT, :roluser::INT)');
            $query->bindValue(':user_id', $this->session->get('userId'));
            $query->bindValue(':sie', $institucionEducativa->getId());
            $query->bindValue(':roluser', $this->session->get('roluser'));
            $query->execute();
            $aTuicion = $query->fetchAll();
            //check if the user has the tuicion
            if (!$aTuicion[0]['get_ue_tuicion']) {
            */

            // encontramos los servicios que se atiende en el area de la ventanilla
            //select * from get_ticket_siguiente(202,1,2)
            $query = $em->getConnection()->prepare('SELECT get_ticket_siguiente(:agencia_id::INT, :servicio_id::INT, :cliente_tipo_id::INT)');
            $query->bindValue(':agencia_id',202);
            $query->bindValue(':servicio_id',1);
            $query->bindValue(':cliente_tipo_id',2);
            $query->execute();

            $ticket = $query->fetchAll();

            //dump($ticket);die;
            /*
            $serviciosArea = $em->createQueryBuilder()
                                ->select('s')
                                ->from('AppBundle:Servicio','s')
                                ->innerJoin('AppBundle:AreaTipo','at','with','s.areaTipo = at.id')
                                ->innerJoin('AppBundle:AgenciaServicio','ase','with','ase.servicio = s.id')
                                ->innerJoin('AppBundle:Agencia','a','with','ase.agencia = a.id')
                                ->where('at.id = :areaTipoId')
                                ->andWhere('a.id = :agenciaId')
                                ->setParameter('areaTipoId',$areaTipoId)
                                ->setParameter('agenciaId',$this->session->get('agenciaId'))
                                ->getQuery()
                                ->getResult();

            // servicios del 
            dump($serviciosArea);die;

            $serviciosArea = $em->getRepository('AppBundle:Servicio')->findBy(array('operador'=>$operadorId));

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
                                    //->where('Date(t.fechahora) = :fechaActual')
                                    ->where('s.id IN (:servicios)')
                                    ->andWhere('te.id = 0')
                                    ->orderBy('t.fechahora','DESC')
                                    //->setParameter('fechaActual',new \DateTime('now'))
                                    ->setParameter('servicios',$arrayServicios)
                                    ->getQuery()
                                    ->getResult();
            */
            $em->getConnection()->commit();
            $enEspera = rand(0,100);
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
                                    //->where('Date(t.fechahora) = :fechaActual')
                                    ->where('s.id IN (:servicios)')
                                    ->andWhere('te.id = 0')
                                    ->orderBy('t.fechahora','ASC')
                                    ->setMaxResults(1)
                                    //->setParameter('fechaActual',new \DateTime('now'))
                                    ->setParameter('servicios',$arrayServicios)
                                    ->getQuery()
                                    ->getResult();

            // Verificamos si existe el siguente ticket
            // para actualizar el estado
            if(count($siguiente) > 0){

                // Actualizamos el estado del ticket
                $ticketUpdate = $em->getRepository('AppBundle:Ticket')->find($siguiente[0]->getId());
                $ticketUpdate->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(1));
                $ticketUpdate->setObs(1);
                $em->flush();

                // Obtenemos los datos del ticket
                $id = $ticketUpdate->getId();
                $estado = $ticketUpdate->getTicketEstado()->getId();
                $codigo = $ticketUpdate->getCodigoticket();

                // Registrar el historial en otra tabla como ticket_detalle
                $em->getConnection()->commit();
                return new JsonResponse(array(
                    'existe'=>1,
                    'id'=>$id,
                    'estado'=>$estado,
                    'codigo'=>$codigo
                ));
            }else{
                $em->getConnection()->commit();
                return new JsonResponse(array(
                    'existe'=>0
                ));
            }

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
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $ticket = $em->getRepository('AppBundle:Ticket')->find($idTicket);
            $ticket->setObs(1);
            $em->flush();
            $em->getConnection()->commit();
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
            // Actualizamos el estado del ticket
            $idTicket = $request->get('idTicket');
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $ticket = $em->getRepository('AppBundle:Ticket')->find($idTicket);
            $ticket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(6));
            $em->flush();
            $em->getConnection()->commit();

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

            // Actualizamos el estado del ticket
            $idTicket = $request->get('idTicket');
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $ticket = $em->getRepository('AppBundle:Ticket')->find($idTicket);
            $ticket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(2));
            $em->flush();
            $em->getConnection()->commit();

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
            // Actualizamos el estado del ticket
            $idTicket = $request->get('idTicket');
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $ticket = $em->getRepository('AppBundle:Ticket')->find($idTicket);
            $ticket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(3));
            $em->flush();
            $em->getConnection()->commit();

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
            // Actualizamos el estado del ticket
            $idTicket = $request->get('idTicket');
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $ticket = $em->getRepository('AppBundle:Ticket')->find($idTicket);
            $ticket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(2));
            $em->flush();
            $em->getConnection()->commit();

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
            // Actualizamos el estado del ticket
            $idTicket = $request->get('idTicket');
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            $ticket = $em->getRepository('AppBundle:Ticket')->find($idTicket);
            $ticket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(5));
            $em->flush();
            $em->getConnection()->commit();

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
     * @Route("/espera", name="ventanilla_espera")
     */
    public function esperaAction(){
            try {
                    $em = $this->getDoctrine()->getManager();
                    $em->getConnection()->beginTransaction();
                    $totalCaja = rand(10,100);
                    $totalPlataforma = 4;
                    $em->getConnection()->commit();

                    return new JsonResponse(json_encode(array(
                        'servicio'=>'VENTANILLA',
                        'accion'=>'ESPERA',
                        'totalCaja'=>$totalCaja,
                        'totalPlataforma'=>$totalPlataforma
                    )));

            } catch (Exception $e) {

            }
    }

}
