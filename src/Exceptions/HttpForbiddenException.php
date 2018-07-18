<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpForbiddenException extends HttpErrorException
{
    protected $httpErrorCode = 000;
}