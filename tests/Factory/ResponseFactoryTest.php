<?php

namespace Zend\HttpErrors\Tests\Factory;

use Zend\HttpErrors\Exceptions\Base\HttpErrorException;
use Zend\HttpErrors\Exceptions\HttpBadRequestException;
use Zend\HttpErrors\Exceptions\HttpForbiddenException;
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
            new HttpUnauthorizedException(),
            new HttpForbiddenException()
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