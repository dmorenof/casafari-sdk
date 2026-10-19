<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Requests\CasafariGoUrlRequest;
use CasafariSDK\Responses\CasafariGoUrlResponse;
use CasafariSDK\Requests\CasafariGoEntityRequest;
use CasafariSDK\Responses\CasafariGoEntityResponse;
use CasafariSDK\Responses\GenericResponse;

/** CasafariGoApi operations from the Casafari CRM API v1 contract. */
final class CasafariGoApi extends CasafariCrmApi
{
    /** getUrl: POST /api/CasafariGo/GetUrl. */
    public function getUrl(CasafariGoUrlRequest $request): CasafariGoUrlResponse
    {
        return $this->HttpClient->request(CasafariGoUrlResponse::class, Method::POST, 'CasafariGo/GetUrl', null, (string)$request);
    }

    /** createUser: POST /api/CasafariGo/CreateUser. */
    public function createUser(CasafariGoEntityRequest $request): CasafariGoEntityResponse
    {
        return $this->HttpClient->request(CasafariGoEntityResponse::class, Method::POST, 'CasafariGo/CreateUser', null, (string)$request);
    }

    /** deleteUser: POST /api/CasafariGo/DeleteUser. */
    public function deleteUser(CasafariGoEntityRequest $request): GenericResponse
    {
        return $this->HttpClient->request(GenericResponse::class, Method::POST, 'CasafariGo/DeleteUser', null, (string)$request);
    }
}
