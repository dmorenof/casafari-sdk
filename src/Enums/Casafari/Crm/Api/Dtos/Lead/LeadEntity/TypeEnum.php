<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity;

enum TypeEnum: string
{
    case Buyer = 'Buyer';
    case Renter = 'Renter';
    case Seller = 'Seller';
}
