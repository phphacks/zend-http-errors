<?php

namespace Zend\HttpErrors\Factory\Strategy;

use Zend\HttpErrors\Factory\Strategy\Base\ResponseFactoryStrategyInterface;

/**
 * HttpInternalServerErrorStrategy
 * @package Zend\HttpErrors\Factory\Strategy
 */
class HttpInternalServerErrorStrategy implements ResponseFactoryStrategyInterface
{
    /**
     * @param \Exception $exception
     * @return mixed|void
     */
    public function createFrom(\Exception $exception)
    {
        // TODO: Implement createFrom() method.
    }
}