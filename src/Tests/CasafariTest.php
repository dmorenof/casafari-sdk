<?php

namespace CasafariSDK\Tests;

use CasafariSDK\Casafari;
use CasafariSDK\Core\HttpClient;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CasafariTest extends TestCase
{
    public function testBuildCasafariWithInvalidServerUrl(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Casafari('https://invalid.url', 'CASAFARI_TOKEN');
    }

    public function testBuildCasafariWithEmptyAccessToken(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Casafari(HttpClient::DEVELOPMENT_SERVER_URL, '');
    }
}