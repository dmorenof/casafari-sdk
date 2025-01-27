<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Requests\PropertyListRequest;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyListResponse;
use CasafariSDK\Responses\PropertyResponse;
use Exception;

/**
 * Handles operations related to property management in the Casafari CRM API.
 */
final class PropertyApi extends CasafariCrmApi
{
    /**
     * Sends properties to the server and retrieves the corresponding property response.
     *
     * @param PropertyRequest $PropertyRequest The request object containing the property details to be sent.
     * @return PropertyResponse The response object containing the details returned by the server.
     * @throws Exception
     */
    final public function sendProperty(PropertyRequest $PropertyRequest): PropertyResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/SendProperty', null, (string)$PropertyRequest);
    }

    /**
     * Deletes properties based on the details provided in the request object and retrieves the corresponding response.
     *
     * @param PropertyRequest $PropertyRequest The request object containing the property details to be deleted.
     * @return PropertyResponse The response object with the details of the operation result.
     * @throws Exception
     */
    final public function deleteProperty(PropertyRequest $PropertyRequest): PropertyResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/DeleteProperty', null, (string)$PropertyRequest);
    }

    /**
     * Retrieves a list of properties by sending a property list request to the server.
     *
     * @param PropertyListRequest $PropertyListRequest The request object containing the criteria for listing properties.
     * @return PropertyListResponse The response object containing the list of properties returned by the server.
     * @throws Exception
     */
    final public function getPropertyList(PropertyListRequest $PropertyListRequest): PropertyListResponse
    {
        return $this->HttpClient->request(PropertyListResponse::class, Method::POST, 'Property/ListProperties', null, (string)$PropertyListRequest);
    }
}
