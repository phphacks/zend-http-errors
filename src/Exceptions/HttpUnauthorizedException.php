<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpUnauthorizedException extends HttpErrorException
{
    protected $httpErrorCode = 401;
}