<?php

namespace CasafariSDK\Core;

use Alexanderpas\Common\HTTP\Method;
use Exception;
use GuzzleHttp\Client;
use InvalidArgumentException;
use Throwable;

/**
 * The HttpClient class is responsible for making HTTP requests.
 * It supports adding middleware to manage actions before and after requests.
 * Each request can handle JSON payloads and query parameters.
 */
final class HttpClient
{
    const string PRODUCTION_SERVER_URL = 'https://crmapi.casafaricrm.com/api/';
    const string DEVELOPMENT_SERVER_URL = 'https://crmapi.proppydev.com/api/';
    private Client $Client;
    private array $Middlewares = [];

    final public function __construct(string $server, string $accessToken)
    {
        if (!in_array($server, [self::PRODUCTION_SERVER_URL, self::DEVELOPMENT_SERVER_URL])) {
            throw new InvalidArgumentException('Invalid server URL');
        }

        if (empty($accessToken)) {
            throw new InvalidArgumentException('Invalid access token');
        }

        $this->Client = new Client([
            'base_uri' => $server,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $accessToken,
            ],
            'http_errors' => false,
        ]);
    }

    final public function addMiddleware(HttpMiddlewareInterface $HttpMiddleware): void
    {
        $this->Middlewares[] = $HttpMiddleware;
    }

    /**
     * @template RESPONSE
     * @param class-string<RESPONSE> $response_class
     * @param Method $method
     * @param string $endpoint
     * @param array|null $query
     * @param string|null $json
     * @return RESPONSE
     * @throws Exception
     */
    final public function request(string $response_class, Method $method, string $endpoint, ?array $query = null, ?string $json = null): Response
    {
        try {
            foreach ($this->Middlewares as $Middleware) {
                if (!$Middleware->beforeRequest($response_class, $method, $endpoint, $query, $json)) {
                    throw new Exception('Request aborted by middleware ' . get_class($Middleware));
                }
            }

            $options = [];

            if ($query) {
                $options = ['query' => $query];
            }

            if ($json) {
                $options = ['json' => $json];
            }

            $request = $this->Client->request($method->value, $endpoint, $options);
            $body = $request->getBody()->getContents();

            foreach ($this->Middlewares as $Middleware) {
                if (!$Middleware->afterRequest($response_class, $method, $endpoint, $query, $json, $request, $body)) {
                    throw new Exception('Response aborted by middleware ' . get_class($Middleware));
                }
            }
        } catch (Throwable $Exception) {
            throw new Exception($Exception->getMessage());
        }

        return $this->digestResponse($body, $response_class);
    }

    /**
     * @param string $body
     * @param string $response_class
     * @return Response
     * @throws Exception
     */
    private function digestResponse(string $body, string $response_class): Response
    {
        $json = json_decode($body);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Error parsing JSON response: ' . json_last_error_msg());
        }

        /* @var Response $Response */
        $Response = new $response_class($json);

        if (!isset($Response->Success) || !is_object($Response->Success)) {
            throw new Exception(implode(PHP_EOL, array_column((array)$Response->Errors, 'ShortText')));
        }

        return $Response;
    }
}