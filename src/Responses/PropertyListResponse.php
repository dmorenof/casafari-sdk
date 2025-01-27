<?php

namespace CasafariSDK\Responses;

use CasafariSDK\Core\Response;

/**
 * Property list response object
 * <code>
 * {
 *  "PropertyList": [
 *      {
 *          "id": 0,
 *          "businessType": "string",
 *          "businessTypeLocale": "string",
 *          "type": "string",
 *          "typeLocale": "string",
 *          "condition_type": "string",
 *          "conditionTypeLocale": "string",
 *          "features_list": [
 *              "string"
 *          ],
 *          "currency": "string",
 *          "status": "string",
 *          "energy_rating": "string",
 *          "locale": [
 *              {
 *                  "language": "string",
 *                  "labels": [
 *                      {
 *                          "id": 0,
 *                          "text": "string",
 *                          "backgroundColor": "string",
 *                          "foregroundColor": "string"
 *                      }
 *                  ],
 *                  "title": "string",
 *                  "description": "string",
 *                  "short": "string",
 *                  "seokeywords": "string",
 *                  "seodescription": "string"
 *              }
 *          ],
 *          "location": {
 *              "Country": "string",
 *              "Region": "string",
 *              "City": "string",
 *              "Locality": "string",
 *              "Description": [
 *                  {
 *                      "Title": "string",
 *                      "Text": "string",
 *                      "Language": "string"
 *                  }
 *              ],
 *              "InnerLocation": {
 *                  "RegionId": 0,
 *                  "CityId": 0,
 *                  "LocalityId": 0,
 *                  "Zonename": "string"
 *              },
 *              "coordinates": {
 *                  "latitude": "string",
 *                  "longitude": "string",
 *                  "visible": true
 *              },
 *              "countryCode": "pt",
 *              "locationId": 0,
 *              "zone": "string",
 *              "address": "string",
 *              "zipcode": "string",
 *              "regionName": "string",
 *              "cityName": "string",
 *              "localityName": "string"
 *          },
 *          "listing_agent": [
 *              {
 *                  "id": 0,
 *                  "Name": "string",
 *                  "Email": "string",
 *                  "Phone": "string",
 *                  "Cellphone": "string",
 *                  "Photo": "string",
 *                  "Locale": [
 *                      {
 *                          "language": "string",
 *                          "title": "string",
 *                          "description": "string",
 *                          "short": "string",
 *                          "seokeywords": "string",
 *                          "seodescription": "string"
 *                      }
 *                  ],
 *                  "Active": true,
 *                  "IsPrimaryAgent": true
 *              }
 *          ],
 *          "OnFocus": true,
 *          "Opportunity": true,
 *          "Featured": true,
 *          "building_id": 0,
 *          "priceprefixhelper": "string",
 *          "typology": "string",
 *          "features_list_enum": [
 *              "string"
 *          ],
 *          "features_list_categorized": [
 *              {
 *                  "Name": [
 *                      "string"
 *                  ],
 *                  "CategoryInnerText": "string",
 *                  "CategoryId": 0
 *              }
 *          ],
 *          "ami": "string",
 *          "propertyId": 0,
 *          "internalId": "string",
 *          "reference": "string",
 *          "sold": true,
 *          "visibleOnWebsite": true,
 *          "bathrooms": 0,
 *          "bedrooms": 0,
 *          "construction_year": 0,
 *          "price": 0,
 *          "second_price": 0,
 *          "price_visible": true,
 *          "plot_area": 0.1,
 *          "living_area": 0.1,
 *          "total_area": 0.1,
 *          "photos": [
 *              {
 *                  "Url": "string",
 *                  "Category": "string",
 *                  "Description": "string",
 *                  "SortOrder": 0
 *              }
 *          ],
 *          "photosWithoutWatermark": [
 *              {
 *                  "Url": "string",
 *                  "Category": "string",
 *                  "Description": "string",
 *                  "SortOrder": 0
 *              }
 *          ],
 *          "files": [
 *              {
 *                  "Filename": "string",
 *                  "Category": "string",
 *                  "SortOrder": 0
 *              }
 *          ],
 *          "portals": [
 *              "APlaceInTheSun"
 *          ],
 *          "video": "string",
 *          "widepanorama": "string",
 *          "floorplan": "string",
 *          "numberOfFloors": 0,
 *          "floorNumber": 0,
 *          "floorNumberString": "string",
 *          "exclusive": true,
 *          "cadastralReference": "string",
 *          "createDate": "2019-08-24T14:15:22Z",
 *          "lastChangeDate": "2019-08-24T14:15:22Z",
 *          "inactiveReason": "string"
 *          }
 *      ],
 *      "Count": 0,
 *      "Success": {},
 *      "Errors": [
 *          {
 *              "Code": 0,
 *              "ShortText": "string"
 *          }
 *      ],
 *      "Warnings": [
 *          {
 *              "Code": 0,
 *              "ShortText": "string"
 *          }
 *      ],
 *      "CorrelationId": "string",
 *      "EchoToken": "string",
 *      "PrimaryLangId": 0,
 *      "RetransmissionIndicator": true,
 *      "TimeStamp": "string",
 *      "Version": 0.1
 * }
 * </code>
 */
class PropertyListResponse extends Response
{
}