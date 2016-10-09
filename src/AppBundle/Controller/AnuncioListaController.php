<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\AnuncioLista;

/**
 * Agencia controller.
 *
 * @Route("/anunciolista")
 */
class AnuncioListaController extends Controller
{
    public $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     *
     * @Route("/", name="anunciolista_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');
        $anuncioAgencia = $em->getRepository('AppBundle:Anuncio')->findBy(array('agencia'=>$agenciaId));
    //dump($videoAgencia);die;
        $anuncioLista = $em->createQueryBuilder()
                                ->select('an')
                                ->from('AppBundle:AnuncioLista','al')
                                ->innerJoin('AppBundle:Anuncio','an','with','al.anuncio = an.id')
                                ->innerJoin('AppBundle:Agencia','a','with','an.agencia = a.id')
                                ->where('a.id = :idAgencia')
                                ->setParameter('idAgencia',$agenciaId)
                                ->getQuery()
                                ->getResult();

        return $this->render('anunciolista/index.html.twig', array(
            'anuncioAgencia' => $anuncioAgencia,
            'anuncioLista'=>$anuncioLista
        ));
    }

     /**
     * @Route("/lista", name="anunciolista_lista")
     */
    public function listaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');

        $nuevaLista = $request->get('nuevaLista');
        //dump($nuevaLista);die;

        $anuncioAgencia = $em->getRepository('AppBundle:Anuncio')->findBy(array('agencia'=>$agenciaId));
        //dump($videosAgencia);die;
        foreach ($anuncioAgencia as $aa) {
            $queryBuilder = $em
                ->createQueryBuilder()
                ->delete('AppBundle:AnuncioLista', 'al')
                ->where('al.anuncio = :idAnuncio')
                ->setParameter('idAnuncio', $aa->getId())
                ->getQuery()
                ->getResult();
        }

        for ($i=0; $i < count($nuevaLista) ; $i++) {
              $newLista = new AnuncioLista();
              $newLista->setAnuncio($em->getRepository('AppBundle:Anuncio')->find($nuevaLista[$i]));
              $newLista->setOrden($i);
              $newLista->setEsactivo(true);
              $newLista->setObs('');
              $em->persist($newLista);
              $em->flush();
        }

        return $this->redirectToRoute('anunciolista_index');
    }

}
