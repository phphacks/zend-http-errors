<?php

namespace Zend\HttpErrors\Tests;

use PHPUnit\Framework\TestCase;
use Zend\Mvc\Application;
use Zend\ServiceManager\ServiceManager;

class ApplicationTestCase extends TestCase
{
    /**
     * @var ServiceManager
     */
    public $serviceManager;

    public function setUp()
    {
        $application = Application::init(include __DIR__ . '/application.config.php');
        $this->serviceManager = $application->getServiceManager();
    }

}