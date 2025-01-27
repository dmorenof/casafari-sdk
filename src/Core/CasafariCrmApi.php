<?php

namespace CasafariSDK\Core;

use InvalidArgumentException;

/**
 * Base API client for interacting with the Casafari CRM API.
 * Provides methods for setting up the HTTP client and attaching middleware.
 * Production documentation:
 * https://crmapi.casafaricrm.com/doc.html
 * Development documentation:
 * https://crmapi.proppydev.com/doc.html
 */
class CasafariCrmApi
{
    public HttpClient $HttpClient;

    /**
     * Constructor method to initialize the HTTP client with the server and access token.
     *
     * @param string $server The server URL to connect to.
     * @param string $accessToken The access token used for authentication.
     * @return void
     */
    public final function __construct(string $server, string $accessToken)
    {
        $this->setupHttpClient($server, $accessToken);
    }

    /**
     * Configures and initializes the HTTP client with the provided server and access token.
     *
     * @param string $server The server URL to connect to.
     * @param string $accessToken The access token used for authentication.
     * @return void
     * @throws InvalidArgumentException If the server URL or access token is empty.
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
     * Attaches middleware to the HTTP client for processing requests and responses.
     *
     * @param HttpMiddlewareInterface $middleware The middleware instance to be added to the HTTP client.
     * @return CasafariCrmApi Returns the current instance of the CasafariCrmApi with the middleware applied.
     */
    public final function withMiddleware(HttpMiddlewareInterface $middleware): CasafariCrmApi
    {
        $this->HttpClient->addMiddleware($middleware);

        return $this;
    }
}