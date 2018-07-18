<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpBadRequestException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 400;
    const HTTP_REASON_PHRASE = 'Bad Request';
}