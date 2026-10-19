<?php

use CasafariSDK\Core\HttpClient;
use CasafariSDK\AgencyApi;
use CasafariSDK\CasafariGoApi;
use CasafariSDK\CodeTableApi;
use CasafariSDK\EntityApi;
use CasafariSDK\LeadApi;
use CasafariSDK\PropertyApi;
use CasafariSDK\DTOs\AgencyDto;
use CasafariSDK\Requests\AgencyListRequest;
use CasafariSDK\Requests\CasafariGoEntityRequest;
use CasafariSDK\Requests\CasafariGoUrlRequest;
use CasafariSDK\Requests\CodeTableRequest;
use CasafariSDK\Requests\AgentListRequest;
use CasafariSDK\Requests\LeadInsertRequest;
use CasafariSDK\Requests\LeadListRequest;
use CasafariSDK\Requests\PropertyHitRequest;
use CasafariSDK\Responses\AgencyListResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response as PsrResponse;
use PHPUnit\Framework\TestCase;

final class ApiCoverageTest extends TestCase
{
    private function withMock(object $api, Client $client): void
    {
        (new ReflectionProperty(HttpClient::class, 'Client'))->setValue($api->HttpClient, $client);
    }

    public function testCrmOperationsMapToTheExpectedHttpEndpoints(): void
    {
        $cases = [
            [AgencyApi::class, 'getAgencies', AgencyListRequest::class, 'Agency/GetAgencies'],
            [CasafariGoApi::class, 'getUrl', CasafariGoUrlRequest::class, 'CasafariGo/GetUrl'],
            [CasafariGoApi::class, 'createUser', CasafariGoEntityRequest::class, 'CasafariGo/CreateUser'],
            [CasafariGoApi::class, 'deleteUser', CasafariGoEntityRequest::class, 'CasafariGo/DeleteUser'],
            [EntityApi::class, 'getAgents', AgentListRequest::class, 'Entity/GetAgents'],
            [LeadApi::class, 'insertLead', LeadInsertRequest::class, 'Leads/Insert'],
            [LeadApi::class, 'listLeads', LeadListRequest::class, 'Leads/List'],
            [PropertyApi::class, 'recordHit', PropertyHitRequest::class, 'Property/Hit']
        ];

        foreach ($cases as [$apiClass, $method, $requestClass, $endpoint]) {
            $client = $this->createMock(Client::class);
            $client->expects($this->once())->method('request')
                ->with('POST', $endpoint, $this->callback(static function (array $options): bool {
                    return isset($options['body'])
                        && json_decode($options['body']) instanceof stdClass
                        && !isset($options['json']);
                }))
                ->willReturn(new PsrResponse(200, [], '{"Success":{}}'));
            $api = new $apiClass(HttpClient::DEVELOPMENT_SERVER_URL, 'TEST_TOKEN');
            $this->withMock($api, $client);
            $response = $api->{$method}(new $requestClass());
            $this->assertInstanceOf(\CasafariSDK\Core\Response::class, $response);
        }
    }

    public function testPropertyInnerLocationsHasNoUndocumentedRequestBody(): void
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('request')
            ->with('POST', 'Property/InnerLocations', [])
            ->willReturn(new PsrResponse(200, [], '{"Success":{}}'));
        $api = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'TEST_TOKEN');
        $this->withMock($api, $client);
        $this->assertInstanceOf(
            \CasafariSDK\Responses\PropertyInnerLocationResponse::class,
            $api->getInnerLocations()
        );
    }

    public function testCodeTableSerializesItsSwaggerQueryParameterNames(): void
    {
        $request = new CodeTableRequest();
        $request->IncludeBusinessTypes = true;
        $request->Lang = 724;
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('request')
            ->with('GET', 'CodeTable', $this->callback(static function (array $options): bool {
                return ($options['query']['rq.includeBusinessTypes'] ?? null) === true
                    && ($options['query']['rq.lang'] ?? null) === 724;
            }))
            ->willReturn(new PsrResponse(200, [], '{"Success":{}}'));
        $api = new CodeTableApi(HttpClient::DEVELOPMENT_SERVER_URL, 'TEST_TOKEN');
        $this->withMock($api, $client);
        $this->assertInstanceOf(\CasafariSDK\Responses\CodeTableResponse::class, $api->getCodeTable($request));
    }

    public function testAgencyResponseHydratesItsNestedTypedArray(): void
    {
        $response = new AgencyListResponse(json_decode(
            '{"Success":{},"Agencies":[{"AgencyID":42,"AgencyName":"Example agency"}]}'
        ));
        $this->assertCount(1, $response->Agencies);
        $this->assertInstanceOf(AgencyDto::class, $response->Agencies[0]);
        $this->assertSame(42, $response->Agencies[0]->AgencyID);
    }
}
