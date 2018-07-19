<?php

namespace Zend\HttpErrors\Tests;

use PHPUnit\Framework\TestCase;
use Zend\Mvc\Application;

/**
 * ModuleTest
 *
 * @package Zend\HttpErrors\Tests
 */
class ModuleTest extends TestCase
{
    public function testIfModuleWasCreated()
    {
        $application = Application::init(include __DIR__ . '/application.config.php');
        $serviceManager = $application->getServiceManager();
        $moduleManager = $serviceManager->get('ModuleManager');
        $loadedModules = $moduleManager->getLoadedModules();
        $this->assertArrayHasKey('Zend\HttpErrors', $loadedModules);
    }
}