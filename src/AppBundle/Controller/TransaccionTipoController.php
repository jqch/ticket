<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\TransaccionTipo;
use AppBundle\Form\TransaccionTipoType;

/**
 * TransaccionTipo controller.
 *
 * @Route("/transacciontipo")
 */
class TransaccionTipoController extends Controller
{
    /**
     * Lists all TransaccionTipo entities.
     *
     * @Route("/", name="transacciontipo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $transaccionTipos = $em->getRepository('AppBundle:TransaccionTipo')->findAll();

        return $this->render('transacciontipo/index.html.twig', array(
            'transaccionTipos' => $transaccionTipos,
        ));
    }

    /**
     * Creates a new TransaccionTipo entity.
     *
     * @Route("/new", name="transacciontipo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $transaccionTipo = new TransaccionTipo();
        $form = $this->createForm('AppBundle\Form\TransaccionTipoType', $transaccionTipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($transaccionTipo);
            $em->flush();

            return $this->redirectToRoute('transacciontipo_show', array('id' => $transaccionTipo->getId()));
        }

        return $this->render('transacciontipo/new.html.twig', array(
            'transaccionTipo' => $transaccionTipo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TransaccionTipo entity.
     *
     * @Route("/{id}", name="transacciontipo_show")
     * @Method("GET")
     */
    public function showAction(TransaccionTipo $transaccionTipo)
    {
        $deleteForm = $this->createDeleteForm($transaccionTipo);

        return $this->render('transacciontipo/show.html.twig', array(
            'transaccionTipo' => $transaccionTipo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TransaccionTipo entity.
     *
     * @Route("/{id}/edit", name="transacciontipo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TransaccionTipo $transaccionTipo)
    {
        $deleteForm = $this->createDeleteForm($transaccionTipo);
        $editForm = $this->createForm('AppBundle\Form\TransaccionTipoType', $transaccionTipo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($transaccionTipo);
            $em->flush();

            return $this->redirectToRoute('transacciontipo_edit', array('id' => $transaccionTipo->getId()));
        }

        return $this->render('transacciontipo/edit.html.twig', array(
            'transaccionTipo' => $transaccionTipo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TransaccionTipo entity.
     *
     * @Route("/{id}", name="transacciontipo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TransaccionTipo $transaccionTipo)
    {
        $form = $this->createDeleteForm($transaccionTipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($transaccionTipo);
            $em->flush();
        }

        return $this->redirectToRoute('transacciontipo_index');
    }

    /**
     * Creates a form to delete a TransaccionTipo entity.
     *
     * @param TransaccionTipo $transaccionTipo The TransaccionTipo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TransaccionTipo $transaccionTipo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('transacciontipo_delete', array('id' => $transaccionTipo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
