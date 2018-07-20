<?php

namespace Zend\HttpErrors\Factory;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;
use Zend\View\Model\JsonModel;

class JsonResponseFactory
{
    public static function createFrom(HttpErrorException $exception)
    {
        $jsonViewModel = new JsonModel([
            'errorCode' => $exception->getCode(),
            'message'   => $exception->getMessage(),
        ]);

        $jsonViewModel->setTerminal(true);

        return $jsonViewModel;
    }
}