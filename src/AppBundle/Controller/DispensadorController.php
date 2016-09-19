<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/dispensador", name="dispensador")
 */

class DispensadorController extends Controller
{
    /**
     * @Route("/", name="dispensador_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $servicios[] = (object) array(
                'id' => '1',
                'servicioTipo' => '1',
                'servicio'=> 'Caja',
                'esactivo'=>'1',
                'esticket'=>'0',
                'rutasonido'=>'beet.mp3',
                'obs'=>'');
        $servicios[] = (object) array(
                'id' => '2',
                'servicioTipo' => '1',
                'servicio'=> 'Credito',
                'esactivo'=>'1',
                'esticket'=>'1',
                'rutasonido'=>'beet.mp3',
                'obs'=>'');
        $servicios[] = (object) array(
                'id' => '3',
                'servicioTipo' => '1',
                'servicio'=> 'Pataforma',
                'esactivo'=>'1',
                'esticket'=>'1',
                'rutasonido'=>'beet.mp3',
                'obs'=>'');
        $servicios[] = (object) array(
                'id' => '4',
                'servicioTipo' => '1',
                'servicio'=> 'Otros Servicios',
                'esactivo'=>'1',
                'esticket'=>'1',
                'rutasonido'=>'beet.mp3',
                'obs'=>'');

        return $this->render('Dispensador/dispensador.html.twig', array('servicios'=>$servicios));
    }

    /**
     * @Route("/nextScreen", name="dispensador_next_screen")
     */
    public function nextScreenAction(Request $request){
        try {
            $id = $request->get('id');
            $esticket = $request->get('ticket');

            // Mostrar la siguiente pantalla
            if($esticket == 0){
                    $em = $this->getDoctrine()->getManager();
                    $servicios[] = (object) array(
                            'id' => '1',
                            'servicioTipo' => '1',
                            'servicio'=> 'Cliente Regular',
                            'esactivo'=>'1',
                            'esticket'=>'1',
                            'rutasonido'=>'beet.mp3',
                            'obs'=>'');
                    $servicios[] = (object) array(
                            'id' => '2',
                            'servicioTipo' => '1',
                            'servicio'=> 'Adulto Mayor',
                            'esactivo'=>'1',
                            'esticket'=>'1',
                            'rutasonido'=>'beet.mp3',
                            'obs'=>'');

                    return $this->render('Dispensador/botones.html.twig', array('servicios'=>$servicios));
            }
            // Mostrar la primera pantalla e imprimir el ticket
            if($esticket == 1){
                $em = $this->getDoctrine()->getManager();

                // Registrar  el ticket


                // imprimir


                // Mostrar la primera pantalla

                $servicios[] = (object) array(
                        'id' => '1',
                        'servicioTipo' => '1',
                        'servicio'=> 'Caja',
                        'esactivo'=>'1',
                        'esticket'=>'0',
                        'rutasonido'=>'beet.mp3',
                        'obs'=>'');
                $servicios[] = (object) array(
                        'id' => '2',
                        'servicioTipo' => '1',
                        'servicio'=> 'Credito',
                        'esactivo'=>'1',
                        'esticket'=>'1',
                        'rutasonido'=>'beet.mp3',
                        'obs'=>'');
                $servicios[] = (object) array(
                        'id' => '3',
                        'servicioTipo' => '1',
                        'servicio'=> 'Pataforma',
                        'esactivo'=>'1',
                        'esticket'=>'1',
                        'rutasonido'=>'beet.mp3',
                        'obs'=>'');
                $servicios[] = (object) array(
                        'id' => '4',
                        'servicioTipo' => '1',
                        'servicio'=> 'Otros Servicios',
                        'esactivo'=>'1',
                        'esticket'=>'1',
                        'rutasonido'=>'beet.mp3',
                        'obs'=>'');

                return $this->render('Dispensador/botones.html.twig', array('servicios'=>$servicios));
            }

        } catch (Exception $e) {

        }
    }
}
