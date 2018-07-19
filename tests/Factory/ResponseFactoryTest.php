<?php

namespace Zend\HttpErrors\Tests\Factory;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;
use Zend\HttpErrors\Exceptions\HttpBadRequestException;
use Zend\HttpErrors\Exceptions\HttpForbiddenException;
use Zend\HttpErrors\Exceptions\HttpInternalServerErrorException;
use Zend\HttpErrors\Exceptions\HttpMethodNotAllowedException;
use Zend\HttpErrors\Exceptions\HttpNotFoundException;
use Zend\HttpErrors\Exceptions\HttpNotImplementedException;
use Zend\HttpErrors\Exceptions\HttpPayloadTooLargeException;
use Zend\HttpErrors\Exceptions\HttpRequestTimeoutException;
use Zend\HttpErrors\Exceptions\HttpServiceUnavailableException;
use Zend\HttpErrors\Exceptions\HttpTooManyRequestsException;
use Zend\HttpErrors\Exceptions\HttpUnauthorizedException;
use Zend\HttpErrors\Factory\ResponseFactory;
use Zend\HttpErrors\Tests\ApplicationTestCase;

/**
 * ResponseFactoryTest
 *
 * @package Zend\HttpErrors\Tests\Factory
 */
class ResponseFactoryTest extends ApplicationTestCase
{
    /**
     * @var HttpErrorException[]
     */
    private $exceptions;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->exceptions = [
            new HttpBadRequestException(),
            new HttpForbiddenException(),
            new HttpUnauthorizedException(),
            new HttpNotFoundException(),
            new HttpMethodNotAllowedException(),
            new HttpRequestTimeoutException(),
            new HttpPayloadTooLargeException(),
            new HttpTooManyRequestsException(),
            new HttpNotImplementedException(),
            new HttpInternalServerErrorException(),
            new HttpServiceUnavailableException()
        ];

        parent::setUp();
    }

    /**
     * Exceptions
     */
    public function testExceptions()
    {
        foreach ($this->exceptions as $exception) {
            /** @var ResponseFactory $factory */
            $factory = $this->serviceManager->get('Zend\HttpErrors\Factory\ResponseFactory');
            $response = $factory->createFor($exception);
            $this->assertEquals($exception::HTTP_ERROR_CODE, $response->getStatusCode());
        }
    }
}