<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpInternalServerErrorException extends HttpErrorException
{
    protected $httpErrorCode = 500;
}