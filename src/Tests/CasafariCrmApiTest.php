<?php

namespace CasafariSDK\Tests;

use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Core\HttpClient;
use CasafariSDK\Core\HttpMiddlewareInterface;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use stdClass;
use TypeError;

class CasafariCrmApiTest extends TestCase
{
    public function testBuildCasafariWithInvalidServerUrl(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new CasafariCrmApi('https://invalid.url', 'CASAFARI_TOKEN');
    }

    public function testBuildCasafariWithEmptyAccessToken(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new CasafariCrmApi(HttpClient::DEVELOPMENT_SERVER_URL, '');
    }

    /**
     * @throws ReflectionException
     */
    public function testAddMiddleware(): void
    {
        $CasafariCrmApi = new CasafariCrmApi(HttpClient::DEVELOPMENT_SERVER_URL, 'VALID_ACCESS_TOKEN');

        /* @var $MockMiddleware HttpMiddlewareInterface */
        $MockMiddleware = $this->getMockBuilder(HttpMiddlewareInterface::class)->getMock();
        $CasafariCrmApi->withMiddleware($MockMiddleware);

        $actualMiddlewareAdded = $this->getMiddlewaresFromCasafari($CasafariCrmApi);
        $this->assertContains($MockMiddleware, $actualMiddlewareAdded, 'Middleware should be added successfully.');
    }

    /**
     * @throws ReflectionException
     */
    private function getMiddlewaresFromCasafari(CasafariCrmApi $CasafariCrmApi): array
    {
        $ReflectionClient = new ReflectionClass($CasafariCrmApi->HttpClient);
        $middlewares = $ReflectionClient->getProperty('Middlewares');
        return $middlewares->getValue($CasafariCrmApi->HttpClient);
    }

    /**
     * @throws TypeError
     */
    public function testErrorAddingMiddleware(): void
    {
        $CasafariCrmApi = new CasafariCrmApi(HttpClient::DEVELOPMENT_SERVER_URL, 'VALID_ACCESS_TOKEN');
        /* @var HttpMiddlewareInterface $MockMiddleware */
        $MockMiddleware = new stdClass();
        $this->expectException(TypeError::class);
        $CasafariCrmApi->withMiddleware($MockMiddleware);
    }
}