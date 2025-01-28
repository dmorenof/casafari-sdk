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

/**
 * CasafariCrmApiTest is a test class to validate the functionality of the CasafariCrmApi class.
 */
class CasafariCrmApiTest extends TestCase
{
    /**
     * Tests the creation of a CasafariCrmApi instance with an invalid server URL.
     *
     * @return void
     * @throws InvalidArgumentException If the server URL is invalid.
     */
    public function testBuildCasafariWithInvalidServerUrl(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new CasafariCrmApi('https://invalid.url', 'CASAFARI_TOKEN');
    }

    /**
     * Tests the creation of a CasafariCrmApi instance with an empty access token.
     *
     * @return void
     * @throws InvalidArgumentException If the access token is empty.
     */
    public function testBuildCasafariWithEmptyAccessToken(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new CasafariCrmApi(HttpClient::DEVELOPMENT_SERVER_URL, '');
    }

    /**
     * Tests the ability to add middleware to the CasafariCrmApi instance.
     *
     * @return void
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
     * Retrieves the list of middlewares from a given CasafariCrmApi instance.
     *
     * @param CasafariCrmApi $CasafariCrmApi The CasafariCrmApi instance containing the HttpClient and its middlewares.
     * @return array The list of middlewares configured in the HttpClient of the given CasafariCrmApi instance.
     * @throws ReflectionException If the reflection on the HttpClient or its properties fails.
     */
    private function getMiddlewaresFromCasafari(CasafariCrmApi $CasafariCrmApi): array
    {
        $ReflectionClient = new ReflectionClass($CasafariCrmApi->HttpClient);
        $middlewares = $ReflectionClient->getProperty('Middlewares');
        return $middlewares->getValue($CasafariCrmApi->HttpClient);
    }

    /**
     * Tests the behavior of adding invalid middleware to the CasafariCrmApi instance.
     *
     * @return void
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