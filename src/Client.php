<?php

declare(strict_types=1);

namespace CasafariSDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [
    'HTTPBearer' => [
        'type' => 'http',
        'scheme' => 'bearer',
        'location' => null,
        'parameterName' => null,
    ],
    'OAuth2ClientCredentials' => [
        'type' => 'oauth2',
        'scheme' => null,
        'location' => null,
        'parameterName' => null,
    ],
];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
