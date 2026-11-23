<?php
declare(strict_types=1);

namespace CasafariSDK\Tests;

use CasafariSDK\Client;
use CasafariSDK\Configuration;
use CasafariSDK\DTOs\Api\ReferenceLocationV1;
use CasafariSDK\DTOs\Api\TypesV1;
use CasafariSDK\DTOs\UserManagement\Login\RequestSchema;
use CasafariSDK\GetParams\Api\V1\References\Locations\ByCoordinates;
use CasafariSDK\Middlewares\EchoMiddleware;
use CasafariSDK\Middlewares\LogMiddleware;
use CasafariSDK\Resources\Api\V1\References\Locations\ByCoordinates as ByCoordinatesResource;
use CasafariSDK\Resources\Api\V1\References\Types;
use Dmorenof\SdkRuntime\ApiException;
use Dmorenof\SdkRuntime\Security\OAuth2Client;
use Dmorenof\SdkRuntime\Security\OAuth2ClientCredentials;
use Dmorenof\SdkRuntime\Security\OAuth2Endpoints;
use Dmorenof\SdkRuntime\Security\OAuth2Options;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class BehaviorTest extends TestCase
{
    private const string TYPES = '[{"types":[],"types_with_countries":[]}]';

    /**
     * @param list<Response> $answers
     * @param list<array<string, mixed>> $history
     */
    private static function guzzle(array $answers, array &$history): Guzzle
    {
        $stack = HandlerStack::create(new MockHandler($answers));
        $stack->push(Middleware::history($history));
        return new Guzzle(['handler' => $stack]);
    }

    /**
     * @param list<Response> $answers
     * @param list<array<string, mixed>> $history
     */
    private static function configuration(array $answers, array &$history, mixed $credential = 'TEST_TOKEN'): Configuration
    {
        $configuration = new Configuration();
        $configuration->httpClient = self::guzzle($answers, $history);
        if ($credential !== null) {
            $configuration->securityCredentials = new SecurityCredentials(['HTTPBearer' => $credential]);
        }
        return $configuration;
    }

    private static function json(string $body, int $status = 200): Response
    {
        return new Response($status, ['Content-Type' => 'application/json'], $body);
    }

    public function testACallGoesToTheProductionServerWithTheBearerTokenAndComesBackTyped(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([self::json(self::TYPES)], $history));

        $types = $client->resource(Types::class)->get();

        $request = $history[0]['request'];
        self::assertSame('GET', $request->getMethod());
        self::assertSame('https://api.casafari.com/api/v1/references/types', (string) $request->getUri());
        self::assertSame('Bearer TEST_TOKEN', $request->getHeaderLine('Authorization'));
        self::assertSame('application/json', $request->getHeaderLine('Accept'));
        self::assertCount(1, $types);
        self::assertInstanceOf(TypesV1::class, $types[0]);
    }

    public function testTheStaticFacadeUsesTheConfiguredClient(): void
    {
        $history = [];
        \CasafariSDK\Api\V1\References\Types::configure(self::configuration([self::json(self::TYPES)], $history));
        $types = \CasafariSDK\Api\V1\References\Types::get();
        self::assertCount(1, $history);
        self::assertCount(1, $types);
    }

    public function testTheOauthClientCredentialsFlowFetchesATokenAndSendsIt(): void
    {
        $tokenHistory = [];
        $callHistory = [];
        $oauth = new OAuth2ClientCredentials(
            new OAuth2Endpoints('https://api.casafari.com/oauth/token'),
            new OAuth2Client('the-id', 'the-secret'),
            new OAuth2Options(scopes: ['api'], http: self::guzzle([self::json('{"access_token":"OAUTH_TOKEN","token_type":"Bearer","expires_in":1800}')], $tokenHistory)),
        );
        $configuration = self::configuration([self::json(self::TYPES)], $callHistory, null);
        $configuration->securityCredentials = new SecurityCredentials(['OAuth2ClientCredentials' => $oauth]);

        Client::connect($configuration)->resource(Types::class)->get();

        $token = $tokenHistory[0]['request'];
        self::assertSame('POST', $token->getMethod());
        self::assertSame('https://api.casafari.com/oauth/token', (string) $token->getUri());
        self::assertSame('Basic ' . base64_encode('the-id:the-secret'), $token->getHeaderLine('Authorization'));
        parse_str((string) $token->getBody(), $form);
        self::assertSame(['grant_type' => 'client_credentials', 'scope' => 'api'], $form);
        self::assertSame('Bearer OAUTH_TOKEN', $callHistory[0]['request']->getHeaderLine('Authorization'));
    }

    public function testWithoutCredentialsNothingIsSent(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([self::json(self::TYPES)], $history, null));
        try {
            $client->resource(Types::class)->get();
            self::fail('A call that needs credentials must not be sent without them.');
        } catch (\InvalidArgumentException) {
            self::assertSame([], $history);
        }
    }

    public function testLoginIsOpenAndSendsTheJsonBody(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([self::json('{"access_token":"a","refresh_token":"r"}')], $history, null));
        $login = new RequestSchema();
        $login->email = 'ada@example.com';
        $login->password = 'secret';

        $token = $client->resource(\CasafariSDK\Resources\Login::class)->post($login);

        $request = $history[0]['request'];
        self::assertSame('POST', $request->getMethod());
        self::assertSame('https://api.casafari.com/login', (string) $request->getUri());
        self::assertFalse($request->hasHeader('Authorization'));
        self::assertEquals((object) ['email' => 'ada@example.com', 'password' => 'secret'], json_decode((string) $request->getBody()));
        self::assertSame('a', $token->access_token);
        self::assertSame('r', $token->refresh_token);
    }

    public function testQueryParametersGoInTheQueryAndTheirRangesAreCheckedBeforeSending(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([self::json('{"administrative_level":"city","location_id":7,"locations_structure":[],"name":"Barcelona","parent_id":3}')], $history));
        $params = new ByCoordinates();
        $params->latitude = 41.3874;
        $params->longitude = 2.1686;

        $location = $client->resource(ByCoordinatesResource::class)->get($params);

        parse_str($history[0]['request']->getUri()->getQuery(), $query);
        self::assertSame(['latitude' => '41.3874', 'longitude' => '2.1686'], $query);
        self::assertInstanceOf(ReferenceLocationV1::class, $location);
        self::assertSame('Barcelona', $location->name);

        // A value is checked where it is assigned (a `set` hook), not when the call is made.
        $before = count($history);
        try {
            $params->latitude = 91.0;
            self::fail('A latitude outside -90..90 must be refused where it is assigned.');
        } catch (\UnexpectedValueException) {
            self::assertSame(41.3874, $params->latitude, 'The refused value was not stored.');
            self::assertCount($before, $history, 'Nothing is sent.');
        }
    }

    public function testAnHttpErrorIsAnApiExceptionWithTheRawResponse(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([self::json('{"detail":"Unauthorized"}', 401)], $history));
        try {
            $client->resource(Types::class)->get();
            self::fail('A 401 must throw.');
        } catch (ApiException $error) {
            self::assertSame(401, $error->getCode());
            self::assertStringContainsString('Unauthorized', $error->response->body);
        }
    }

    public function testAnUnknownFieldInAnAnswerIsIgnored(): void
    {
        $history = [];
        $client = Client::connect(self::configuration([self::json('[{"types":[],"types_with_countries":[],"added_by_the_server":1}]')], $history));
        self::assertCount(1, $client->resource(Types::class)->get());
    }

    public function testMiddlewaresSeeRequestsAndResponses(): void
    {
        $history = [];
        $configuration = self::configuration([self::json(self::TYPES)], $history);
        $configuration->middleware = [new EchoMiddleware()];
        ob_start();
        Client::connect($configuration)->resource(Types::class)->get();
        $output = (string) ob_get_clean();
        self::assertStringContainsString('>>> Request: GET https://api.casafari.com/api/v1/references/types', $output);
        self::assertStringContainsString('<<< Response: 200', $output);
    }

    public function testLogMiddlewareWritesToTheErrorLogWithoutTheToken(): void
    {
        $file = tempnam(sys_get_temp_dir(), 'casafari-log');
        $previous = ini_set('error_log', $file);
        try {
            $history = [];
            $configuration = self::configuration([self::json(self::TYPES)], $history);
            $configuration->middleware = [new LogMiddleware()];
            Client::connect($configuration)->resource(Types::class)->get();
        } finally {
            ini_set('error_log', $previous === false ? '' : $previous);
        }
        $log = (string) file_get_contents($file);
        unlink($file);
        self::assertStringContainsString('>>> Request: GET', $log);
        self::assertStringContainsString('<<< Response: 200', $log);
        self::assertStringNotContainsString('TEST_TOKEN', $log);
    }

    public function testTheSourceIsExactlyWhatTheContractGenerates(): void
    {
        exec(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(__DIR__ . '/../bin/regenerate.php') . ' --check 2>&1', $output, $status);
        self::assertSame(0, $status, implode("\n", $output));
    }
}
