<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpConflictErrorException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 409;
    const HTTP_REASON_PHRASE = 'Conflict';
}