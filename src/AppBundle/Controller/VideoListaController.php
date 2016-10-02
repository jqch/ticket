<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\VideoLista;

/**
 * Agencia controller.
 *
 * @Route("/videolista")
 */
class VideoListaController extends Controller
{
    public $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     *
     * @Route("/", name="videolista_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');
        $videoAgencia = $em->getRepository('AppBundle:Video')->findBy(array('agencia'=>$agenciaId));
    //dump($videoAgencia);die;
        $videoLista = $em->createQueryBuilder()
                                ->select('v')
                                ->from('AppBundle:VideoLista','vl')
                                ->innerJoin('AppBundle:Video','v','with','vl.video = v.id')
                                ->innerJoin('AppBundle:Agencia','a','with','v.agencia = a.id')
                                ->where('a.id = :idAgencia')
                                ->setParameter('idAgencia',$agenciaId)
                                ->getQuery()
                                ->getResult();

        return $this->render('videolista/index.html.twig', array(
            'videoAgencia' => $videoAgencia,
            'videoLista'=>$videoLista
        ));
    }

     /**
     * @Route("/lista", name="videolista_lista")
     */
    public function listaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');

        $nuevaLista = $request->get('nuevaLista');
        //dump($nuevaLista);die;

        $videosAgencia = $em->getRepository('AppBundle:Video')->findBy(array('agencia'=>$agenciaId));
        //dump($videosAgencia);die;
        foreach ($videosAgencia as $va) {
            $queryBuilder = $em
                ->createQueryBuilder()
                ->delete('AppBundle:VideoLista', 'vl')
                ->where('vl.video = :idVideo')
                ->setParameter('idVideo', $va->getId())
                ->getQuery()
                ->getResult();
        }

        for ($i=0; $i < count($nuevaLista) ; $i++) {
              $newLista = new VideoLista();
              $newLista->setVideo($em->getRepository('AppBundle:Video')->find($nuevaLista[$i]));
              $newLista->setOrden($i);
              $newLista->setEsactivo(true);
              $newLista->setObs('');
              $em->persist($newLista);
              $em->flush();
        }

        return $this->redirectToRoute('videolista_index');
    }

}
