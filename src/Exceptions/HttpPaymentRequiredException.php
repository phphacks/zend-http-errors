<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpPaymentRequiredException extends HttpErrorException
{
    protected $httpErrorCode = 402;
}