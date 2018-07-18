<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpServiceUnavailableException extends HttpErrorException
{
    protected $httpErrorCode = 503;
}