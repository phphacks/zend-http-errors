<?php

namespace Zend\HttpErrors\Decorator;

use Zend\Http\PhpEnvironment\Response;
use Zend\HttpErrors\Decorator\Base\ResponseDecoratorInterface;
use Zend\HttpErrors\Exceptions\HttpBadRequestException;

class BadRequestResponseDecorator implements ResponseDecoratorInterface
{
    public function decorate(Response &$response)
    {
        $response->setStatusCode(HttpBadRequestException::HTTP_ERROR_CODE);
    }
}