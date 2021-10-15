<?php

namespace ContainerPbWxSbT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_68SO4WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.68S_o4W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.68S_o4W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'saisonRepository' => ['privates', 'App\\Repository\\SaisonRepository', 'getSaisonRepositoryService', true],
        ], [
            'saisonRepository' => 'App\\Repository\\SaisonRepository',
        ]);
    }
}