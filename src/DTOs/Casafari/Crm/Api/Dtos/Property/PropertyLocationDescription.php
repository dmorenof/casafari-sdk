<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyLocationDescription extends \Dmorenof\SdkRuntime\DTO
{
    public string $Language;
    public string $Text;
    public string $Title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Language' => is_string($value) ? $this->Language = $value : parent::assignMember($name, $value),
            'Text' => is_string($value) ? $this->Text = $value : parent::assignMember($name, $value),
            'Title' => is_string($value) ? $this->Title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
