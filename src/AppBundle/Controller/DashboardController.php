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
        
        $em = $this->getDoctrine()->getManager();
        $departamentos = $em->createQueryBuilder()
                            ->select('l')
                            ->from('AppBundle:Lugar','l')
                            ->where('l.id in (:id)')
                            ->setParameter('id',array(1,2,3,4,5,6,7,8,9))
                            ->getQuery()
                            ->getResult();
        /*
        // variables
        $fechaInicio = date('2016-10-01');
        $fechaFin = date('2016-10-30');
        $lugarId = null;
        $agenciaId = null;
        $servicioId = null;
        $clienteTipoId = null;

        $query = $em->getConnection()->prepare('SELECT get_dashboard1_json(:fecha_inicio::DATE, :fecha_fin::DATE, :lugar_id::INT, :agencia_id::INT, :servicio_id::VARCHAR, :cliente_tipo_id::VARCHAR)');
        $query->bindValue(':fecha_inicio',$fechaInicio);
        $query->bindValue(':fecha_fin',$fechaFin);
        $query->bindValue(':lugar_id',$lugarId);
        $query->bindValue(':agencia_id',$agenciaId);
        $query->bindValue(':servicio_id',$servicioId);
        $query->bindValue(':cliente_tipo_id',$clienteTipoId);        
        $query->execute();
        $tickets = $query->fetchAll();

        dump($tickets);die;
        
        $arrayTickets = array();
        if(count($tickets)>0){
            foreach ($tickets as $t) {
                $ticket = json_decode($t['get_listar_ticket_pantalla_json']);
                $arrayTickets[] = $ticket;
            }
        }
        */
        $depArray = array();
        foreach ($departamentos as $d) {
            $depArray[] = array(
                'id'=>$d->getId(),
                'departamento'=>$d->getLugar(),
                'atencion'=>rand(1,99),
                'pausa'=>rand(1,99),
                'derivados'=>rand(1,99),
                'terminados'=>rand(1,99),
                'abandonados'=>rand(1,99),
                'suspendidos'=>rand(1,99),
                'total'=>rand(99,999),
            );
        }/*
        return $this->render('dashboard/dashboardgeneral.html.twig',array(
            'registros'=>
        ));*/
        return $this->render('dashboard/index.html.twig',array(
            'registros'=>$depArray
        ));
    }
}
