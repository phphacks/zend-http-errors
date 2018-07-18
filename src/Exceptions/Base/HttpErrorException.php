<?php

namespace Zend\HttpErrors\Exceptions\Base;

class HttpErrorException extends \Exception
{
    const HTTP_ERROR_CODE = 000;
    const HTTP_REASON_PHRASE = null;

    public function getHttpErrorCode(): int
    {
        return self::HTTP_ERROR_CODE;
    }
}