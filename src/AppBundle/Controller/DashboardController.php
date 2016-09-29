<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("/dashboard", name="dashboard")
 */

class DashboardController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = new Session();
    }
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction(Request $request)
    {
        return $this->render('dashboard/index.html.twig');
    }
}
