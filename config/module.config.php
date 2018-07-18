<?php

return [
    'http_errors' => [
        'decorators' => [
            302 => \Zend\HttpErrors\Decorator\BadRequestResponseDecorator::class
        ]
    ]
];