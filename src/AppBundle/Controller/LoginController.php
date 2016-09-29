<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("/login", name="login")
 */

class LoginController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     * @Route("/", name="login")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Login/login.html.twig');
    }

    /**
     * @Route("/loginCheck", name="login_check")
     */
    public function loginCheckAction(Request $request)
    {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->getConnection()->beginTransaction();

                $username = $request->get('_username');
                $password = $request->get('_password');

                $operador = $em->getRepository('AppBundle:Operador')->findOneBy(array('usuario'=>$username, 'clave'=>$password));
                if($operador){
                    // Creamos las variables de session
                    $this->session->set('agenciaId',$operador->getAgencia()->getId());
                    $this->session->set('agenciaTipoId',$operador->getAgencia()->getAgenciaTipo());
                    $this->session->set('operadorId',$operador->getId());
                    $this->session->set('operadorTipoId',$operador->getOperadorTipo()->getId());

                    return $this->redirect($this->generateUrl('dashboard'));

                }
                $em->getConnection()->commit();
                $this->get('session')->getFlashBag()->add('notice','Los datos ingresados son incorrectos');
                return $this->redirect($this->generateUrl('login'));

            } catch (Exception $e) {
                return $this->redirect($this->generateUrl('login'));
            }
    }
}
