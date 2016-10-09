<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Anuncio;
use AppBundle\Form\AnuncioType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Anuncio controller.
 *
 * @Route("/anuncio")
 */
class AnuncioController extends Controller
{
    public $session;

    public function __construct() {
        $this->session = new Session();
    }

    /**
     * Lists all Anuncio entities.
     *
     * @Route("/", name="anuncio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agenciaId = $this->session->get('agenciaId');
        if($this->session->get('agenciaTipoId') == 2){
            $anuncios = $em->getRepository('AppBundle:Anuncio')->findBy(array('agencia'=>$agenciaId));
        }else{
            $anuncios = $em->getRepository('AppBundle:Anuncio')->findAll();
        }

        return $this->render('anuncio/index.html.twig', array(
            'anuncios' => $anuncios,
        ));
    }

    /**
     * Creates a new Anuncio entity.
     *
     * @Route("/new", name="anuncio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $anuncio = new Anuncio();
        $form = $this->createForm('AppBundle\Form\AnuncioType', $anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

            return $this->redirectToRoute('anuncio_show', array('id' => $anuncio->getId()));
        }

        return $this->render('anuncio/new.html.twig', array(
            'anuncio' => $anuncio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Anuncio entity.
     *
     * @Route("/{id}", name="anuncio_show")
     * @Method("GET")
     */
    public function showAction(Anuncio $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);

        return $this->render('anuncio/show.html.twig', array(
            'anuncio' => $anuncio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Anuncio entity.
     *
     * @Route("/{id}/edit", name="anuncio_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Anuncio $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);
        $editForm = $this->createForm('AppBundle\Form\AnuncioType', $anuncio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

            return $this->redirectToRoute('anuncio_edit', array('id' => $anuncio->getId()));
        }

        return $this->render('anuncio/edit.html.twig', array(
            'anuncio' => $anuncio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Anuncio entity.
     *
     * @Route("/{id}", name="anuncio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Anuncio $anuncio)
    {
        $form = $this->createDeleteForm($anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($anuncio);
            $em->flush();
        }

        return $this->redirectToRoute('anuncio_index');
    }

    /**
     * Creates a form to delete a Anuncio entity.
     *
     * @param Anuncio $anuncio The Anuncio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Anuncio $anuncio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anuncio_delete', array('id' => $anuncio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
