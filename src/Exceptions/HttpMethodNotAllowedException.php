<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpMethodNotAllowedException extends HttpErrorException
{
    protected $httpErrorCode = 405;
}