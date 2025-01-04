<?php

namespace CasafariSDK\Tests;

use CasafariSDK\Casafari;
use CasafariSDK\Core\HttpClient;
use CasafariSDK\Entities\Property;
use CasafariSDK\Enums\PropertyStatusEnum;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyResponse;
use CasafariSDK\TypedArrays\PropertiesArray;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use Throwable;

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

    /**
     * @throws Throwable
     * @throws Exception
     */
    public function testSendPropertyWithInvalidResponse(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(200, [], 'invalid-json');
        $mockClient->method('request')->willReturn($mockResponse);

        $Casafari = new Casafari(HttpClient::DEVELOPMENT_SERVER_URL, 'CASAFARI_TOKEN');
        $this->injectClient($Casafari, $mockClient);

        $this->expectExceptionMessage('Error parsing JSON response: Syntax error');

        $propertyRequest = new PropertyRequest();
        $Casafari->sendProperty($propertyRequest);
    }

    /**
     * @throws ReflectionException
     */
    private function injectClient(Casafari $Casafari, Client $mockClient): void
    {
        $reflection = new ReflectionClass($Casafari->HttpClient);
        $property = $reflection->getProperty('Client');
        $property->setValue($Casafari->HttpClient, $mockClient);
    }

    /**
     * @throws Throwable
     * @throws Exception
     */
    public function testSendPropertyWithError(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            500,
            [],
            '{
  "Errors": [
    {
      "Code": 500,
      "ShortText": "This is an error"
    }
  ]
}'
        );
        $mockClient->method('request')->willReturn($mockResponse);

        $Casafari = new Casafari(HttpClient::DEVELOPMENT_SERVER_URL, 'CASAFARI_TOKEN');
        $this->injectClient($Casafari, $mockClient);

        $PropertyRequest = new PropertyRequest();
        $PropertyRequest->TimeStamp = date(DATE_RFC3339_EXTENDED);
        $PropertyRequest->Version = 0.1;
        $PropertyRequest->CorrelationId = uniqid();
        $PropertyRequest->Properties = new PropertiesArray();

        $Property = new Property();
        $Property->internalId = 'test';
        $Property->reference = 'test';
        $Property->status = PropertyStatusEnum::Inactive;

        $PropertyRequest->Properties[] = $Property;

        $this->expectExceptionMessage('This is an error');

        $Casafari->sendProperty($PropertyRequest);
    }

    /**
     * @throws Throwable
     * @throws Exception
     */
    public function testSendPropertySuccessfully(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            200,
            [],
            '{
  "Properties": [
    {
      "propertyId": 0,
      "internalId": "ID000001",
      "reference": "R-000001",
      "status": "Active",
      "sold": true,
      "visibleOnWebsite": true,
      "type": "Apartment",
      "bathrooms": 0,
      "bedrooms": 0,
      "condition_type": "New",
      "construction_year": 0,
      "price": 0,
      "second_price": 0,
      "price_visible": true,
      "currency": "EUR",
      "businessType": "Sale",
      "plot_area": 0.1,
      "living_area": 0.1,
      "total_area": 0.1,
      "locale": [
        {
          "title": "Example Title",
          "description": "Example Description",
          "short": "Short description",
          "seokeywords": "Key1, Key2, Key3",
          "seodescription": "SEO description",
          "language": "en"
        }
      ],
      "energy_rating": "APlus",
      "features_list": [
        "AirConditioning",
        "ClosedFireplace",
        "Heating",
        "SealedLandArea"
      ],
      "location": {
        "coordinates": {
          "latitude": "1.321321",
          "longitude": "2.654654",
          "visible": true
        },
        "countryCode": "pt",
        "locationId": 0,
        "zone": "string",
        "address": "string",
        "zipcode": "string",
        "regionName": "string",
        "cityName": "string",
        "localityName": "string"
      },
      "listing_agent": "string",
      "photos": [
        {
          "Url": "string",
          "Category": "string",
          "Description": "string",
          "SortOrder": 0
        }
      ],
      "photosWithoutWatermark": [
        {
          "Url": "string",
          "Category": "string",
          "Description": "string",
          "SortOrder": 0
        }
      ],
      "files": [
        {
          "Filename": "Test file.pdf",
          "Category": "Category 1",
          "SortOrder": 0
        }
      ],
      "portals": [
        "APlaceInTheSun"
      ],
      "video": "string",
      "widepanorama": "string",
      "floorplan": "string",
      "numberOfFloors": 0,
      "floorNumber": 0,
      "floorNumberString": "string",
      "exclusive": true,
      "cadastralReference": "string",
      "createDate": "2019-08-24T14:15:22Z",
      "lastChangeDate": "2019-08-24T14:15:22Z"
    }
  ],
  "Success": {},
  "Errors": [
    {
      "Code": 0,
      "ShortText": "string"
    }
  ],
  "Warnings": [
    {
      "Code": 0,
      "ShortText": "string"
    }
  ],
  "CorrelationId": "string",
  "EchoToken": "string",
  "PrimaryLangId": 0,
  "RetransmissionIndicator": true,
  "TimeStamp": "string",
  "Version": 0.1
}'
        );
        $mockClient->method('request')->willReturn($mockResponse);

        $Casafari = new Casafari(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($Casafari, $mockClient);

        $PropertyRequest = new PropertyRequest();
        $PropertyRequest->TimeStamp = date(DATE_RFC3339_EXTENDED);
        $PropertyRequest->Version = 0.1;
        $PropertyRequest->CorrelationId = uniqid();
        $PropertyRequest->Properties = new PropertiesArray();

        $Property = new Property();
        $Property->internalId = 'test';
        $Property->reference = 'test';
        $Property->status = PropertyStatusEnum::Inactive;

        $PropertyRequest->Properties[] = $Property;
        $propertyResponse = $Casafari->sendProperty($PropertyRequest);

        $this->assertInstanceOf(PropertyResponse::class, $propertyResponse);
    }
}