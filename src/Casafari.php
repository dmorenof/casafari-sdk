<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\HttpClient;
use CasafariSDK\Core\HttpMiddleware;
use CasafariSDK\Requests\PropertyListRequest;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyListResponse;
use CasafariSDK\Responses\PropertyResponse;
use Exception;
use InvalidArgumentException;
use Throwable;

final class Casafari
{
    public HttpClient $HttpClient;

    final public function __construct(string $server, string $accessToken)
    {
        $this->setupHttpClient($server, $accessToken);
    }

    /**
     * @param string $server
     * @param string $accessToken
     * @return void
     */
    private function setupHttpClient(string $server, string $accessToken): void
    {
        if (empty($server)) {
            throw new InvalidArgumentException('Invalid server URL');
        }

        if (empty($accessToken)) {
            throw new InvalidArgumentException('Invalid access token');
        }

        $this->HttpClient = new HttpClient($server, $accessToken);
    }

    /**
     * @param HttpMiddleware $middleware
     * @return $this
     */
    final public function withMiddleware(HttpMiddleware $middleware): Casafari
    {
        $this->HttpClient->addMiddleware($middleware);

        return $this;
    }

    /**
     * @param PropertyRequest $PropertyRequest
     * @return PropertyResponse
     * @throws Throwable
     */
    final public function sendProperty(PropertyRequest $PropertyRequest): PropertyResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/SendProperty', null, (string)$PropertyRequest);
    }

    /**
     * @param PropertyListRequest $PropertyListRequest
     * @return PropertyListResponse
     * @throws Exception
     */
    final public function getPropertyList(PropertyListRequest $PropertyListRequest): PropertyListResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/ListProperties', null, (string)$PropertyListRequest);
    }
}
