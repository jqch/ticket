<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Video;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityRepository;

/**
 * Agencia controller.
 *
 * @Route("/video")
 */
class VideoController extends Controller
{
    public $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     *
     * @Route("/", name="video_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');
        if($this->session->get('areaTipoId') == 1 or $this->session->get('areaTipoId') == 2){
            $video = $em->getRepository('AppBundle:Video')->findAll();
        }else{
            $video = $em->getRepository('AppBundle:Video')->findBy(array('agencia'=>$agenciaId));
        }

        return $this->render('video/index.html.twig', array(
            'video' => $video,
        ));
    }

    /**
     * Creates a new Agencia entity.
     *
     * @Route("/new", name="video_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            if ($request->getMethod() == 'POST') {
                $form = $request->get('form');

                //$allowedExts = array("mp4","3gp");

                //$extension = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);

                $ruta = 'C:/xampp/htdocs/vid/';

                /*if (($_FILES["video"]["type"] == "video/mp4")
                && ($_FILES["video"]["size"] < 50000)
                && in_array($extension, $allowedExts)){
                    if ($_FILES["video"]["error"] > 0){
                        //echo "Return Code: " . $_FILES["video"]["error"] . "<br />";
                        // Error l cargar el video
                        die('error');
                        return $this->redirect($this->generateUrl('video_index'));
                    }else{
                        //echo "Upload: " . $_FILES["video"]["name"] . "<br />";
                        //echo "Type: " . $_FILES["video"]["type"] . "<br />";
                        //echo "Size: " . ($_FILES["video"]["size"] / 1024) . " Kb<br />";
                        //echo "Temp file: " . $_FILES["video"]["tmp_name"] . "<br />";

                        if (file_exists($ruta . $_FILES["video"]["name"])){
                            // El video ya existe
                            die('el video ya existe');
                            return $this->redirect($this->generateUrl('video_index'));
                        }else{*/
                            move_uploaded_file($_FILES["video"]["tmp_name"], $ruta."".$_FILES["video"]["name"]);
                            //echo "Stored in: " . "upload/" . $_FILES["video"]["name"];

                            $newVideo = new Video();
                            $newVideo->setVideoTipo(1);
                            $newVideo->setAgencia($em->getRepository('AppBundle:Agencia')->find($form['agencia']));
                            $newVideo->setVideo($_FILES["video"]["name"]);
                            $newVideo->setRuta($ruta);
                            $em->persist($newVideo);
                            $em->flush();

                            return $this->redirect($this->generateUrl('video_index'));
                        /*}
                    }
                }else{
                    // Error l cargar el video
                    die('error de entrada');
                    return $this->redirect($this->generateUrl('video_index'));
                }*/
            }
            $agenciaId = $this->session->get('agenciaId');
            if($this->session->get('areaTipoId') == 1 or $this->session->get('areaTipoId') == 2){
                $form = $this->createFormBuilder()
                    ->add('agencia','entity',array('class'=>'AppBundle:Agencia'))
                    ->getForm();
            }else{
                $form = $this->createFormBuilder()
                    ->add('agencia', 'entity', array('class' => 'AppBundle:Agencia',
                        'query_builder' => function (EntityRepository $e) use ($agenciaId) {
                            return $e->createQueryBuilder('a')
                                    ->where('a.id = :id')
                                    ->setParameter('id', $agenciaId);
                        }, 'property' => 'agencia'))
                    ->getForm();
            }
            
            return $this->render('video/new.html.twig',array('form'=>$form->createView()));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/delete/{id}", name="video_delete")
     */
    public function deleteAction(Request $request)
    {
         try {
            $em = $this->getDoctrine()->getManager();
            $video = $em->getRepository('AppBundle:Video')->find($request->get('id'));

            $queryBuilder = $em
                ->createQueryBuilder()
                ->delete('AppBundle:VideoLista', 'vl')
                ->where('vl.video = :idVideo')
                ->setParameter('idVideo', $request->get('id'))
                ->getQuery()
                ->getResult();

            $em->remove($video);
            $em->flush();

            unlink('c:/xampp/htdocs/vid/'.$video->getVideo());

            return $this->redirectToRoute('video_index');
        } catch (Exception $e) {

        }
    }

}
