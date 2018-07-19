<?php

namespace Zend\HttpErrors\Event;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;
use Zend\HttpErrors\Exceptions\HttpInternalServerErrorException;
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
        $response = $event->getResponse();
        $exception = $this->getException($event);

        if(!$this->eventShouldBeHandled($event)) {
            $exception = new HttpInternalServerErrorException();
        }

        $this->responseFactory->createFor($exception, $response);
        $event->stopPropagation(true);

        return $event;
    }
}