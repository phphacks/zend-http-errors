<?php

namespace Zend\HttpErrors\Event;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;
use Zend\HttpErrors\Factory\ResponseFactory;
use Zend\Mvc\MvcEvent;

/**
 * Class ErrorEventHandler
 * @package Zend\HttpErrors\Event
 */
class ErrorEventHandler
{
    /**
     * @var ResponseFactory
     */
    private $responseFactory;

    /**
     * ErrorEventHandler constructor.
     *
     * @param ResponseFactory $responseFactory
     */
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * @param MvcEvent $event
     * @return mixed
     */
    public function getException(MvcEvent $event)
    {
        return $event->getParam('exception');
    }

    /**
     * @param MvcEvent $event
     * @return bool
     */
    public function eventShouldBeHandled(MvcEvent $event): bool
    {
        $exception = $this->getException($event);
        return ($event->isError() && $exception instanceof HttpErrorException);
    }

    /**
     * @param MvcEvent $event
     * @return MvcEvent
     */
    public function handle(MvcEvent $event)
    {
        if(!$this->eventShouldBeHandled($event)) {
            return $event;
        }

        /** @var HttpErrorException $exception */
        $exception = $this->getException($event);

        $response = $this->responseFactory->createFor($exception);

        $event->setResponse($response);
        $event->stopPropagation(true);

        return $event;
    }
}