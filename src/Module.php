<?php

namespace Zend\HttpErrors;

use Zend\HttpErrors\Event\ErrorEventHandler;
use Zend\Mvc\MvcEvent;

/**
 * Module
 *
 * @package Zend\HttpErrors
 */
class Module
{
    /**
     * @param MvcEvent $event
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function onBootstrap(MvcEvent $event)
    {
        $serviceManager = $event->getApplication()->getServiceManager();
        $responseFactory = $serviceManager->get('Zend\HttpErrors\Factory\ResponseFactory');
        $errorEventHandler = new ErrorEventHandler($responseFactory);

        $callback = function (MvcEvent $event) use ($errorEventHandler) {
            return $errorEventHandler->handle($event);
        };

        $eventManager = $event->getApplication()->getEventManager();
        $eventManager->attach(MvcEvent::EVENT_RENDER_ERROR, $callback);
        $eventManager->attach(MvcEvent::EVENT_DISPATCH_ERROR, $callback);
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}