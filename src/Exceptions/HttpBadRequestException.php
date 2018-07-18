<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpBadRequestException extends HttpErrorException
{
    protected $httpErrorCode = 400;
}