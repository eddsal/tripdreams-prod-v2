<?php

namespace Container4xmNZFA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9PcZBsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9Pc_zBs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9Pc_zBs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adresse' => ['privates', '.errored..service_locator.9Pc_zBs.App\\Entity\\Adresse', NULL, 'Cannot autowire service ".service_locator.9Pc_zBs": it references class "App\\Entity\\Adresse" but no such service exists.'],
        ], [
            'adresse' => 'App\\Entity\\Adresse',
        ]);
    }
}
