<?php

namespace Zend\HttpErrors;

/**
 * Module
 *
 * @package Zend\HttpErrors
 */
class Module
{
    /**
     * @return array
     */
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}