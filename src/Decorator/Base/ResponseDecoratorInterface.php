<?php

namespace Zend\HttpErrors\Decorator\Base;

use Zend\Http\PhpEnvironment\Response;

interface ResponseDecoratorInterface
{
    public function decorate(Response &$response);
}