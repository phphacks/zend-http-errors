<?php

use Zend\HttpErrors\Factory\ResponseFactory;

$decorators = [];

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