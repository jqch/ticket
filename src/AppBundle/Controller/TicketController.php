<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/ticket", name="ticket")
 */

class TicketController extends Controller
{
    /**
     * @Route("/", name="ticket_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        return $this->render('Ticket/ticket.html.twig', array('servicios'=>$servicios));
    }

    /**
     * @Route("/nextScreen", name="ticket_next_screen")
     */
    public function nextScreenAction(Request $request){
        try {


        } catch (Exception $e) {

        }
    }
}
