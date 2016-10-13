<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Operador;
use AppBundle\Form\OperadorType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Operador controller.
 *
 * @Route("/operador")
 */
class OperadorController extends Controller
{
    public $session;

    public function __construct() {
        $this->session = new Session();
    }
    /**
     * Lists all Operador entities.
     *
     * @Route("/", name="operador_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        if($this->session->get('agenciaTipoId') == 2){
            //$operadors = $em->getRepository('AppBundle:Operador')->findBy(array('agencia'=>$this->session->get('agenciaId')));
            $operadors = $em->createQueryBuilder()
                            ->select('o')
                            ->from('AppBundle:Operador','o')
                            ->innerJoin('AppBundle:Agencia','ag','with','o.agencia = ag.id')
                            ->where('ag.id = :agenciaId')
                            ->andWhere('o.ci != :carnet')
                            ->setParameter('agenciaId',$this->session->get('agenciaId'))
                            ->setParameter('carnet', 11111111)
                            ->getQuery()
                            ->getResult();
        }else{
            //$operadors = $em->getRepository('AppBundle:Operador')->findAll();   
            $operadors = $em->createQueryBuilder()
                            ->select('o')
                            ->from('AppBundle:Operador','o')
                            ->where('o.ci != :carnet')
                            ->setParameter('carnet', 11111111)
                            ->getQuery()
                            ->getResult();         
        }

        return $this->render('operador/index.html.twig', array(
            'operadors' => $operadors,
        ));
    }

    /**
     * Creates a new Operador entity.
     *
     * @Route("/new", name="operador_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $operador = new Operador();
        
        if($this->session->get('agenciaTipoId') == 2){
            $agenciasId = array($this->get('session')->get('agenciaId'));
            $areasTipo = $em->createQueryBuilder()
                                ->select('at')
                                ->from('AppBundle:AreaTipo','at')
                                ->where('at.id in (:ids)')
                                ->setParameter('ids', array(4,5))
                                ->getQuery()
                                ->getArrayResult();
        }else{
            $agenciasId = $em->createQueryBuilder()
                                ->select('a')
                                ->from('AppBundle:Agencia','a')
                                ->getQuery()
                                ->getArrayResult();
            //dump($agenciasId);die;
            $areasTipo = $em->createQueryBuilder()
                                ->select('ot')
                                ->from('AppBundle:AreaTipo','ot')
                                ->getQuery()
                                ->getArrayResult();
        }
        //$operadoresTipo = array(3,4);

        $form = $this->createForm(new OperadorType($agenciasId, $areasTipo), $operador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->persist($operador);
            $em->flush();

            return $this->redirectToRoute('operador_show', array('id' => $operador->getId()));
        }

        return $this->render('operador/new.html.twig', array(
            'operador' => $operador,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Operador entity.
     *
     * @Route("/{id}", name="operador_show")
     * @Method("GET")
     */
    public function showAction(Operador $operador)
    {
        $deleteForm = $this->createDeleteForm($operador);

        return $this->render('operador/show.html.twig', array(
            'operador' => $operador,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Operador entity.
     *
     * @Route("/{id}/edit", name="operador_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Operador $operador)
    {
        $deleteForm = $this->createDeleteForm($operador);
        $em = $this->getDoctrine()->getManager();
        if($this->session->get('agenciaTipoId') == 2){
            $agenciasId = array($this->get('session')->get('agenciaId'));
            $areasTipo = $em->createQueryBuilder()
                                ->select('ot')
                                ->from('AppBundle:AreaTipo','ot')
                                ->where('ot.id in (:ids)')
                                ->setParameter('ids', array(4,5))
                                ->getQuery()
                                ->getArrayResult();
        }else{
            $agenciasId = $em->createQueryBuilder()
                                ->select('a')
                                ->from('AppBundle:Agencia','a')
                                ->getQuery()
                                ->getArrayResult();
            //dump($agenciasId);die;
            $areasTipo = $em->createQueryBuilder()
                                ->select('ot')
                                ->from('AppBundle:AreaTipo','ot')
                                ->getQuery()
                                ->getArrayResult();
        }
        //$operadoresTipo = array(3,4);

        $editForm = $this->createForm(new OperadorType($agenciasId, $areasTipo), $operador);

        //$editForm = $this->createForm('AppBundle\Form\OperadorType', $operador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $em->persist($operador);
            $em->flush();

            return $this->redirectToRoute('operador_show', array('id' => $operador->getId()));
        }

        return $this->render('operador/edit.html.twig', array(
            'operador' => $operador,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Operador entity.
     *
     * @Route("/{id}", name="operador_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Operador $operador)
    {
        $form = $this->createDeleteForm($operador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($operador);
            $em->flush();
        }

        return $this->redirectToRoute('operador_index');
    }

    /**
     * Creates a form to delete a Operador entity.
     *
     * @param Operador $operador The Operador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Operador $operador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('operador_delete', array('id' => $operador->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
