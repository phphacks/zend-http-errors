<?php

namespace Zend\HttpErrors\Tests\Factory;

use Zend\HttpErrors\Exceptions\HttpBadRequestException;
use Zend\HttpErrors\Exceptions\HttpUnauthorizedException;
use Zend\HttpErrors\Factory\ResponseFactory;
use Zend\HttpErrors\Tests\ApplicationTestCase;

class ResponseFactoryTest extends ApplicationTestCase
{
    private $exceptions;

    public function setUp()
    {
        $this->exceptions = [
            HttpBadRequestException::class,
            HttpUnauthorizedException::class
        ];

        parent::setUp();
    }

    public function testExceptions()
    {
        foreach ($this->exceptions as $exception) {
            $exception = new $exception("Deu fita", 123);

            /** @var ResponseFactory $factory */
            $factory = $this->serviceManager->get('Zend\HttpErrors\Factory\ResponseFactory');
            $response = $factory->createFor($exception);
            $this->assertEquals($exception::HTTP_ERROR_CODE, $response->getStatusCode());
        }
    }
}