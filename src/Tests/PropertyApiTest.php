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

/**
 * Class PropertyApiTest
 *
 * Test suite for the PropertyApi class, ensuring the accuracy and reliability
 * of property data handling, API requests, and error handling.
 */
class PropertyApiTest extends TestCase
{
    /**
     * Tests the behavior of the `sendProperty` method when the API responds with an error.
     *
     * This test simulates an unsuccessful response (HTTP 500) with an error message from the API
     * and ensures that the appropriate exception is thrown with the expected error message.
     *
     * @throws Throwable If an unexpected or uncaught exception occurs during the execution of the test.
     * @throws Exception If the expected exception is not thrown or does not match the expected criteria.
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
     * Replaces the current HTTP client within the provided PropertyApi instance with a mock client for testing purposes.
     *
     * @param PropertyApi $PropertyApi The instance of PropertyApi whose HTTP client needs to be overridden.
     * @param Client $mockClient The mock client to inject into the PropertyApi instance.
     *
     * @return void
     *
     * @throws ReflectionException If the property being accessed or modified does not exist or is inaccessible.
     */
    private function injectClient(PropertyApi $PropertyApi, Client $mockClient): void
    {
        $Reflection = new ReflectionClass($PropertyApi->HttpClient);
        $Property = $Reflection->getProperty('Client');
        $Property->setValue($PropertyApi->HttpClient, $mockClient);
    }

    /**
     * Tests the successful sending of a property via the Property API.
     *
     * This method creates a mocked HTTP client and response to simulate the behavior of the API
     * during a property send operation. It injects the mocked client into the PropertyApi instance,
     * prepares a property request with the necessary data, and verifies that the response from
     * the API is an instance of PropertyResponse.
     *
     * @return void
     * @throws Exception
     * @throws ReflectionException
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
     * Tests sending a property when the API returns an invalid JSON response.
     *
     * This method sets up a mocked HTTP client and response to simulate an invalid JSON response
     * from the Property API. The mocked response is injected into the PropertyApi instance.
     * It then prepares a property request and verifies that the invalid JSON response
     * produces the expected exception with the appropriate error message.
     *
     * @return void
     * @throws Exception
     * @throws ReflectionException
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
