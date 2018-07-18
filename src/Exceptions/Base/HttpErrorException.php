<?php

namespace Zend\HttpErrors\Exceptions\Base;

class HttpErrorException extends \Exception
{
    protected $httpErrorCode = 000;

    public function getHttpErrorCode(): int
    {
        return $this->httpErrorCode;
    }
}