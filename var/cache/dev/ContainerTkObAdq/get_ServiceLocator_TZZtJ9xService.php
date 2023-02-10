<?php

namespace ContainerTkObAdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TZZtJ9xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TZZtJ9x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TZZtJ9x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'temperature' => ['privates', '.errored..service_locator.TZZtJ9x.App\\Entity\\Temperature', NULL, 'Cannot autowire service ".service_locator.TZZtJ9x": it needs an instance of "App\\Entity\\Temperature" but this type has been excluded in "config/services.yaml".'],
        ], [
            'temperature' => 'App\\Entity\\Temperature',
        ]);
    }
}
