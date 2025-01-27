<?php

use CasafariSDK\Core\HttpClient;
use CasafariSDK\DTOs\Property;
use CasafariSDK\Enums\PropertyStatusEnum;
use CasafariSDK\PropertyApi;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyResponse;
use CasafariSDK\TypedArrays\PropertiesArray;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;

class PropertyApiTest extends TestCase
{
    /**
     * @throws Throwable
     * @throws Exception
     */
    public function testSendPropertyWithError(): void
    {
        $MockClient = $this->createMock(Client::class);
        $MockResponse = new Response(
            500,
            [],
            '{
  "Errors": [
    {
      "Code": 500,
      "ShortText": "This is an error"
    }
  ]
}');
        $MockClient->method('request')->willReturn($MockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'CASAFARI_TOKEN');
        $this->injectClient($PropertyApi, $MockClient);

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

        $PropertyApi->sendProperty($PropertyRequest);
    }

    /**
     * @throws ReflectionException
     */
    private function injectClient(PropertyApi $PropertyApi, Client $mockClient): void
    {
        $Reflection = new ReflectionClass($PropertyApi->HttpClient);
        $Property = $Reflection->getProperty('Client');
        $Property->setValue($PropertyApi->HttpClient, $mockClient);
    }

    /**
     * @throws Throwable
     * @throws Exception
     */
    public function testSendPropertySuccessfully(): void
    {
        $MockClient = $this->createMock(Client::class);
        $MockResponse = new Response(
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
}');
        $MockClient->method('request')->willReturn($MockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $MockClient);

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
        $PropertyResponse = $PropertyApi->sendProperty($PropertyRequest);

        $this->assertInstanceOf(PropertyResponse::class, $PropertyResponse);
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

        $Casafari = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'CASAFARI_TOKEN');
        $this->injectClient($Casafari, $mockClient);

        $this->expectExceptionMessage('Error parsing JSON response: Syntax error');

        $propertyRequest = new PropertyRequest();
        $Casafari->sendProperty($propertyRequest);
    }
}
