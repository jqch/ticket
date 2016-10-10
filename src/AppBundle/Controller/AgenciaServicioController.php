<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\AgenciaServicio;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityRepository;

/**
 * AgenciaServicio controller.
 *
 * @Route("/agenciaservicio")
 */
class AgenciaServicioController extends Controller
{
    public $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     * Lists all Agencia entities.
     *
     * @Route("/", name="agenciaservicio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');
        if($this->session->get('areaTipoId') == 1 or $this->session->get('areaTipoId') == 2){
            $agenciaservicio = $em->getRepository('AppBundle:AgenciaServicio')->findAll();
        }else{
            $agenciaservicio = $em->getRepository('AppBundle:AgenciaServicio')->findBy(array('agencia'=>$agenciaId));
        }
        //$agenciaservicio = $em->getRepository('AppBundle:AgenciaServicio')->findAll(array('id'=>'ASC'));

        return $this->render('agenciaServicio/index.html.twig', array(
            'agenciaservicio' => $agenciaservicio,
        ));
    }

    /**
     * Creates a new Agencia entity.
     *
     * @Route("/new", name="agenciaservicio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $agenciaId = $this->session->get('agenciaId');
            if ($request->getMethod() == 'POST') {
                $form = $request->get('form');
                $existe = $em->getRepository('AppBundle:AgenciaServicio')->findOneBy(array('agencia'=>$form['agencia'],'servicio'=>$form['servicio']));
                if(!$existe){

                    $agenciaServicio = new AgenciaServicio();

                    $agenciaServicio->setAgencia($em->getRepository('AppBundle:Agencia')->find($form['agencia']));
                    $agenciaServicio->setServicio($em->getRepository('AppBundle:Servicio')->find($form['servicio']));
                    $agenciaServicio->setEsactivo(true);
                    $em->persist($agenciaServicio);
                    $em->flush();
                }
                return $this->redirect($this->generateUrl('agenciaservicio_index'));
            }

            
            if($this->session->get('areaTipoId') == 1 or $this->session->get('areaTipoId') == 2){
                $form = $this->createFormBuilder()
                    ->add('agencia','entity',array('class'=>'AppBundle:Agencia'))
                    ->add('servicio', 'entity',array('class'=>'AppBundle:Servicio'))
                    ->getForm();
            }else{
                $form = $this->createFormBuilder()
                    ->add('agencia', 'entity', array('class' => 'AppBundle:Agencia',
                            'query_builder' => function (EntityRepository $e) use ($agenciaId) {
                                return $e->createQueryBuilder('a')
                                        ->where('a.id = :id')
                                        ->setParameter('id', $agenciaId);
                            }, 'property' => 'agencia'))
                    ->add('servicio', 'entity',array('class'=>'AppBundle:Servicio'))
                        ->getForm();
            }
            

            return $this->render('agenciaServicio/new.html.twig',array('form'=>$form->createView()));

        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/change", name="agenciaservicio_change")
     */
    public function changeAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $agenciaServicio = $em->getRepository('AppBundle:AgenciaServicio')->find($request->get('id'));
            $estadoAnterior = $agenciaServicio->getEsactivo();
            if($estadoAnterior){
                $agenciaServicio->setEsactivo(false);
            }else{
                $agenciaServicio->setEsactivo(true);
            }
            $em->flush();
            return $this->redirectToRoute('agenciaservicio_index');
        } catch (Exception $e) {

        }

    }

    /**
     * @Route("/delete/{id}", name="agenciaservicio_delete")
     */
    public function deleteAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $agenciaServicio = $em->getRepository('AppBundle:AgenciaServicio')->find($request->get('id'));
            $em->remove($agenciaServicio);
            $em->flush();
            return $this->redirectToRoute('agenciaservicio_index');
        } catch (Exception $e) {

        }

    }

}
