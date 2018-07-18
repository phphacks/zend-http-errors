<?php

namespace Zend\HttpErrors\Exceptions\Base;

class HttpErrorException extends \Exception
{
    const HTTP_ERROR_CODE = 000;

    public function getHttpErrorCode(): int
    {
        return self::HTTP_ERROR_CODE;
    }
}