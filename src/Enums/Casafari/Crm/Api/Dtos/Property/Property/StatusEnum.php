<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property;

enum StatusEnum: string
{
    case Active = 'Active';
    case Inactive = 'Inactive';
    case Pending = 'Pending';
}
