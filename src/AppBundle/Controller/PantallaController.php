<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("/pantalla", name="pantalla")
 */

class PantallaController extends Controller
{

    public $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     * @Route("/", name="pantalla_index")
     */
    public function indexAction(Request $request)
    {
        $firstVideo = 'buscando-a-dori.mp4';
        return $this->render('Pantalla/pantalla.html.twig',array(
            'firstVideo'=>$firstVideo
        ));
    }

    /**
     * @Route("/nextVideo", name="pantalla_next_video")
     */
    public function nextVideoAction(Request $request)
    {
        // Obtener la lista de videos
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');
        //dump($agenciaId);die;
        $videos = $em->createQueryBuilder()
                                ->select('v')
                                ->from('AppBundle:VideoLista','vl')
                                ->innerJoin('AppBundle:Video','v','with','vl.video = v.id')
                                ->innerJoin('AppBundle:Agencia','a','with','v.agencia = a.id')
                                ->where('a.id = :idAgencia')
                                ->setParameter('idAgencia',$agenciaId)
                                ->getQuery()
                                ->getResult();
        //dump($videos);die;

        $videosList = array();
        foreach ($videos as $vid) {
            $videosList[] = $vid->getVideo();
        }
        //$videosList = array('naturaleza.mp4','buscando-a-dori.mp4','mascotas.mp4');
        $total = count($videosList);
        $totalPositions = $total - 1;

        // Verificamos si al menos existe un video
        if($total > 0){
            // Video Actual
            $currentVideo = $request->get('currentVideo');
            $currentVideo = str_replace("/vid/", "", $currentVideo);

            // Obtener la posicion del video actual
            $currentPosition = array_search($currentVideo, $videosList);

            // Obtenemos el siguiente video
            if($currentPosition >= $totalPositions){
                $nextVideo = $videosList[0];
            }else{
                $nextVideo = $videosList[$currentPosition + 1];
            }

            return new JsonResponse(array('nextVideo'=>$nextVideo));

        }else{
            // Devolvemos el video por dafault
            $nextVideo = 'naturaleza.mp4';
            return new JsonResponse(array('nextVideo'=>$nextVideo));
        }

    }

    /**
     * @Route("/nextText", name="pantalla_next_text")
     */
    public function nextTextAction(Request $request)
    {
        // Agencia
        $agencia = 602;

        // Obtener la lista de textos

        $em = $this->getDoctrine()->getManager();
        $anuncios = $em->createQueryBuilder()
                        ->select('a')
                        ->from('AppBundle:AnuncioLista','al')
                        ->innerJoin('AppBundle:Anuncio','a','with','al.anuncio = a.id')
                        ->innerJoin('AppBundle:Agencia','ag','with','a.agencia = ag.id')
                        ->orderBy('al.orden','ASC')
                        ->where('ag.id = :idAgencia')
                        ->andWhere('al.esactivo = true')
                        ->setParameter('idAgencia',$agencia)
                        ->getQuery()
                        ->getResult();

        $textList = array();
        foreach ($anuncios as $a) {
            $textList[] = $a->getAnuncio();
        }
        $total = count($textList);
        $totalPositions = $total - 1;

        // Verificamos si al menos existe un texto
        if($total > 0){
            // Video Actual
            $currentText = $request->get('currentText');
            //dump($currentText);die;

            // Obtener la posicion del video actual
            if($currentText == ""){
                $currentPosition = $totalPositions;
            }else{
                $currentPosition = array_search($currentText, $textList);
            }


            // Obtenemos el siguiente video
            if($currentPosition >= $totalPositions){
                $nextText = $textList[0];
            }else{
                $nextText = $textList[$currentPosition + 1];
            }

            return new JsonResponse(array('nextText'=>$nextText));

        }else{
            // Devolvemos el anuncio por dafault
            $nextVideo = '';
            return new JsonResponse(array('nextText'=>$nextText));
        }

    }

    /**
     * @Route("/nextTicket", name="pantalla_next_ticket")
     */
    public function nextTicketAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->getConnection()->beginTransaction();

            // Obtenemos los tickets que fueron llamados, o los rellamados
            $tickets = $em->createQueryBuilder()
                                    ->select('t.id, t.codigoticket, t.obs')
                                    ->from('AppBundle:Ticket','t')
                                    ->innerJoin('AppBundle:Servicio','s','with','t.servicio = s.id')
                                    ->innerJoin('AppBundle:TicketEstado','te','with','t.ticketEstado = te.id')
                                    ->where('Date(t.fechahora) = :fechaActual')
                                    ->andWhere('te.id > 0')
                                    ->orderBy('t.fechahora','DESC')
                                    ->setMaxResults(6)
                                    ->setParameter('fechaActual',new \DateTime('2016-09-30'))
                                    ->getQuery()
                                    ->getArrayResult();

            // Actualizamos los estados para pintar la ficha (obs)
            foreach ($tickets as $t) {
                $ticketActual = $em->getRepository('AppBundle:Ticket')->find($t['id']);
                $ticketActual->setObs(0);
                $em->flush();
            }

            $em->getConnection()->commit();

            return new JsonResponse($tickets);

        } catch (Exception $e) {

        }
    }
}
