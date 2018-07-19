<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

/**
 * HttpNotImplementedException
 *
 * @package Zend\HttpErrors\Exceptions
 */
class HttpNotImplementedException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 501;
    const HTTP_REASON_PHRASE = 'Not Implemented';
}