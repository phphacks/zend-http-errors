<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpMethodNotAllowedException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 405;
    const HTTP_REASON_PHRASE = 'Method Not Allowed';
}