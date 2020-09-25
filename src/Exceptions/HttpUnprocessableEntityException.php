<?php

namespace Zend\HttpErrors\Exceptions;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

/**
 * Class HttpUnprocessableEntityException
 *
 * @package Zend\HttpErrors\Exceptions
 */
class HttpUnprocessableEntityException extends HttpErrorException
{
    const HTTP_ERROR_CODE = 422;
    const HTTP_REASON_PHRASE = 'Unprocessable entity';
}
