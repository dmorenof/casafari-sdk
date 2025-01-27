<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Requests\PropertyListRequest;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyListResponse;
use CasafariSDK\Responses\PropertyResponse;
use Exception;
use Throwable;

final class PropertyApi extends CasafariCrmApi
{
    /**
     * @param PropertyRequest $PropertyRequest
     * @return PropertyResponse
     * @throws Throwable
     */
    final public function sendProperty(PropertyRequest $PropertyRequest): PropertyResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/SendProperty', null, (string)$PropertyRequest);
    }

    /**
     * @param PropertyListRequest $PropertyListRequest
     * @return PropertyListResponse
     * @throws Exception
     */
    final public function getPropertyList(PropertyListRequest $PropertyListRequest): PropertyListResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/ListProperties', null, (string)$PropertyListRequest);
    }
}
