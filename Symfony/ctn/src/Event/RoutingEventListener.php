<?php

namespace App\Event;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;




class RoutingEventListener  extends AbstractController
{

    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onKernelRequest(RequestEvent $event)
    {
/*
        // Your code here, which will run every time a route is accessed.
        // For example, you can log the route name or perform some other actions.
        $request = $event->getRequest();
        $routeName = $request->attributes->get('_route');
        $session = $request->getSession();
        // Create a redirect response to the app_login route.


        $id = $session->get('user_id');
        $fonction = $session->get('user_fonction');
        $new = $session->get('user_new');

        if ($routeName == "app_logout") {
        } else {

            if (!$id) {

                if ($routeName != "app_login" and $routeName != "app_auth") {
                    $loginRoute = $this->router->generate('app_login');
                    $response = new RedirectResponse($loginRoute);
                    $event->setResponse($response);
                }
            } else {

                if ($new and ($routeName == "app_signup" or $routeName == "app_signup_x")) {
                } else {


                    if ($fonction === "Gestionnaire") {

                        if (strpos($routeName, "app_gestionnaire") !== false) {
                        } else {
                            $loginRoute = $this->router->generate('app_gestionnaire');
                            $response = new RedirectResponse($loginRoute);
                            $event->setResponse($response);
                        }
                    } elseif ($fonction === "G. Utilisateur") {
                        if (strpos($routeName, "app_utilisageur") !== false) {
                        } else {
                            $loginRoute = $this->router->generate('app_utilisageur');
                            $response = new RedirectResponse($loginRoute);
                            $event->setResponse($response);
                        }
                    } elseif ($fonction === "Commandant") {
                        if (strpos($routeName, "app_commandant") !== false) {
                        } else {
                            $loginRoute = $this->router->generate('app_commandant');
                            $response = new RedirectResponse($loginRoute);
                            $event->setResponse($response);
                        }
                    } else {
                        if (strpos($routeName, "app_navigant") !== false) {
                        } else {
                            $loginRoute = $this->router->generate('app_navigant');
                            $response = new RedirectResponse($loginRoute);
                            $event->setResponse($response);
                        }
                    }
                }
            }
        }
    
    */
    }
}
