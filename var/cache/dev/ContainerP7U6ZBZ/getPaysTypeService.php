<?php

namespace ContainerP7U6ZBZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaysTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PaysType' shared autowired service.
     *
     * @return \App\Form\PaysType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PaysType.php';

        return $container->privates['App\\Form\\PaysType'] = new \App\Form\PaysType();
    }
}
