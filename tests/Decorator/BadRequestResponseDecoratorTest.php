<?php

namespace Zend\HttpErrors\Tests\Decorator;

use Zend\HttpErrors\Exceptions\HttpBadRequestException;
use Zend\HttpErrors\Factory\ResponseFactory;
use Zend\HttpErrors\Tests\ApplicationTestCase;

class BadRequestResponseDecoratorTest extends ApplicationTestCase
{
    public function testExceptionFactory()
    {
        /** @var ResponseFactory $factory */
        $factory = $this->serviceManager->get('Zend\HttpErrors\Factory\ResponseFactory');
        $response = $factory->createFor(new HttpBadRequestException());

        $this->assertEquals(HttpBadRequestException::HTTP_ERROR_CODE, $response->getStatusCode());
    }
}