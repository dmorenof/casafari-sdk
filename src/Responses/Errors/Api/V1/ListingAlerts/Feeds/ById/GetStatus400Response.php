<?php
declare(strict_types=1);

namespace CasafariSDK\Responses\Errors\Api\V1\ListingAlerts\Feeds\ById;

final class GetStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the errors encountered.
     */
    public \CasafariSDK\Responses\Errors\Api\V1\ListingAlerts\Feeds\ById\GetStatus400\ErrorsResponse $errors;

}
