<?php

namespace CasafariSDK\Core;

use Alexanderpas\Common\HTTP\Method;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface for HTTP middleware that can intercept and handle
 * logic before and after an HTTP request is processed.
 */
interface HttpMiddlewareInterface
{
    public function beforeRequest(string &$response_class, Method &$method, string &$endpoint, ?array &$query, ?string &$json): bool;

    public function afterRequest(string &$response_class, Method &$method, string &$endpoint, ?array &$query, ?string &$json, ResponseInterface &$request, ?string &$body): bool;
}