<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/pantalla')) {
            // pantalla_index
            if (rtrim($pathinfo, '/') === '/pantalla') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pantalla_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PantallaController::indexAction',  '_route' => 'pantalla_index',);
            }

            if (0 === strpos($pathinfo, '/pantalla/next')) {
                // pantalla_next_video
                if ($pathinfo === '/pantalla/nextVideo') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PantallaController::nextVideoAction',  '_route' => 'pantalla_next_video',);
                }

                // pantalla_next_text
                if ($pathinfo === '/pantalla/nextText') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PantallaController::nextTextAction',  '_route' => 'pantalla_next_text',);
                }

            }

        }

        // ticket_index
        if (rtrim($pathinfo, '/') === '/ticket') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ticket_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket_index',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
