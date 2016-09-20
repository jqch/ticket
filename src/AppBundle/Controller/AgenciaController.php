<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/agencia", name="agencia")
 */

class AgenciaController extends Controller
{
    /**
     * @Route("/", name="agencia")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Agencia/index.html.twig');
    }


    /**
     * @Route("/list/", defaults={"id" = 0}, name="agencia_list")
     * @Route("/list/{id}/")
     */
    public function listAction(Request $request)
    {
        try {
            $id = $request->get('id');
            if($id == 1){

            }
            $em = $this->getDoctrine()->getManager();
            //dump($id);die;
            switch ($id) {
                case 1:
                    $departamento = 'La Paz';
                    break;
                case 2:
                    $departamento = 'Cochabamba';
                    break;
                case 3:
                    $departamento = 'Santa Cruz';
                    break;
                default:
                    $departamento = 'Nacional';
                    $agencias = $em->getRepository('AppBundle:Lugar')->findAll();
                    dump($agencias);die;
                    break;
            }
            return $this->render('Agencia/list.html.twig', array(
                'id'=>$id,
                'departamento'=>$departamento
            ));
        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/show", name="agencia_show")
     */
    public function showAction(Request $request)
    {
        try {
            $departamento = 1;
            return $this->render('Agencia/show.html.twig');
        } catch (Exception $e) {

        }
    }

    /**
     * @Route("/new", name="agencia_new")
     */
    public function newAction(Request $request)
    {
        try {
            return $this->render('Agencia/new.html.twig');
        } catch (Exception $e) {

        }
    }
    /**
     * @Route("/edit", name="agencia_edit")
     */
    public function editAction(Request $request)
    {
        try {
            return $this->render('Agencia/edit.html.twig');
        } catch (Exception $e) {

        }
    }
    /**
     * @Route("/delete", name="agencia_delete")
     */
    public function deleteAction(Request $request)
    {
        try {
            return new JsonResponse(array('mensaje'=>'hola'));
        } catch (Exception $e) {

        }
    }
}
