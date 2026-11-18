<?php
declare(strict_types=1);

namespace CasafariSDK\Middlewares;

/** Prints each request and response to the standard output, for scripts and debugging. */
class EchoMiddleware extends LogMiddleware
{
    protected function write(string $message): void
    {
        echo $message . PHP_EOL;
    }
}
