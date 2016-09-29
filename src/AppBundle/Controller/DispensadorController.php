<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Ticket;

/**
 * @Route("/dispensador", name="dispensador")
 */

class DispensadorController extends Controller
{
    /**
     * @Route("/", name="dispensador_index")
     */
    public function indexAction(Request $request)
    {
            try {
                $servicios = $this->serviciosPrincipales();
                return $this->render('Dispensador/dispensador.html.twig', array('servicios'=>$servicios));

            } catch (Exception $e) {

            }


    }

    private function serviciosPrincipales(){
                $em = $this->getDoctrine()->getManager();
                $em->getConnection()->beginTransaction();
                $servicios = $em->createQueryBuilder()
                                    ->select('s')
                                    ->from('AppBundle:Servicio','s')
                                    ->innerJoin('AppBundle:ServicioDetalle','sd','with','sd.servicio = s.id')
                                    ->where('s.esactivo = :activo')
                                    ->andWhere('sd.servicioPadre  is null')
                                    ->setParameter('activo',true)
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
            $id = $request->get('id');
            $esticket = $request->get('ticket');
            if($esticket == 'true'){
                // Registrar el ticket
                $em = $this->getDoctrine()->getManager();
                $em->getConnection()->beginTransaction();

                $servicio = $em->getRepository('AppBundle:Servicio')->find($id);
                $prefijo = $servicio->getObs();

                $serviciosIguales = $em->createQueryBuilder()
                                                ->select('t.id')
                                                ->from('AppBundle:Ticket','t')
                                                ->innerJoin('AppBundle:Servicio','s','with','t.servicio = s.id')
                                                ->where('s.id = :idServicio')
                                                ->andWhere('t.fechahora >= :fechaActual')
                                                ->setParameter('idServicio',$id)
                                                ->setParameter('fechaActual', new \DateTime('2016-09-30'))
                                                ->getQuery()
                                                ->getResult();

                $numeroServicio = count($serviciosIguales) + 1;

                $newTicket = new Ticket();
                $newTicket->setOperador($em->getRepository('AppBundle:Operador')->find(1));
                $newTicket->setTicketEstado($em->getRepository('AppBundle:TicketEstado')->find(0));
                $newTicket->setTransaccionTipo($em->getRepository('AppBundle:TransaccionTipo')->find(0));
                $newTicket->setServicio($em->getRepository('AppBundle:Servicio')->find($id));
                $newTicket->setCodigoticket($prefijo.'-'.$numeroServicio);
                $newTicket->setFechahora(new \DateTime('now'));
                $em->persist($newTicket);
                $em->flush();

                $em->getConnection()->commit();
                // Imprimimos el ticket


                // mostramos la pantalla principal
                $servicios = $this->serviciosPrincipales();
                return $this->render('Dispensador/botones.html.twig', array('servicios'=>$servicios));
            }

            if($esticket == 'false'){
                // Obtenemos la siguiente pantalla
                $servicios = $this->serviciosSiguientes($id);
                return $this->render('Dispensador/botones.html.twig', array('servicios'=>$servicios));
            }
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
