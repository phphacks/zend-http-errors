<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpServiceUnavailableException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 503;
    const HTTP_REASON_PHRASE = 'Service Unavailable';
}