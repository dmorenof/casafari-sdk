<?php

namespace CasafariSDK\Core;

use InvalidArgumentException;

class CasafariCrmApi
{
    public HttpClient $HttpClient;

    public final function __construct(string $server, string $accessToken)
    {
        $this->setupHttpClient($server, $accessToken);
    }

    /**
     * @param string $server
     * @param string $accessToken
     * @return void
     */
    public function setupHttpClient(string $server, string $accessToken): void
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
     * @param HttpMiddlewareInterface $middleware
     * @return CasafariCrmApi
     */
    public final function withMiddleware(HttpMiddlewareInterface $middleware): CasafariCrmApi
    {
        $this->HttpClient->addMiddleware($middleware);

        return $this;
    }
}