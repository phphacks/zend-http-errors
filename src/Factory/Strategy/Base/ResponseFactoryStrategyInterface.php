<?php

namespace Zend\HttpErrors\Factory\Strategy\Base;

/**
 * ResponseFactoryStrategyInterface
 *
 * @package Zend\HttpErrors\Factory\Strategy\Base
 */
interface ResponseFactoryStrategyInterface
{
    /**
     * @param \Exception $exception
     * @return mixed
     */
    public function createFrom(\Exception $exception);
}