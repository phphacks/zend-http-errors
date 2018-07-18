<?php

namespace Zend\HttpErrors\Tests\Decorator;

use PHPUnit\Framework\TestCase;
use Zend\Http\PhpEnvironment\Response;
use Zend\HttpErrors\Decorator\BadRequestResponseDecorator;
use Zend\HttpErrors\Exceptions\HttpBadRequestException;

class BadRequestResponseDecoratorTest extends TestCase
{
    public function testDecoration()
    {
        $response = new Response();
        $response->setStatusCode(200);

        $decorator = new BadRequestResponseDecorator();
        $decorator->decorate($response);

        $this->assertEquals(HttpBadRequestException::HTTP_ERROR_CODE, $response->getStatusCode());
    }
}