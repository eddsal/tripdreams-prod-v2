<?php

namespace Container4xmNZFA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jg8t082Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jg8t082' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jg8t082'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}
