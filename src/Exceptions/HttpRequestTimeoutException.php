<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpRequestTimeoutException extends HttpErrorException
{
    protected $httpErrorCode = 408;
}