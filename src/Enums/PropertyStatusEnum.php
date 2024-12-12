<?php

namespace CasafariSDK\Enums;

/**
 * Enum for Property->status
 */
enum PropertyStatusEnum: string
{
    case Active = "Active";
    case Inactive = "Inactive";
    case Pending = "Pending";
}