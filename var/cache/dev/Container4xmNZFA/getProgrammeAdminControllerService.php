<?php

namespace Container4xmNZFA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProgrammeAdminControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ProgrammeAdminController' shared autowired service.
     *
     * @return \App\Controller\Admin\ProgrammeAdminController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/ProgrammeAdminController.php';

        $container->services['App\\Controller\\Admin\\ProgrammeAdminController'] = $instance = new \App\Controller\Admin\ProgrammeAdminController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\Admin\\ProgrammeAdminController', $container));

        return $instance;
    }
}
