<?php
declare(strict_types=1);

namespace CasafariSDK\Responses\Errors\Api\V1\Properties\Search;

final class PostStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the errors encountered.
     */
    public \CasafariSDK\Responses\Errors\Api\V1\Properties\Search\PostStatus400\ErrorsResponse $errors;

}
