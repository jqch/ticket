<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ClienteTipo;
use AppBundle\Form\ClienteTipoType;

/**
 * ClienteTipo controller.
 *
 * @Route("/clientetipo")
 */
class ClienteTipoController extends Controller
{
    /**
     * Lists all ClienteTipo entities.
     *
     * @Route("/", name="clientetipo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clienteTipos = $em->getRepository('AppBundle:ClienteTipo')->findAll();

        return $this->render('clientetipo/index.html.twig', array(
            'clienteTipos' => $clienteTipos,
        ));
    }

    /**
     * Creates a new ClienteTipo entity.
     *
     * @Route("/new", name="clientetipo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $clienteTipo = new ClienteTipo();
        $form = $this->createForm('AppBundle\Form\ClienteTipoType', $clienteTipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($clienteTipo);
            $em->flush();

            return $this->redirectToRoute('clientetipo_show', array('id' => $clienteTipo->getId()));
        }

        return $this->render('clientetipo/new.html.twig', array(
            'clienteTipo' => $clienteTipo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ClienteTipo entity.
     *
     * @Route("/{id}", name="clientetipo_show")
     * @Method("GET")
     */
    public function showAction(ClienteTipo $clienteTipo)
    {
        $deleteForm = $this->createDeleteForm($clienteTipo);

        return $this->render('clientetipo/show.html.twig', array(
            'clienteTipo' => $clienteTipo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ClienteTipo entity.
     *
     * @Route("/{id}/edit", name="clientetipo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ClienteTipo $clienteTipo)
    {
        $deleteForm = $this->createDeleteForm($clienteTipo);
        $editForm = $this->createForm('AppBundle\Form\ClienteTipoType', $clienteTipo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($clienteTipo);
            $em->flush();

            return $this->redirectToRoute('clientetipo_edit', array('id' => $clienteTipo->getId()));
        }

        return $this->render('clientetipo/edit.html.twig', array(
            'clienteTipo' => $clienteTipo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ClienteTipo entity.
     *
     * @Route("/{id}", name="clientetipo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ClienteTipo $clienteTipo)
    {
        $form = $this->createDeleteForm($clienteTipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($clienteTipo);
            $em->flush();
        }

        return $this->redirectToRoute('clientetipo_index');
    }

    /**
     * Creates a form to delete a ClienteTipo entity.
     *
     * @param ClienteTipo $clienteTipo The ClienteTipo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ClienteTipo $clienteTipo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clientetipo_delete', array('id' => $clienteTipo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
