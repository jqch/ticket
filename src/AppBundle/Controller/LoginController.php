<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/login", name="login")
 */

class LoginController extends Controller
{
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
                $rol = $request->get('usuario');
                switch ($rol) {
                    case 1: // pantalla
                        return $this->redirect($this->generateUrl('pantalla_index'));
                        break;
                    case 2: // dispensador
                        return $this->redirect($this->generateUrl('dispensador_index'));
                        break;
                    case 3: // ventanilla - opciones operador
                        return $this->redirect($this->generateUrl('ventanilla_index'));
                        break;
                    case 4: // administrador
                        return $this->redirect($this->generateUrl('login'));
                        break;

                    default:
                        return $this->redirect($this->generateUrl('login'));
                        break;
                }
            } catch (Exception $e) {
                return $this->redirect($this->generateUrl('login'));
            }
    }
}
