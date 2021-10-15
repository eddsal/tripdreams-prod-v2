<?php

namespace Container4xmNZFA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Guard_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), []);
        $a->setSessionAuthenticationStrategy(($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        $container->privates['security.authentication.listener.guard.main'] = $instance = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Security\\AppCustomAuthenticator'] ?? $container->load('getAppCustomAuthenticatorService'));
        }, 1), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')));

        $instance->setRememberMeServices(($container->privates['security.authentication.rememberme.services.simplehash.main'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService')));

        return $instance;
    }
}