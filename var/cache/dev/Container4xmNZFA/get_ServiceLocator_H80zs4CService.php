<?php

namespace Container4xmNZFA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H80zs4CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H80zs4C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H80zs4C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'infoPrRepository' => ['privates', 'App\\Repository\\InfoPratiqueRepository', 'getInfoPratiqueRepositoryService', true],
        ], [
            'infoPrRepository' => 'App\\Repository\\InfoPratiqueRepository',
        ]);
    }
}
