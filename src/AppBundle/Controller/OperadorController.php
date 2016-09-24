<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Operador;
use AppBundle\Form\OperadorType;

/**
 * Operador controller.
 *
 * @Route("/operador")
 */
class OperadorController extends Controller
{
    /**
     * Lists all Operador entities.
     *
     * @Route("/", name="operador_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $operadors = $em->getRepository('AppBundle:Operador')->findAll();

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
        $operador = new Operador();
        $form = $this->createForm('AppBundle\Form\OperadorType', $operador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
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
        $editForm = $this->createForm('AppBundle\Form\OperadorType', $operador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
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
