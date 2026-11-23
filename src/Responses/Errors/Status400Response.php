<?php

declare(strict_types=1);

namespace CasafariSDK\Responses\Errors;

final class Status400Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the errors encountered.
     */
    public \CasafariSDK\Responses\Errors\Status400\ErrorsResponse $errors;

}
