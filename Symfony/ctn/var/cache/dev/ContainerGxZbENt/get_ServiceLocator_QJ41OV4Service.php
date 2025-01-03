<?php

namespace ContainerGxZbENt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QJ41OV4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qJ41OV4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qJ41OV4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\MouvementRepository', 'getMouvementRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\MouvementRepository',
        ]);
    }
}
