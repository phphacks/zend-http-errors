<?php

namespace Zend\HttpErrors\Factory;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class JsonResponseFactory
{
    public static function createFrom(HttpErrorException $exception)
    {
        return json_encode([
            'errorCode' => $exception->getCode(),
            'message'   => $exception->getMessage(),
        ]);
    }
}