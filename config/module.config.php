<?php

use Zend\HttpErrors\Factory\ResponseFactory;
use Zend\HttpErrors\Exceptions\HttpBadRequestException;
use Zend\HttpErrors\Decorator\BadRequestResponseDecorator;

$decorators = [
    HttpBadRequestException::HTTP_ERROR_CODE => BadRequestResponseDecorator::class
];

return [
    'service_manager' => [
        'factories' => [
            ResponseFactory::class => function() use($decorators) {
                $config = new Zend\Config\Config($decorators);
                return new ResponseFactory($config);
            }
        ]
    ]
];