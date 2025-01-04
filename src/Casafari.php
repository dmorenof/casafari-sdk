<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\HttpClient;
use CasafariSDK\Requests\PropertyListRequest;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyListResponse;
use CasafariSDK\Responses\PropertyResponse;
use Exception;
use InvalidArgumentException;
use Throwable;

class Casafari
{
    public HttpClient $HttpClient;

    public function __construct(string $server, string $accessToken)
    {
        if (empty($server)) {
            throw new InvalidArgumentException('Invalid server URL');
        }

        if (empty($accessToken)) {
            throw new InvalidArgumentException('Invalid access token');
        }

        $this->HttpClient = new HttpClient($server, $accessToken);
    }

    /**
     * @param PropertyRequest $PropertyRequest
     * @return PropertyResponse
     * @throws Throwable
     */
    public function sendProperty(PropertyRequest $PropertyRequest): PropertyResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/SendProperty', null, (string)$PropertyRequest);
    }

    /**
     * @param PropertyListRequest $propertyListRequest
     * @return PropertyListResponse
     * @throws Exception
     */
    public function getPropertyList(PropertyListRequest $propertyListRequest): PropertyListResponse
    {
        return $this->HttpClient->request(PropertyResponse::class, Method::POST, 'Property/ListProperties', null, (string)$propertyListRequest);
    }
}
