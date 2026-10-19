<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Requests\CodeTableRequest;
use CasafariSDK\Responses\CodeTableResponse;

/** Query-based code table catalogue endpoint of the CRM API v1. */
final class CodeTableApi extends CasafariCrmApi
{
    public function getCodeTable(CodeTableRequest $request): CodeTableResponse
    {
        $query = [];
        foreach ($request->jsonSerialize() as $name => $value) {
            $query['rq.' . lcfirst($name)] = $value instanceof \BackedEnum ? $value->value : $value;
        }

        return $this->HttpClient->request(CodeTableResponse::class, Method::GET, 'CodeTable', $query);
    }
}
