<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/operador", name="operador")
 */

class OperadorController extends Controller
{
    /**
     * @Route("/", name="operador_index")
     */
    public function indexAction(Request $request)
    {

    }
}
