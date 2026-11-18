<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class ListingAgent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public bool $Active;
    public string $Cellphone;
    public string $Email;
    public bool $IsPrimaryAgent;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\ListingAgent\LocaleCollection $Locale;
    public string $Name;
    public string $Phone;
    public string $Photo;
    /**
     * Format: int32
     */
    public int $id;

}
