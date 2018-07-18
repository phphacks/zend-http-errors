<?php

namespace Zend\HttpErrors\Factory;

use Zend\Config\Config;
use Zend\Http\PhpEnvironment\Response;
use Zend\HttpErrors\Decorator\Base\ResponseDecoratorInterface;
use Zend\HttpErrors\Exceptions\Base\HttpErrorException;

/**
 * ResponseFactory
 *
 * @package Zend\HttpErrors\Factory
 */
class ResponseFactory
{
    /**
     * @var array
     */
    private $decorators;

    /**
     * ResponseFactory constructor.
     *
     * @param Config $decorators
     */
    public function __construct(Config $decorators)
    {
        $this->decorators = $decorators;
    }

    /**
     * @param HttpErrorException $exception
     * @return Response
     */
    public function createFor(HttpErrorException $exception)
    {
        $response = new Response();
        $response->setReasonPhrase($exception::HTTP_REASON_PHRASE );
        $response->setContent(JsonResponseFactory::createFrom($exception));

        $httpErrorCode = $exception::HTTP_ERROR_CODE;
        $decoratorNamespace = $this->decorators[$httpErrorCode];

        /** @var ResponseDecoratorInterface $decorator */
        $decorator = new $decoratorNamespace;
        $decorator->decorate($response);

        return $response;
    }
}