<?php

namespace CasafariSDK\Middlewares;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\HttpMiddlewareInterface;
use Psr\Http\Message\ResponseInterface;

class EchoMiddleware implements HttpMiddlewareInterface
{
    /**
     * @param string $response_class
     * @param Method $method
     * @param string $endpoint
     * @param array|null $query
     * @param string|null $json
     * @return bool
     */
    public function beforeRequest(string &$response_class, Method &$method, string &$endpoint, ?array &$query, ?string &$json): bool
    {
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        echo 'Request: ' . $method->value . ' ' . $endpoint . ($query ? ('?' . http_build_query($query)) : '') . PHP_EOL;
        if ($json) echo 'JSON: ' . PHP_EOL . $json . PHP_EOL;
        echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;

        return true;
    }

    /**
     * @param string $response_class
     * @param Method $method
     * @param string $endpoint
     * @param array|null $query
     * @param string|null $json
     * @param ResponseInterface $response
     * @param string|null $body
     * @return bool
     */
    public function afterRequest(string &$response_class, Method &$method, string &$endpoint, ?array &$query, ?string &$json, ResponseInterface &$response, ?string &$body): bool
    {
        echo '<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<' . PHP_EOL;
        echo 'Response: ' . $response_class . PHP_EOL;
        if ($body) echo 'BODY: ' . PHP_EOL . $body . PHP_EOL;
        echo '<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<' . PHP_EOL;

        return true;
    }
}