<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpNotFoundException extends HttpErrorException
{
    protected $httpErrorCode = 404;
}