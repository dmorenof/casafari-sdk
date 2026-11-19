<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api;

final class CodeTable extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/CodeTable',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\CodeTables\\CodeTableRs',
    ];

    /**
     * Retrieves a list of unique identifiers (IDs) for clients based on the provided request parameters.
     *
     * The "Get" method handles HTTP GET requests to obtain a list of client IDs. It accepts a request model
     * {rq} to define criteria for the code table query. The method returns a model containing
     * the list of client IDs based on the provided criteria.
     */
    public function get(?\CasafariSDK\GetParams\Api\CodeTable $params = null): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CodeTables\CodeTableRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CodeTables\CodeTableRs $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
