<?php

namespace ContainerP7U6ZBZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaisonTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SaisonType' shared autowired service.
     *
     * @return \App\Form\SaisonType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SaisonType.php';

        return $container->privates['App\\Form\\SaisonType'] = new \App\Form\SaisonType();
    }
}
