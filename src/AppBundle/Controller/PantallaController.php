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
        $agenciaId = $this->session->get('agenciaId');
        $em = $this->getDoctrine()->getManager();
        $listaVideos = $em->createQueryBuilder()
                        ->select('v')
                        ->from('AppBundle:Video','v')
                        ->innerJoin('AppBundle:Agencia','a','with','v.agencia = a.id')
                        ->innerJoin('AppBundle:VideoLista','vl','with','vl.video = v.id')
                        ->where('a.id = :agenciaId')
                        ->andWhere('vl.esactivo = true')
                        ->orderBy('vl.orden','ASC')
                        ->setParameter('agenciaId',$agenciaId)
                        ->getQuery()
                        ->getResult();

        if(count($listaVideos)>0){
            $firstVideo = $listaVideos[0]->getVideo();
        }else{
            $firstVideo = "";
        }

        $valores = $em->getRepository('AppBundle:Valores')->find(2);
        $cantidad = $valores->getMensajecabecera();

        //$firstVideo = 'buscando-a-dori.mp4';
        return $this->render('Pantalla/pantalla.html.twig',array(
            'firstVideo'=>$firstVideo,
            'agenciaId'=>$agenciaId,
            'cantidad'=>$cantidad
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
                        ->from('AppBundle:Video','v')
                        ->innerJoin('AppBundle:Agencia','a','with','v.agencia = a.id')
                        ->innerJoin('AppBundle:VideoLista','vl','with','vl.video = v.id')
                        ->where('a.id = :agenciaId')
                        ->andWhere('vl.esactivo = true')
                        ->orderBy('vl.orden','ASC')
                        ->setParameter('agenciaId',$agenciaId)
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
            // Devolvemos el video por dafault nulo
            $nextVideo = '';
            return new JsonResponse(array('nextVideo'=>$nextVideo));
        }

    }

    /**
     * @Route("/nextText", name="pantalla_next_text")
     */
    public function nextTextAction(Request $request)
    {
        // Agencia
        $agenciaId = $this->session->get('agenciaId');

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
                        ->setParameter('idAgencia',$agenciaId)
                        ->getQuery()
                        ->getResult();
        //dump($anuncios);die;
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

            $cantidad = $request->get('cantidad');

            $agenciaId = $this->session->get('agenciaId');
            $fecha = date('Y-m-d');

            $query = $em->getConnection()->prepare('SELECT get_listar_ticket_pantalla_json(:agencia_id::INT, :fecha::DATE, :cantidad::INT)');
            $query->bindValue(':agencia_id',$agenciaId);
            $query->bindValue(':fecha',$fecha);
            $query->bindValue(':cantidad',$cantidad);
            $query->execute();
            $tickets = $query->fetchAll();

            $arrayTickets = array();
            if(count($tickets)>0){
                foreach ($tickets as $t) {
                    $ticket = json_decode($t['get_listar_ticket_pantalla_json']);
                    $arrayTickets[] = $ticket;
                }
            }
            //dump($arrayTickets);
            
            //die;
            $cantidadTickets = count($arrayTickets);

            $em->getConnection()->commit();

            return new JsonResponse(array('ticket'=>$arrayTickets,'cantidad'=>$cantidad, 'cantidadTickets'=>$cantidadTickets));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/hora", name="pantalla_hora")
     */
    public function horaAction(Request $request)
    {
        $hora = date('H:i:s');
        return new JsonResponse(array('hora'=>$hora));
    }
}
