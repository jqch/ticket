<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/pantalla", name="pantalla")
 */

class PantallaController extends Controller
{
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
        $videosList = array('naturaleza.mp4','buscando-a-dori.mp4','mascotas.mp4');
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
        // Obtener la lista de textos
        $textList = array('Primer mensaje','Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza clásica de la literatura del Latin, que data del año 45 antes de Cristo.','Tercer anuncio','Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles.');
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
            // Devolvemos el video por dafault
            $nextVideo = 'Ningun mensaje - default';
            return new JsonResponse(array('nextText'=>$nextText));
        }

    }

}
