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
            
            // obtenemos los balores del dispensador
            $agenciaId = $request->get('agenciaId');
            $servicioId = $request->get('servicioId');
            $clienteTipoId = $request->get('clienteTipoId');
            $fechaActual = date('Y-m-d');

            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();

            // Obtenemos el codigo de ticket y registramos el ticket
            $query = $em->getConnection()->prepare('SELECT get_generar_ticket_espera_json(:agencia_id::INT, :servicio_id::VARCHAR, :cliente_tipo_id::VARCHAR, :fecha::DATE, :esregistro::BOOLEAN)');
            $query->bindValue(':agencia_id',$agenciaId);
            $query->bindValue(':servicio_id',$servicioId);
            $query->bindValue(':cliente_tipo_id',$clienteTipoId);
            $query->bindValue(':fecha',$fechaActual);
            $query->bindValue('esregistro',true);
            $query->execute();
            $ticket = $query->fetchAll();

            // decodificacmos la respuesta json
            $ticket = json_decode($ticket[0]['get_generar_ticket_espera_json']);

            // asignacmos el codigo y fecha de registro
            $codigoTicket = $ticket->get_generar_ticket_espera;
            $fechaHora = date('d-m-Y H:i');

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
