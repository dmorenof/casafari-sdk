<?php
declare(strict_types=1);

namespace CasafariSDK\Api;

final class CodeTable extends \CasafariSDK\ExternalApiVersionSDK
{
    /** GET /api/CodeTable [operationId: CodeTable_Get] */
    /**
     * Retrieves a list of unique identifiers (IDs) for clients based on the provided request parameters.
     *
     * The "Get" method handles HTTP GET requests to obtain a list of client IDs. It accepts a request model
     * {rq} to define criteria for the code table query. The method returns a model containing
     * the list of client IDs based on the provided criteria.
     */
    public static function get(?\CasafariSDK\GetParams\Api\CodeTable $params = null): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CodeTables\CodeTableRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\CodeTable::class)->get($params);
    }

}
