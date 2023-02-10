<?php

namespace ContainerTkObAdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ej_U9CIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ej.U9CI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ej.U9CI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'temperature' => ['privates', '.errored..service_locator.ej.U9CI.App\\Entity\\Temperature', NULL, 'Cannot autowire service ".service_locator.ej.U9CI": it needs an instance of "App\\Entity\\Temperature" but this type has been excluded in "config/services.yaml".'],
            'temperatureRepository' => ['privates', 'App\\Repository\\TemperatureRepository', 'getTemperatureRepositoryService', true],
        ], [
            'temperature' => 'App\\Entity\\Temperature',
            'temperatureRepository' => 'App\\Repository\\TemperatureRepository',
        ]);
    }
}
