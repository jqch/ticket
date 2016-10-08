<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Ticket;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/dispensador", name="dispensador")
 */

class DispensadorController extends Controller
{
    public $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     * @Route("/", name="dispensador_index")
     */
    public function indexAction(Request $request)
    {
            try {
                $agenciaId = $this->session->get('agenciaId');

                $servicios = $this->serviciosPrincipales($agenciaId);

                $em = $this->getDoctrine()->getManager();
                $em->getConnection()->beginTransaction();
                $tiposCliente = $em->getRepository('AppBundle:ClienteTipo')->findAll();
                $em->getConnection()->commit();

                // Algunos datos para la impresion
                $valores = $em->getRepository('AppBundle:Valores')->find(1);
                $agencia = $em->getRepository('AppBundle:Agencia')->find($agenciaId);

                $titulo = $valores->getMensajecabecera();
                $agenciaNombre = $agencia->getAgencia();
                $frase = $agencia->getFrase();

                return $this->render('Dispensador/dispensador.html.twig', array(
                    'servicios'=>$servicios,
                    'agenciaId'=>$agenciaId,
                    'tiposCliente'=>$tiposCliente,
                    'titulo'=>$titulo,
                    'agenciaNombre'=>$agenciaNombre,
                    'frase'=>$frase
                ));

            } catch (Exception $e) {

            }


    }

    /**
     * @Route("/registrar_ticket", name="dispensador_registrar_ticket")
     */
    public function registrarTicketAction(Request $request){
        try {
            
            $agenciaId = $request->get('agenciaId');
            $servicioId = $request->get('servicioId');
            $clienteTipoId = $request->get('clienteTipoId');
            $fechaActual = date('Y-m-d');

            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();
            // Obtenemos el numero de ticket
            $query = $em->getConnection()->prepare('SELECT get_ticket_siguiente_json(:agencia_id::INT, :servicio_id::INT, :cliente_tipo_id::INT, :fecha::DATE)');
            $query->bindValue(':agencia_id',$agenciaId);
            $query->bindValue(':servicio_id',$servicioId);
            $query->bindValue(':cliente_tipo_id',$clienteTipoId);
            $query->bindValue(':fecha',$fechaActual);
            $query->execute();
            $ticket = $query->fetchAll();
            dump($ticket);die;
            $ticket = json_decode($ticket[0]['get_ticket_siguiente_json']);
            
            //$servicio = $em->getRepository('AppBundle:Servicio')->find($servicioId);
            //$clienteTipo = $em->getRepository('AppBundle:ClienteTipo')->find($clienteTipoId);

            /* Registro del nuevo ticket */

            $newTicket = new Ticket();
            $newTicket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(0));
            $newTicket->setTransaccionTipo($em->getRepository('AppBundle:TransaccionTipo')->find(0));
            $newTicket->setServicio($em->getRepository('AppBundle:Servicio')->find($servicioId));
            $newTicket->setClienteTipo($em->getRepository('AppBundle:ClienteTipo')->find($clienteTipoId));
            $newTicket->setCodigoticket($ticket->codigoticket);
            $newTicket->setNumeroticket($ticket->numeroticket);
            $newTicket->setFechahora(new \DateTime('now'));
            $newTicket->setFecha(new \DateTime('now'));
            $newTicket->setHora(new \DateTime('now'));
            $newTicket->setAgencia($agenciaId);
            $newTicket->setObs('');

            $em->persist($newTicket);
            $em->flush();

            // IMPRIMIMOS EL TICKET
            
            $codigoTicket = $ticket->codigoticket.$ticket->numeroticket;
            $fechaHora = date('d-m-Y H:i');
            //dump($fechaHora);die;

            $em->getConnection()->commit();
            
            return new JsonResponse(array(
                'codigoTicket'=>$codigoTicket,
                'fechaHora'=>$fechaHora
            ));

        } catch (Exception $e) {
            
        }
    }

    private function serviciosPrincipales($agenciaId){
                $em = $this->getDoctrine()->getManager();
                $em->getConnection()->beginTransaction();

                $servicios = $em->createQueryBuilder()
                                    ->select('s')
                                    ->from('AppBundle:Servicio','s')
                                    ->innerJoin('AppBundle:AgenciaServicio','ase','with','ase.servicio = s.id')
                                    ->innerJoin('AppBundle:Agencia','a','with','ase.agencia = a.id')
                                    ->where('ase.esactivo = :activo')
                                    ->andWhere('a.id = :agenciaId')
                                    ->setParameter('activo',true)
                                    ->setParameter('agenciaId',$agenciaId)
                                    ->getQuery()
                                    ->getResult();
                $em->getConnection()->commit();
                return $servicios;
    }

    /**
     * @Route("/nextScreen", name="dispensador_next_screen")
     */
    public function nextScreenAction(Request $request){
        try {

            $esticket = $request->get('esticket');
            $agenciaId = $request->get('agenciaId');
            $servicioId = $request->get('servicioId');
            $clienteTipoId = $request->get('clienteTipoId');

            $tiposCliente = $em->getRepository('AppBundle:ClienteTipo')->findAll();

            return $this->render('Dispensador/botones.html.twig', array(
                'tiposCliente'=>$tiposCliente,
                'agenciaId'=>$agenciaId,
                'servicioId'=>$servicioId
            ));

        } catch (Exception $e) {

        }
    }

    private function serviciosSiguientes($id){
                $em = $this->getDoctrine()->getManager();
                $em->getConnection()->beginTransaction();
                $servicios = $em->createQueryBuilder()
                                    ->select('s')
                                    ->from('AppBundle:Servicio','s')
                                    ->innerJoin('AppBundle:ServicioDetalle','sd','with','sd.servicio = s.id')
                                    ->where('s.esactivo = :activo')
                                    ->andWhere('sd.servicioPadre = :idPadre')
                                    ->setParameter('activo',true)
                                    ->setParameter('idPadre',$id)
                                    ->getQuery()
                                    ->getResult();
                $em->getConnection()->commit();
                return $servicios;
    }
}
