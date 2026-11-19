<?php
declare(strict_types=1);

namespace CasafariSDK\Middlewares;

use Dmorenof\SdkRuntime\Transport\HttpMiddlewareInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/** Writes each request and response to the PHP error log. Do not use it where logs are public: bodies include customer data. */
class LogMiddleware implements HttpMiddlewareInterface
{
    public function beforeRequest(RequestInterface $request): RequestInterface
    {
        $this->write('>>> Request: ' . $request->getMethod() . ' ' . $request->getUri() . self::body((string) $request->getBody()));
        return $request;
    }

    public function afterResponse(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $body = $response->getBody();
        $text = (string) $body;
        if ($body->isSeekable()) {
            $body->rewind();
        }
        $this->write('<<< Response: ' . $response->getStatusCode() . ' ' . $request->getUri() . self::body($text));
        return $response;
    }

    protected function write(string $message): void
    {
        error_log($message);
    }

    private static function body(string $body): string
    {
        return $body === '' ? '' : PHP_EOL . $body;
    }
}
