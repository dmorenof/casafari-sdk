<?php

namespace CasafariSDK\Middlewares;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\HttpMiddlewareInterface;
use Psr\Http\Message\ResponseInterface;

class LogMiddleware implements HttpMiddlewareInterface
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
        $message = '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        $message .= 'Request: ' . $method->value . ' ' . $endpoint . ($query ? ('?' . http_build_query($query)) : '') . PHP_EOL;
        if ($json) $message .= 'JSON: ' . PHP_EOL . $json . PHP_EOL;
        $message .= '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>' . PHP_EOL;
        error_log($message);

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
        $message = '<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<' . PHP_EOL;
        $message .= 'Response: ' . $response_class . PHP_EOL;
        if ($body) $message .= 'BODY: ' . PHP_EOL . $body . PHP_EOL;
        $message .= '<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<' . PHP_EOL;
        error_log($message);

        return true;
    }
}