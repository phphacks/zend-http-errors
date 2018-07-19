<?php

namespace Zend\HttpErrors\Tests;

use PHPUnit\Framework\TestCase;
use Zend\Mvc\Application;

/**
 * ModuleTest
 *
 * @package Zend\HttpErrors\Tests
 */
class ErrorDispatcherTest extends TestCase
{
    public function testIfModuleWasCreated()
    {
        $application = Application::init(include __DIR__ . '/application.config.php');
        $serviceManager = $application->getServiceManager();
        $moduleManager = $serviceManager->get('ModuleManager');
        $moduleManager->getLoadedModules();
        $application = $application->run();
        $response = $application->getResponse();

        $this->assertEquals($response->getStatusCode(), 500);
    }
}