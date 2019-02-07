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
     * @param null $response
     * @return null|Response
     */
    public function createFor(HttpErrorException $exception, $response = null)
    {
//        if ( $response instanceof \Zend\Console\Response) {
//            return $response;
//        }

        if(empty($response)) {
            $response = new Response();
        }

        $response->setStatusCode($exception::HTTP_ERROR_CODE);
        $response->setReasonPhrase($exception::HTTP_REASON_PHRASE );

        $httpErrorCode = $exception::HTTP_ERROR_CODE;

        if(isset($this->decorators[$httpErrorCode])) {
            $decoratorNamespace = $this->decorators[$httpErrorCode];

            /** @var ResponseDecoratorInterface $decorator */
            $decorator = new $decoratorNamespace;
            $decorator->decorate($response);
        }

        return $response;
    }
}