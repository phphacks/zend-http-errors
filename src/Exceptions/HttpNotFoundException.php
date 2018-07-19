<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpNotFoundException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 404;
    const HTTP_REASON_PHRASE = 'Not Found';
}