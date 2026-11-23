<?php

declare(strict_types=1);

namespace CasafariSDK\Responses\Errors;

final class Status404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the errors encountered.
     */
    public \CasafariSDK\Responses\Errors\Status404\ErrorsResponse $errors;

}
