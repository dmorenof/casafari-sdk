<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class AIBuilderRequestV2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'valuation_id',
];

    /**
     * Agent data to display in the Builder.
     */
    public ?\CasafariSDK\DTOs\Api\AIBuilderRequestV2\AgentDTO $agent;
    public ?string $external_ref;
    /**
     * Language of the Builder session.
     */
    public \CasafariSDK\Enums\Api\AIBuilderRequestV2\LanguageEnum $language;
    /**
     * ID of the saved CMA to build the session from.
     */
    public int $valuation_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'external_ref' => $value === null || is_string($value) ? $this->external_ref = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \CasafariSDK\Enums\Api\AIBuilderRequestV2\LanguageEnum::from($value) : parent::assignMember($name, $value),
            'valuation_id' => is_int($value) ? $this->valuation_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
