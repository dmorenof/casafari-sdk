<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\AIBuilderRequestV2;

/**
 * Agent data to display in the Builder.
 */
final class AgentDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'first_name',
];

    protected const array VALIDATION = [
    'agent_webpage' => [
        'format' => 'uri',
        'pattern' => '^(?:[a-z0-9.+-]*)://(?:[^\\s:@/]+(?::[^\\s:@/]*)?@)?(?:(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)(?:\\.(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)){3}|\\[[0-9a-f:.]+\\]|([a-z¡-￿0-9](?:[a-z¡-￿0-9-]{0,61}[a-z¡-￿0-9])?(?:\\.(?!-)[a-z¡-￿0-9-]{1,63}(?<!-))*\\.(?!-)(?:[a-z¡-￿-]{2,63}|xn--[a-z0-9]{1,59})(?<!-)\\.?|localhost))(?::[0-9]{1,5})?(?:[/?#][^\\s]*)?\\z',
    ],
    'email' => [
        'format' => 'email',
    ],
    'photo_url' => [
        'format' => 'uri',
        'pattern' => '^(?:[a-z0-9.+-]*)://(?:[^\\s:@/]+(?::[^\\s:@/]*)?@)?(?:(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)(?:\\.(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)){3}|\\[[0-9a-f:.]+\\]|([a-z¡-￿0-9](?:[a-z¡-￿0-9-]{0,61}[a-z¡-￿0-9])?(?:\\.(?!-)[a-z¡-￿0-9-]{1,63}(?<!-))*\\.(?!-)(?:[a-z¡-￿-]{2,63}|xn--[a-z0-9]{1,59})(?<!-)\\.?|localhost))(?::[0-9]{1,5})?(?:[/?#][^\\s]*)?\\z',
    ],
];

    /**
     * Short biography or description of the agent. Displayed in the Builder only if the `photo_url` field is provided in the request.
     */
    public ?string $agent_bio;
    /**
     * Public URL of the agent's personal or professional webpage.
     * Format: uri
     */
    public ?string $agent_webpage {
        set {
            $this->assigning('agent_webpage', $value);
            $this->agent_webpage = $value;
        }
    }
    /**
     * Agent's email address displayed in the Builder and available for client contact.
     * Format: email
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * First name of the agent displayed in the Builder.
     */
    public string $first_name;
    /**
     * Agent's Instagram username or profile identifier displayed in the Builder.
     */
    public ?string $instagram;
    /**
     * Last name of the agent displayed in the Builder.
     */
    public ?string $last_name;
    /**
     * Phone number of the agent.
     */
    public ?string $phone;
    /**
     * URL to the profile picture of the agent.
     * Format: uri
     */
    public ?string $photo_url {
        set {
            $this->assigning('photo_url', $value);
            $this->photo_url = $value;
        }
    }
    /**
     * Name of the agency or brokerage displayed alongside the agent information.
     */
    public ?string $shop_name;
    /**
     * Agent's Telegram username displayed in the Builder.
     */
    public ?string $telegram;
    /**
     * Agent's WhatsApp phone number displayed as a contact option. Include the country code.
     */
    public ?string $whatsapp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agent_bio' => $value === null || is_string($value) ? $this->agent_bio = $value : parent::assignMember($name, $value),
            'agent_webpage' => $value === null || is_string($value) ? $this->agent_webpage = $value : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'instagram' => $value === null || is_string($value) ? $this->instagram = $value : parent::assignMember($name, $value),
            'last_name' => $value === null || is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'photo_url' => $value === null || is_string($value) ? $this->photo_url = $value : parent::assignMember($name, $value),
            'shop_name' => $value === null || is_string($value) ? $this->shop_name = $value : parent::assignMember($name, $value),
            'telegram' => $value === null || is_string($value) ? $this->telegram = $value : parent::assignMember($name, $value),
            'whatsapp' => $value === null || is_string($value) ? $this->whatsapp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
