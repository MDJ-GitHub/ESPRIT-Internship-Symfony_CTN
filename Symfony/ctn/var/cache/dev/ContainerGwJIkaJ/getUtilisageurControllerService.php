<?php

namespace ContainerGwJIkaJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisageurControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UtilisageurController' shared autowired service.
     *
     * @return \App\Controller\UtilisageurController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'UtilisageurController.php';

        $container->services['App\\Controller\\UtilisageurController'] = $instance = new \App\Controller\UtilisageurController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? self::get_ServiceLocator_O2p6Lk7Service($container))->withContext('App\\Controller\\UtilisageurController', $container));

        return $instance;
    }
}
