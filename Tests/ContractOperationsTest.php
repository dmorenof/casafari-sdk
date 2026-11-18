<?php
declare(strict_types=1);

namespace CasafariSDK\Tests;

use CasafariSDK\Client;
use CasafariSDK\Configuration;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/** Every operation of the CRM contract goes out as the contract says and its answer comes back typed. */
final class ContractOperationsTest extends TestCase
{
    /** @return list<object> */
    private static function operations(): array
    {
        return json_decode((string) file_get_contents(__DIR__ . '/fixtures/operations.json'), false, 512, JSON_THROW_ON_ERROR);
    }

    private static function resourceFor(string $path): string
    {
        $class = 'CasafariSDK\\Resources\\' . str_replace('/', '\\', ucfirst(trim($path, '/')));
        return class_exists($class) ? $class : $class . 'Resource';
    }

    /** @param list<Response> $answers @param list<array<string, mixed>> $history */
    private static function client(array $answers, array &$history): Client
    {
        $stack = HandlerStack::create(new MockHandler($answers));
        $stack->push(Middleware::history($history));
        $configuration = new Configuration();
        $configuration->baseUrl = 'https://crmapi.proppydev.com';
        $configuration->headers = ['Authorization' => 'Basic TEST_TOKEN'];
        $configuration->httpClient = new Guzzle(['handler' => $stack]);
        return Client::connect($configuration);
    }

    public function testTheSdkCoversEveryOperationOfTheContract(): void
    {
        $contract = json_decode((string) file_get_contents(__DIR__ . '/../contract/v1.json'), true, 512, JSON_THROW_ON_ERROR);
        $declared = [];
        foreach ($contract['paths'] as $path => $methods) {
            foreach (array_keys($methods) as $method) {
                $declared[] = strtoupper($method) . ' ' . $path;
            }
        }
        $covered = array_map(static fn (object $operation): string => $operation->method . ' ' . $operation->path, self::operations());
        sort($declared);
        sort($covered);
        self::assertCount(14, $declared);
        self::assertSame($declared, $covered);
    }

    public function testEachOperationSendsItsMethodUrlBodyAndCredentials(): void
    {
        foreach (self::operations() as $operation) {
            $history = [];
            $client = self::client([new Response(200, ['Content-Type' => 'application/json'], json_encode($operation->response, JSON_THROW_ON_ERROR))], $history);
            $resource = $client->resource(self::resourceFor($operation->path));

            if ($operation->method === 'GET') {
                $result = $resource->get();
            } elseif ($operation->bodyDef === null) {
                $result = $resource->post();
            } else {
                $dto = 'CasafariSDK\\DTOs\\' . str_replace('.', '\\', $operation->bodyDef);
                $result = $resource->post(new $dto($operation->body));
            }

            self::assertCount(1, $history, $operation->path);
            $request = $history[0]['request'];
            self::assertSame($operation->method, $request->getMethod(), $operation->path);
            self::assertSame('https://crmapi.proppydev.com' . $operation->path, (string) $request->getUri(), $operation->path);
            self::assertSame('Basic TEST_TOKEN', $request->getHeaderLine('Authorization'), $operation->path);
            self::assertSame('application/json', $request->getHeaderLine('Accept'), $operation->path);
            if ($operation->bodyDef !== null) {
                self::assertEquals($operation->body, json_decode((string) $request->getBody()), $operation->path);
            }
            self::assertNotNull($result, $operation->path);
        }
    }

    public function testTheCodeTableQueryUsesTheContractParameterNames(): void
    {
        $history = [];
        $client = self::client([new Response(200, ['Content-Type' => 'application/json'], '{"Success":{}}')], $history);
        $params = new \CasafariSDK\GetParams\Api\CodeTable();
        $params->rqIncludeBusinessTypes = true;
        $params->rqLang = 724;

        $client->resource(\CasafariSDK\Resources\Api\CodeTable::class)->get($params);

        parse_str($history[0]['request']->getUri()->getQuery(), $query);
        self::assertSame(['rq_includeBusinessTypes' => 'true', 'rq_lang' => '724'], $query);
        self::assertStringContainsString('rq.includeBusinessTypes=true&rq.lang=724', $history[0]['request']->getUri()->getQuery());
    }

    public function testNestedListsAreTypedCollectionsOfTypedModels(): void
    {
        $history = [];
        $client = self::client([new Response(200, ['Content-Type' => 'application/json'],
            '{"Success":{},"Agencies":[{"AgencyID":42,"AgencyName":"Example agency"}]}')], $history);
        $dto = \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyListExternalRq::class;

        $response = $client->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post(new $dto(new \stdClass()));

        self::assertCount(1, $response->Agencies);
        self::assertInstanceOf(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyDto::class, $response->Agencies[0]);
        self::assertSame(42, $response->Agencies[0]->AgencyID);
    }
}
