<?php
declare(strict_types=1);

namespace CasafariSDK\Tests;

use CasafariSDK\Api\Agency\GetAgencies;
use CasafariSDK\Client;
use CasafariSDK\Configuration;
use CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyListExternalRq;
use CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationList;
use CasafariSDK\Middlewares\EchoMiddleware;
use CasafariSDK\Middlewares\LogMiddleware;
use Dmorenof\SdkRuntime\ApiException;
use Dmorenof\SdkRuntime\InvalidResponseException;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class BehaviorTest extends TestCase
{
    /** @param list<Response> $answers @param list<array<string, mixed>> $history */
    private static function configuration(array $answers, array &$history): Configuration
    {
        $stack = HandlerStack::create(new MockHandler($answers));
        $stack->push(Middleware::history($history));
        $configuration = new Configuration();
        $configuration->headers = ['Authorization' => 'Basic TEST_TOKEN'];
        $configuration->httpClient = new Guzzle(['handler' => $stack]);
        return $configuration;
    }

    public function testTheProductionServerIsTheDefault(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([new Response(200, [], '{"Success":{}}')], $history));
        $client->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post(new AgencyListExternalRq());
        self::assertSame('https://crmapi.casafaricrm.com/api/Agency/GetAgencies', (string) $history[0]['request']->getUri());
    }

    public function testTheStaticFacadeUsesTheConfiguredClient(): void
    {
        $history = [];
        GetAgencies::configure(self::configuration([new Response(200, [], '{"Success":{}}')], $history));
        GetAgencies::post(new AgencyListExternalRq());
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testAnHttpErrorIsAnApiExceptionWithTheRawResponse(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([new Response(401, [], '{"message":"Unauthorized"}')], $history));
        try {
            $client->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post(new AgencyListExternalRq());
            self::fail('A 401 must throw.');
        } catch (ApiException $error) {
            self::assertSame(401, $error->getCode());
            self::assertStringContainsString('Unauthorized', $error->response->body);
        }
    }

    public function testAnAnswerThatBreaksTheContractIsAnInvalidResponse(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([new Response(200, [], '{"Agencies":"not a list"}')], $history));
        $this->expectException(InvalidResponseException::class);
        $client->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post(new AgencyListExternalRq());
    }

    public function testAnUnknownFieldInAnAnswerIsIgnored(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([new Response(200, [], '{"Success":{},"NewFieldFromTheServer":1}')], $history));
        $response = $client->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post(new AgencyListExternalRq());
        self::assertIsObject($response->Success);
    }

    public function testAValueOutsideAnEnumIsRefusedBeforeAnythingIsSent(): void
    {
        $history = [];
        $location = new LocationList();
        try {
            $location->CountryCode = 'zz'; // @phpstan-ignore-line deliberately wrong
            self::fail('An unknown country code must be refused.');
        } catch (\TypeError) {
            self::assertSame([], $history);
        }
    }

    public function testMiddlewaresSeeRequestsAndResponses(): void
    {
        $history = [];
        $configuration = self::configuration([new Response(200, [], '{"Success":{}}')], $history);
        $configuration->middleware = [new EchoMiddleware()];
        ob_start();
        Client::connect($configuration)->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post(new AgencyListExternalRq());
        $output = (string) ob_get_clean();
        self::assertStringContainsString('>>> Request: POST https://crmapi.casafaricrm.com/api/Agency/GetAgencies', $output);
        self::assertStringContainsString('<<< Response: 200', $output);
        self::assertStringContainsString('{"Success":{}}', $output);
    }

    public function testLogMiddlewareWritesToTheErrorLog(): void
    {
        $file = tempnam(sys_get_temp_dir(), 'casafari-log');
        $previous = ini_set('error_log', $file);
        try {
            $history = [];
            $configuration = self::configuration([new Response(200, [], '{"Success":{}}')], $history);
            $configuration->middleware = [new LogMiddleware()];
            Client::connect($configuration)->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post(new AgencyListExternalRq());
        } finally {
            ini_set('error_log', $previous === false ? '' : $previous);
        }
        $log = (string) file_get_contents($file);
        unlink($file);
        self::assertStringContainsString('>>> Request: POST', $log);
        self::assertStringContainsString('<<< Response: 200', $log);
    }

    public function testTheSourceIsExactlyWhatTheContractGenerates(): void
    {
        exec(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(__DIR__ . '/../bin/regenerate.php') . ' --check 2>&1', $output, $status);
        self::assertSame(0, $status, implode("\n", $output));
    }
}
