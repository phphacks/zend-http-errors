<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpTooManyRequestsException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 429;
    const HTTP_REASON_PHRASE = 'Too Many Requests';
}