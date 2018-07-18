<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpPayloadTooLargeException extends HttpErrorException
{
    protected $httpErrorCode = 413;
}