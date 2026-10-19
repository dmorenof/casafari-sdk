<?php

use CasafariSDK\AgencyApi;
use CasafariSDK\CasafariGoApi;
use CasafariSDK\CodeTableApi;
use CasafariSDK\EntityApi;
use CasafariSDK\LeadApi;
use CasafariSDK\PropertyApi;
use CasafariSDK\DTOs\LeadEntity;
use CasafariSDK\DTOs\ListLeadsOpportunity;
use CasafariSDK\Requests\AgencyListRequest;
use CasafariSDK\Requests\CasafariGoEntityRequest;
use CasafariSDK\Requests\CasafariGoUrlRequest;
use CasafariSDK\Requests\CodeTableRequest;
use CasafariSDK\Requests\AgentListRequest;
use CasafariSDK\Requests\LeadInsertRequest;
use CasafariSDK\Requests\LeadListRequest;
use CasafariSDK\Requests\PropertyHitRequest;
use CasafariSDK\Requests\PropertyListRequest;
use CasafariSDK\Requests\PropertyLocationRequest;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\AgencyListResponse;
use CasafariSDK\Responses\CasafariGoEntityResponse;
use CasafariSDK\Responses\CasafariGoUrlResponse;
use CasafariSDK\Responses\CodeTableResponse;
use CasafariSDK\Responses\AgentListResponse;
use CasafariSDK\Responses\LeadInsertResponse;
use CasafariSDK\Responses\LeadListResponse;
use CasafariSDK\Responses\GenericResponse;
use CasafariSDK\Responses\PropertyHitResponse;
use CasafariSDK\Responses\PropertyInnerLocationResponse;
use CasafariSDK\Responses\PropertyListResponse;
use CasafariSDK\Responses\PropertyLocationResponse;
use CasafariSDK\Responses\PropertyResponse;
use PHPUnit\Framework\TestCase;

final class SwaggerContractTest extends TestCase
{
    public function testAllSwaggerOperationsHaveTypedSdkEntryPoints(): void
    {
        $swagger = json_decode(
            file_get_contents(__DIR__ . '/../src/Core/v1.json'),
            true,
            512,
            JSON_THROW_ON_ERROR
        );

        // CRM Swagger v1 defines 14 operations, including one POST without a request body.
        $routes = [
            '/api/Agency/GetAgencies' => [AgencyApi::class, 'getAgencies', AgencyListRequest::class, AgencyListResponse::class],
            '/api/CasafariGo/GetUrl' => [CasafariGoApi::class, 'getUrl', CasafariGoUrlRequest::class, CasafariGoUrlResponse::class],
            '/api/CasafariGo/CreateUser' => [CasafariGoApi::class, 'createUser', CasafariGoEntityRequest::class, CasafariGoEntityResponse::class],
            '/api/CasafariGo/DeleteUser' => [CasafariGoApi::class, 'deleteUser', CasafariGoEntityRequest::class, GenericResponse::class],
            '/api/CodeTable' => [CodeTableApi::class, 'getCodeTable', CodeTableRequest::class, CodeTableResponse::class],
            '/api/Entity/GetAgents' => [EntityApi::class, 'getAgents', AgentListRequest::class, AgentListResponse::class],
            '/api/Leads/Insert' => [LeadApi::class, 'insertLead', LeadInsertRequest::class, LeadInsertResponse::class],
            '/api/Leads/List' => [LeadApi::class, 'listLeads', LeadListRequest::class, LeadListResponse::class],
            '/api/Property/SendProperty' => [PropertyApi::class, 'sendProperty', PropertyRequest::class, PropertyResponse::class],
            '/api/Property/DeleteProperty' => [PropertyApi::class, 'deleteProperty', PropertyRequest::class, PropertyResponse::class],
            '/api/Property/ListProperties' => [PropertyApi::class, 'getPropertyList', PropertyListRequest::class, PropertyListResponse::class],
            '/api/Property/Location' => [PropertyApi::class, 'getLocations', PropertyLocationRequest::class, PropertyLocationResponse::class],
            '/api/Property/InnerLocations' => [PropertyApi::class, 'getInnerLocations', null, PropertyInnerLocationResponse::class],
            '/api/Property/Hit' => [PropertyApi::class, 'recordHit', PropertyHitRequest::class, PropertyHitResponse::class],
        ];
        $this->assertCount(count($swagger['paths']), $routes);

        foreach ($routes as $path => [$apiClass, $method, $requestClass, $responseClass]) {
            $this->assertArrayHasKey($path, $swagger['paths']);
            $operation = current($swagger['paths'][$path]);
            $reflection = new ReflectionMethod($apiClass, $method);
            $this->assertSame($responseClass, $reflection->getReturnType()->getName());
            if ($requestClass !== null) {
                $this->assertSame($requestClass, $reflection->getParameters()[0]->getType()->getName());
            } else {
                $this->assertCount(0, $reflection->getParameters());
            }

            $responseRef = $operation['responses']['200']['schema']['$ref'];
            $responseDefinition = basename(str_replace('.', '/', substr($responseRef, strlen('#/definitions/'))));
            $this->assertNotEmpty($responseDefinition);
            $responseSchema = $swagger['definitions'][substr($responseRef, strlen('#/definitions/'))];
            foreach (array_keys($responseSchema['properties'] ?? []) as $property) {
                $this->assertTrue(property_exists($responseClass, $property), $path . ': ' . $property);
            }
        }
    }

    public function testNestedLeadRequestHydratesEnumerationsAndLists(): void
    {
        $request = new LeadInsertRequest(json_decode(
            '{"Contact":{"Name":"Example","Type":"Buyer","Culture":"es","Profile":{"Regions":["Madrid"]}}}'
        ));
        $this->assertInstanceOf(LeadEntity::class, $request->Contact);
        $json = json_decode((string)$request, true, 512, JSON_THROW_ON_ERROR);
        $this->assertSame('Buyer', $json['Contact']['Type']);
        $this->assertSame('es', $json['Contact']['Culture']);
        $this->assertSame(['Madrid'], $json['Contact']['Profile']['Regions']);
    }

    public function testNestedLeadResponseHydratesTypedArrays(): void
    {
        $response = new LeadListResponse(json_decode(
            '{"Success":{},"Opportunities":[{"Id":"op-1","Properties":[{"PropertyID":"p-1"}]}]}'
        ));
        $this->assertCount(1, $response->Opportunities);
        $this->assertInstanceOf(ListLeadsOpportunity::class, $response->Opportunities[0]);
        $this->assertSame('p-1', $response->Opportunities[0]->Properties[0]->PropertyID);
    }
}
