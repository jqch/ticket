<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/agencia')) {
            // agencia
            if (rtrim($pathinfo, '/') === '/agencia') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agencia');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::indexAction',  '_route' => 'agencia',);
            }

            if (0 === strpos($pathinfo, '/agencia/list')) {
                // agencia_list
                if (rtrim($pathinfo, '/') === '/agencia/list') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'agencia_list');
                    }

                    return array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\AgenciaController::listAction',  '_route' => 'agencia_list',);
                }

                // app_agencia_list
                if (preg_match('#^/agencia/list/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'app_agencia_list');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_agencia_list')), array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::listAction',));
                }

            }

            // agencia_show
            if ($pathinfo === '/agencia/show') {
                return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::showAction',  '_route' => 'agencia_show',);
            }

            // agencia_new
            if ($pathinfo === '/agencia/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::newAction',  '_route' => 'agencia_new',);
            }

            // agencia_edit
            if ($pathinfo === '/agencia/edit') {
                return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::editAction',  '_route' => 'agencia_edit',);
            }

            // agencia_delete
            if ($pathinfo === '/agencia/delete') {
                return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::deleteAction',  '_route' => 'agencia_delete',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/dispensador')) {
            // dispensador_index
            if (rtrim($pathinfo, '/') === '/dispensador') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dispensador_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DispensadorController::indexAction',  '_route' => 'dispensador_index',);
            }

            // dispensador_next_screen
            if ($pathinfo === '/dispensador/nextScreen') {
                return array (  '_controller' => 'AppBundle\\Controller\\DispensadorController::nextScreenAction',  '_route' => 'dispensador_next_screen',);
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login/loginCheck') {
                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'login_check',);
            }

        }

        // operador_index
        if (rtrim($pathinfo, '/') === '/operador') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'operador_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\OperadorController::indexAction',  '_route' => 'operador_index',);
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

        if (0 === strpos($pathinfo, '/ticket')) {
            // ticket_index
            if (rtrim($pathinfo, '/') === '/ticket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ticket_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket_index',);
            }

            // ticket_next_screen
            if ($pathinfo === '/ticket/nextScreen') {
                return array (  '_controller' => 'AppBundle\\Controller\\TicketController::nextScreenAction',  '_route' => 'ticket_next_screen',);
            }

        }

        if (0 === strpos($pathinfo, '/ventanilla')) {
            // ventanilla_index
            if (rtrim($pathinfo, '/') === '/ventanilla') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ventanilla_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::indexAction',  '_route' => 'ventanilla_index',);
            }

            // ventanilla_tickets_espera
            if ($pathinfo === '/ventanilla/tickets_espera') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::ticketsEsperaAction',  '_route' => 'ventanilla_tickets_espera',);
            }

            // ventanilla_next_ticket
            if ($pathinfo === '/ventanilla/next_ticket') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::nextTicketAction',  '_route' => 'ventanilla_next_ticket',);
            }

            // ventanilla_rellamar
            if ($pathinfo === '/ventanilla/rellamar') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::rellamarAction',  '_route' => 'ventanilla_rellamar',);
            }

            // ventanilla_suspender
            if ($pathinfo === '/ventanilla/suspender') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::suspenderAction',  '_route' => 'ventanilla_suspender',);
            }

            // ventanilla_iniciar
            if ($pathinfo === '/ventanilla/iniciar') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::iniciarAction',  '_route' => 'ventanilla_iniciar',);
            }

            // ventanilla_pausar
            if ($pathinfo === '/ventanilla/pausar') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::pausarAction',  '_route' => 'ventanilla_pausar',);
            }

            // ventanilla_continuar
            if ($pathinfo === '/ventanilla/continuar') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::continuarAction',  '_route' => 'ventanilla_continuar',);
            }

            // ventanilla_finalizar
            if ($pathinfo === '/ventanilla/finalizar') {
                return array (  '_controller' => 'AppBundle\\Controller\\VentanillaController::finalizarAction',  '_route' => 'ventanilla_finalizar',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
