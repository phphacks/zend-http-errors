<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpRequestTimeoutException extends HttpErrorException
{
    protected $httpErrorCode = 408;
    const HTTP_ERROR_CODE = 408;
}