<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpUnauthorizedException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 401;
    const HTTP_REASON_PHRASE = 'Unauthorized';
}