<?php

use CasafariSDK\Core\HttpClient;
use CasafariSDK\DTOs\Property;
use CasafariSDK\Enums\PropertyStatusEnum;
use CasafariSDK\PropertyApi;
use CasafariSDK\Requests\PropertyListRequest;
use CasafariSDK\Requests\PropertyLocationRequest;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyListResponse;
use CasafariSDK\Responses\PropertyLocationResponse;
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
     * Tests successful retrieval of a property list via the API.
     *
     * This test simulates a successful response with a list of properties and ensures
     * that the returned object is an instance of PropertyListResponse.
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws Exception
     */
    public function testGetPropertyListSuccessfully(): void
    {
        $MockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            200,
            [],
            '{
  "PropertyList": [
    {
      "id": 0,
      "businessType": "Sale",
      "businessTypeLocale": "string",
      "type": "Apartment",
      "typeLocale": "string",
      "condition_type": "New",
      "conditionTypeLocale": "string",
      "features_list": [
        "AirConditioning"
      ],
      "currency": "EUR",
      "status": "Active",
      "energy_rating": "APlus",
      "locale": [
        {
          "language": "es",
          "labels": [
            {
              "id": 0,
              "text": "string",
              "backgroundColor": "string",
              "foregroundColor": "string"
            }
          ],
          "title": "string",
          "description": "string",
          "short": "string",
          "seokeywords": "string",
          "seodescription": "string"
        }
      ],
      "location": {
        "Country": "string",
        "Region": "string",
        "City": "string",
        "Locality": "string",
        "Description": [
          {
            "Title": "string",
            "Text": "string",
            "Language": "string"
          }
        ],
        "InnerLocation": {
          "RegionId": 0,
          "CityId": 0,
          "LocalityId": 0,
          "Zonename": "string"
        },
        "coordinates": {
          "latitude": "string",
          "longitude": "string",
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
      "listing_agent": [
        {
          "id": 0,
          "Name": "string",
          "Email": "string",
          "Phone": "string",
          "Cellphone": "string",
          "Photo": "string",
          "Locale": [
            {
              "language": "string",
              "title": "string",
              "description": "string",
              "short": "string",
              "seokeywords": "string",
              "seodescription": "string"
            }
          ],
          "Active": true,
          "IsPrimaryAgent": true
        }
      ],
      "OnFocus": true,
      "Opportunity": true,
      "Featured": true,
      "building_id": 0,
      "priceprefixhelper": "string",
      "typology": "string",
      "features_list_enum": [
        "string"
      ],
      "features_list_categorized": [
        {
          "Name": [
            "string"
          ],
          "CategoryInnerText": "string",
          "CategoryId": 0
        }
      ],
      "ami": "string",
      "propertyId": 0,
      "internalId": "string",
      "reference": "string",
      "sold": true,
      "visibleOnWebsite": true,
      "bathrooms": 0,
      "bedrooms": 0,
      "construction_year": 0,
      "price": 0,
      "second_price": 0,
      "price_visible": true,
      "plot_area": 0.1,
      "living_area": 0.1,
      "total_area": 0.1,
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
          "Filename": "string",
          "Category": "string",
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
      "lastChangeDate": "2019-08-24T14:15:22Z",
      "inactiveReason": "string"
    }
  ],
  "Count": 0,
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
        $MockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $MockClient);

        $PropertyListRequest = new PropertyListRequest();
        $PropertyListResponse = $PropertyApi->getPropertyList($PropertyListRequest);

        $this->assertInstanceOf(PropertyListResponse::class, $PropertyListResponse);
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
     * Tests retrieving an empty property list via the API.
     *
     * This test simulates a successful response with no properties and verifies
     * that the returned instance of PropertyListResponse is valid but contains an empty list.
     *
     * @throws ReflectionException
     * @throws Exception
     */
    public function testGetPropertyListWithNoProperties(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            200,
            [],
            '{
  "PropertyList": {},
  "Count": 0,
  "Success": {},
  "Errors": [],
  "Warnings": [],
  "CorrelationId": "string",
  "EchoToken": "string",
  "PrimaryLangId": 0,
  "RetransmissionIndicator": true,
  "TimeStamp": "string",
  "Version": 0.1
}'
        );
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $PropertyListRequest = new PropertyListRequest();
        $PropertyListResponse = $PropertyApi->getPropertyList($PropertyListRequest);

        $this->assertEquals(0, $PropertyListResponse->Count);
    }

    /**
     * Tests the behavior when the API returns an invalid JSON response for `getPropertyList`.
     *
     * This test simulates an invalid JSON response and verifies that an exception is thrown
     * with the appropriate error message.
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws Throwable
     */
    public function testGetPropertyListWithInvalidResponse(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(200, [], 'invalid-json');
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $this->expectExceptionMessage('Error parsing JSON response: Syntax error');

        $PropertyListRequest = new PropertyListRequest();
        $PropertyApi->getPropertyList($PropertyListRequest);
    }

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
     * Tests the successful sending of a property using the Property API.
     *
     * This method simulates the behavior of the API client by using mocked objects and requests.
     * It prepares a sample property request and validates the returned response to ensure proper processing.
     *
     * @return void
     * @throws \Exception|Exception
     */
    public function testSendPropertySuccessfully(): void
    {
        $MockClient = $this->createMock(Client::class);
        $MockResponse = new Response(
            500,
            [],
            '{
  "Properties": [
    {
      "propertyId": 0,
      "internalId": "string",
      "reference": "string",
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
      "plot_area": 0,
      "living_area": 0,
      "total_area": 0,
      "locale": [
        {
          "title": "string",
          "description": "string",
          "short": "string",
          "seokeywords": "string",
          "seodescription": "string",
          "language": "pt"
        }
      ],
      "energy_rating": "APlus",
      "features_list": [
        "AirConditioning"
      ],
      "location": {
        "coordinates": {
          "latitude": "string",
          "longitude": "string",
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
          "Filename": "string",
          "Category": "string",
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
  "Version": 0
}');
        $MockClient->method('request')->willReturn($MockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'CASAFARI_TOKEN');
        $this->injectClient($PropertyApi, $MockClient);

        $PropertyRequest = new PropertyRequest(json_decode('{
  "Properties": [
    {
      "propertyId": 0,
      "internalId": "string",
      "reference": "string",
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
      "plot_area": 0,
      "living_area": 0,
      "total_area": 0,
      "locale": [
        {
          "title": "string",
          "description": "string",
          "short": "string",
          "seokeywords": "string",
          "seodescription": "string",
          "language": "pt"
        }
      ],
      "energy_rating": "APlus",
      "features_list": [
        "AirConditioning"
      ],
      "location": {
        "coordinates": {
          "latitude": "string",
          "longitude": "string",
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
          "Filename": "string",
          "Category": "string",
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
  "CorrelationId": "string",
  "EchoToken": "string",
  "PrimaryLangId": 0,
  "RetransmissionIndicator": true,
  "TimeStamp": "string",
  "Version": 0
}'));
        $PropertyResponse = $PropertyApi->sendProperty($PropertyRequest);
        $this->assertInstanceOf(PropertyResponse::class, $PropertyResponse);
    }

    /**
     * Tests the successful deletion of a property via the Property API.
     *
     * This method verifies that when a request to delete a property is successful,
     * the response is of type PropertyResponse.
     *
     * @return void
     * @throws Exception
     * @throws ReflectionException
     */
    public function testDeletePropertySuccessfully(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            200,
            [],
            '{
  "Properties": [
    {
      "propertyId": 0,
      "internalId": "string",
      "reference": "string",
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
          "title": "string",
          "description": "string",
          "short": "string",
          "seokeywords": "string",
          "seodescription": "string",
          "language": "pt"
        }
      ],
      "energy_rating": "APlus",
      "features_list": [
        "AirConditioning"
      ],
      "location": {
        "coordinates": {
          "latitude": "string",
          "longitude": "string",
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
          "Filename": "string",
          "Category": "string",
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
      "lastChangeDate": "2019-08-24T14:15:22Z",
      "inactiveReason": "string"
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
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $propertyRequest = new PropertyRequest();
        $propertyRequest->TimeStamp = date(DATE_RFC3339_EXTENDED);
        $propertyRequest->Version = 0.1;
        $propertyRequest->CorrelationId = uniqid();
        $propertyRequest->Properties = new PropertiesArray();

        $propertyResponse = $PropertyApi->deleteProperty($propertyRequest);

        $this->assertInstanceOf(PropertyResponse::class, $propertyResponse);
    }

    /**
     * Tests deleting a property when the API responds with an error.
     *
     * This method validates behavior when the delete property operation fails, ensuring
     * an exception is thrown with the relevant error message.
     *
     * @throws Throwable
     * @throws Exception
     */
    public function testDeletePropertyWithError(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            500,
            [],
            '{
      "Errors": [
        {
          "Code": 500,
          "ShortText": "Delete error"
        }
      ]
    }');
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $propertyRequest = new PropertyRequest();
        $propertyRequest->TimeStamp = date(DATE_RFC3339_EXTENDED);
        $propertyRequest->Version = 0.1;
        $propertyRequest->CorrelationId = uniqid();
        $propertyRequest->Properties = new PropertiesArray();

        $this->expectExceptionMessage('Delete error');

        $PropertyApi->deleteProperty($propertyRequest);
    }

    /**
     * Tests the behavior of the deleteProperty method when the API
     * responds with an invalid JSON response.
     *
     * This method verifies that an exception is raised for an invalid response format.
     *
     * @return void
     * @throws Throwable
     * @throws Exception
     */
    public function testDeletePropertyWithInvalidResponse(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(200, [], 'invalid-json');
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $this->expectExceptionMessage('Error parsing JSON response: Syntax error');

        $propertyRequest = new PropertyRequest();
        $PropertyApi->deleteProperty($propertyRequest);
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

    /**
     * Tests successful retrieval of locations via the `getLocations` method.
     *
     * This test simulates a successful response with a list of location hierarchy elements
     * and ensures that the returned object is an instance of PropertyLocationResponse.
     *
     * @throws Exception
     * @throws ReflectionException
     */
    public function testGetLocationsSuccessfully(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            200,
            [],
            '{
  "Locations": [
    {
      "id": 0,
      "parent_id": 0,
      "name": "string",
      "level": 0
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
  "Version": 0
}'
        );
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $PropertyLocationRequest = new PropertyLocationRequest(json_decode('{
  "CountryCode": "pt",
  "ParentId": 0,
  "ActiveType": 0,
  "Level": 0,
  "CorrelationId": "string",
  "EchoToken": "string",
  "PrimaryLangId": 0,
  "RetransmissionIndicator": true,
  "TimeStamp": "string",
  "Version": 0
}'));

        $PropertyLocationResponse = $PropertyApi->getLocations($PropertyLocationRequest);

        $this->assertInstanceOf(PropertyLocationResponse::class, $PropertyLocationResponse);
    }

    /**
     * Tests retrieving an empty list of locations via the API.
     *
     * This test simulates a successful API response with no locations and verifies that
     * the returned instance of PropertyLocationResponse is valid but contains an empty list.
     *
     * @throws Exception
     * @throws ReflectionException
     */
    public function testGetLocationsWithEmptyResponse(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            200,
            [],
            '{
                "Locations": [],
                "Success": {},
                "Errors": [],
                "Warnings": [],
                "CorrelationId": "string",
                "EchoToken": "string",
                "PrimaryLangId": 1,
                "RetransmissionIndicator": true,
                "TimeStamp": "string",
                "Version": 0.1
            }'
        );
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $PropertyLocationRequest = new PropertyLocationRequest();
        $PropertyLocationRequest->CorrelationId = 'string';
        $PropertyLocationRequest->EchoToken = 'string';
        $PropertyLocationRequest->PrimaryLangId = 1;
        $PropertyLocationRequest->RetransmissionIndicator = true;
        $PropertyLocationRequest->TimeStamp = 'string';
        $PropertyLocationRequest->Version = 0.1;

        $PropertyLocationResponse = $PropertyApi->getLocations($PropertyLocationRequest);

        $this->assertEmpty($PropertyLocationResponse->Locations);
    }

    /**
     * Tests the behavior when the API returns an invalid JSON response for `getLocations`.
     *
     * This test simulates an invalid JSON response and verifies that an exception is thrown
     * with the appropriate error message.
     *
     * @throws Exception
     * @throws ReflectionException
     */
    public function testGetLocationsWithInvalidResponse(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(200, [], 'invalid-json');
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $this->expectExceptionMessage('Error parsing JSON response: Syntax error');

        $PropertyLocationRequest = new PropertyLocationRequest();
        $PropertyLocationRequest->CorrelationId = 'string';
        $PropertyLocationRequest->EchoToken = 'string';
        $PropertyLocationRequest->PrimaryLangId = 1;
        $PropertyLocationRequest->RetransmissionIndicator = true;
        $PropertyLocationRequest->TimeStamp = 'string';
        $PropertyLocationRequest->Version = 0.1;

        $PropertyApi->getLocations($PropertyLocationRequest);
    }

    /**
     * Tests the behavior when the API returns an error for `getLocations`.
     *
     * This test simulates an API error response and verifies that an exception is thrown
     * with the appropriate error message.
     *
     * @throws Exception
     * @throws ReflectionException
     */
    public function testGetLocationsWithError(): void
    {
        $mockClient = $this->createMock(Client::class);
        $mockResponse = new Response(
            500,
            [],
            '{
                "Errors": [
                    {
                        "Code": 500,
                        "ShortText": "Location retrieval error"
                    }
                ],
                "Warnings": [],
                "CorrelationId": "string",
                "EchoToken": "string",
                "PrimaryLangId": 1,
                "RetransmissionIndicator": true,
                "TimeStamp": "string",
                "Version": 0.1
            }'
        );
        $mockClient->method('request')->willReturn($mockResponse);

        $PropertyApi = new PropertyApi(HttpClient::DEVELOPMENT_SERVER_URL, 'FAKE_TOKEN');
        $this->injectClient($PropertyApi, $mockClient);

        $PropertyLocationRequest = new PropertyLocationRequest();
        $PropertyLocationRequest->CorrelationId = 'string';
        $PropertyLocationRequest->EchoToken = 'string';
        $PropertyLocationRequest->PrimaryLangId = 1;
        $PropertyLocationRequest->RetransmissionIndicator = true;
        $PropertyLocationRequest->TimeStamp = 'string';
        $PropertyLocationRequest->Version = 0.1;

        $this->expectExceptionMessage('Location retrieval error');

        $PropertyApi->getLocations($PropertyLocationRequest);
    }
}
