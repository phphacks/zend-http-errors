<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

class HttpPaymentRequiredException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 402;
    const HTTP_REASON_PHRASE = 'Payment Required';
}