<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpTooManyRequestsException extends HttpErrorException
{
    protected $httpErrorCode = 429;
}