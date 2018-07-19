<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpInternalServerErrorException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 500;
    const HTTP_REASON_PHRASE = 'Internal Server Error';
}