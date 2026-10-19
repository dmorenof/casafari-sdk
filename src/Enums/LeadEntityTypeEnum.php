<?php

namespace CasafariSDK\Enums;

/** Values from the CRM API v1 Swagger snapshot. */
enum LeadEntityTypeEnum: string
{
    case Buyer = 'Buyer';
    case Renter = 'Renter';
    case Seller = 'Seller';
}
