<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpForbiddenException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 403;
    const HTTP_REASON_PHRASE = 'Forbidden';
}