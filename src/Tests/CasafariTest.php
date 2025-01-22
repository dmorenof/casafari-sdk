<?php

namespace CasafariSDK\Tests;

use CasafariSDK\Casafari;
use CasafariSDK\Core\HttpClient;
use CasafariSDK\Core\HttpMiddleware;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use stdClass;
use TypeError;

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

    public function testAddMiddleware(): void
    {
        $casafari = new Casafari(HttpClient::DEVELOPMENT_SERVER_URL, 'VALID_ACCESS_TOKEN');

        $mockMiddleware = $this->getMockBuilder(HttpMiddleware::class)->getMock();
        $casafari->withMiddleware($mockMiddleware);

        $actualMiddlewareAdded = $this->getMiddlewaresFromCasafari($casafari);
        $this->assertContains($mockMiddleware, $actualMiddlewareAdded, 'Middleware should be added successfully.');
    }

    private function getMiddlewaresFromCasafari(Casafari $Casafari): array
    {
        $reflectionClient = new ReflectionClass($Casafari->HttpClient);
        $middlewaresProperty = $reflectionClient->getProperty('Middlewares');
        return $middlewaresProperty->getValue($Casafari->HttpClient);
    }

    public function testErrorAddingMiddleware(): void
    {
        $Casafari = new Casafari(HttpClient::DEVELOPMENT_SERVER_URL, 'VALID_ACCESS_TOKEN');
        $MockMiddleware = new stdClass();
        $this->expectException(TypeError::class);
        $Casafari->withMiddleware($MockMiddleware);
    }
}