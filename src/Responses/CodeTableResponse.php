<?php

namespace CasafariSDK\Responses;

/**
 * CodeTableResponse: typed representation of Casafari.Crm.Api.Dtos.CodeTables.CodeTableRs.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class CodeTableResponse extends \CasafariSDK\Core\Response
{
    public \CasafariSDK\TypedArrays\CodeNameValuesArray $BusinessTypes;
    public \CasafariSDK\TypedArrays\CodeNameValuesArray $PropertyTypes;
    public \CasafariSDK\TypedArrays\CodeNameValuesArray $Zones;
}
