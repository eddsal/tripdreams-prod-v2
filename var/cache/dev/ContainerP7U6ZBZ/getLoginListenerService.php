<?php

namespace ContainerP7U6ZBZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\LoginListener' shared autowired service.
     *
     * @return \App\EventListener\LoginListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/LoginListener.php';

        return $container->privates['App\\EventListener\\LoginListener'] = new \App\EventListener\LoginListener(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
