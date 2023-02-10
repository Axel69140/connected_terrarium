<?php

namespace ContainerTkObAdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q7QosyKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q7QosyK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q7QosyK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HumidityController::delete' => ['privates', '.service_locator.m_Jm4rm', 'get_ServiceLocator_MJm4rmService', true],
            'App\\Controller\\HumidityController::edit' => ['privates', '.service_locator.m_Jm4rm', 'get_ServiceLocator_MJm4rmService', true],
            'App\\Controller\\HumidityController::index' => ['privates', '.service_locator.Ir_uZOH', 'get_ServiceLocator_IrUZOHService', true],
            'App\\Controller\\HumidityController::new' => ['privates', '.service_locator.Ir_uZOH', 'get_ServiceLocator_IrUZOHService', true],
            'App\\Controller\\HumidityController::show' => ['privates', '.service_locator.mIwn17T', 'get_ServiceLocator_MIwn17TService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.UUMJOv4', 'get_ServiceLocator_UUMJOv4Service', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.Mhqdd2r', 'get_ServiceLocator_Mhqdd2rService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TemperatureController::delete' => ['privates', '.service_locator.ej.U9CI', 'get_ServiceLocator_Ej_U9CIService', true],
            'App\\Controller\\TemperatureController::edit' => ['privates', '.service_locator.ej.U9CI', 'get_ServiceLocator_Ej_U9CIService', true],
            'App\\Controller\\TemperatureController::index' => ['privates', '.service_locator.02Gob5Y', 'get_ServiceLocator_02Gob5YService', true],
            'App\\Controller\\TemperatureController::new' => ['privates', '.service_locator.02Gob5Y', 'get_ServiceLocator_02Gob5YService', true],
            'App\\Controller\\TemperatureController::show' => ['privates', '.service_locator.TZZtJ9x', 'get_ServiceLocator_TZZtJ9xService', true],
            'App\\Controller\\TerrariumController::delete' => ['privates', '.service_locator.RU9gbyC', 'get_ServiceLocator_RU9gbyCService', true],
            'App\\Controller\\TerrariumController::edit' => ['privates', '.service_locator.RU9gbyC', 'get_ServiceLocator_RU9gbyCService', true],
            'App\\Controller\\TerrariumController::index' => ['privates', '.service_locator.pPXPJTZ', 'get_ServiceLocator_PPXPJTZService', true],
            'App\\Controller\\TerrariumController::new' => ['privates', '.service_locator.pPXPJTZ', 'get_ServiceLocator_PPXPJTZService', true],
            'App\\Controller\\TerrariumController::show' => ['privates', '.service_locator.bPDHAvm', 'get_ServiceLocator_BPDHAvmService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HumidityController:delete' => ['privates', '.service_locator.m_Jm4rm', 'get_ServiceLocator_MJm4rmService', true],
            'App\\Controller\\HumidityController:edit' => ['privates', '.service_locator.m_Jm4rm', 'get_ServiceLocator_MJm4rmService', true],
            'App\\Controller\\HumidityController:index' => ['privates', '.service_locator.Ir_uZOH', 'get_ServiceLocator_IrUZOHService', true],
            'App\\Controller\\HumidityController:new' => ['privates', '.service_locator.Ir_uZOH', 'get_ServiceLocator_IrUZOHService', true],
            'App\\Controller\\HumidityController:show' => ['privates', '.service_locator.mIwn17T', 'get_ServiceLocator_MIwn17TService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.UUMJOv4', 'get_ServiceLocator_UUMJOv4Service', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.Mhqdd2r', 'get_ServiceLocator_Mhqdd2rService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TemperatureController:delete' => ['privates', '.service_locator.ej.U9CI', 'get_ServiceLocator_Ej_U9CIService', true],
            'App\\Controller\\TemperatureController:edit' => ['privates', '.service_locator.ej.U9CI', 'get_ServiceLocator_Ej_U9CIService', true],
            'App\\Controller\\TemperatureController:index' => ['privates', '.service_locator.02Gob5Y', 'get_ServiceLocator_02Gob5YService', true],
            'App\\Controller\\TemperatureController:new' => ['privates', '.service_locator.02Gob5Y', 'get_ServiceLocator_02Gob5YService', true],
            'App\\Controller\\TemperatureController:show' => ['privates', '.service_locator.TZZtJ9x', 'get_ServiceLocator_TZZtJ9xService', true],
            'App\\Controller\\TerrariumController:delete' => ['privates', '.service_locator.RU9gbyC', 'get_ServiceLocator_RU9gbyCService', true],
            'App\\Controller\\TerrariumController:edit' => ['privates', '.service_locator.RU9gbyC', 'get_ServiceLocator_RU9gbyCService', true],
            'App\\Controller\\TerrariumController:index' => ['privates', '.service_locator.pPXPJTZ', 'get_ServiceLocator_PPXPJTZService', true],
            'App\\Controller\\TerrariumController:new' => ['privates', '.service_locator.pPXPJTZ', 'get_ServiceLocator_PPXPJTZService', true],
            'App\\Controller\\TerrariumController:show' => ['privates', '.service_locator.bPDHAvm', 'get_ServiceLocator_BPDHAvmService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HumidityController::delete' => '?',
            'App\\Controller\\HumidityController::edit' => '?',
            'App\\Controller\\HumidityController::index' => '?',
            'App\\Controller\\HumidityController::new' => '?',
            'App\\Controller\\HumidityController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TemperatureController::delete' => '?',
            'App\\Controller\\TemperatureController::edit' => '?',
            'App\\Controller\\TemperatureController::index' => '?',
            'App\\Controller\\TemperatureController::new' => '?',
            'App\\Controller\\TemperatureController::show' => '?',
            'App\\Controller\\TerrariumController::delete' => '?',
            'App\\Controller\\TerrariumController::edit' => '?',
            'App\\Controller\\TerrariumController::index' => '?',
            'App\\Controller\\TerrariumController::new' => '?',
            'App\\Controller\\TerrariumController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HumidityController:delete' => '?',
            'App\\Controller\\HumidityController:edit' => '?',
            'App\\Controller\\HumidityController:index' => '?',
            'App\\Controller\\HumidityController:new' => '?',
            'App\\Controller\\HumidityController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TemperatureController:delete' => '?',
            'App\\Controller\\TemperatureController:edit' => '?',
            'App\\Controller\\TemperatureController:index' => '?',
            'App\\Controller\\TemperatureController:new' => '?',
            'App\\Controller\\TemperatureController:show' => '?',
            'App\\Controller\\TerrariumController:delete' => '?',
            'App\\Controller\\TerrariumController:edit' => '?',
            'App\\Controller\\TerrariumController:index' => '?',
            'App\\Controller\\TerrariumController:new' => '?',
            'App\\Controller\\TerrariumController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
