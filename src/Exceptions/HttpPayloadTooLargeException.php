<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpPayloadTooLargeException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 413;
    const HTTP_REASON_PHRASE = 'Payload Too Large';
}