<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\Response;
use CasafariSDK\Core\TypedArrayMiddleware;
use CasafariSDK\Requests\PropertyListRequest;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyListResponse;
use CasafariSDK\Responses\PropertyResponse;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use JsonMapper\Exception\BuilderException;
use JsonMapper\Handler\FactoryRegistry;
use JsonMapper\Handler\PropertyMapper;
use JsonMapper\JsonMapperBuilder;

class Casafari
{
    const string PRODUCTION_SERVER_URL = 'https://crmapi.casafaricrm.com/api/';
    const string DEVELOPMENT_SERVER_URL = 'https://crmapi.proppydev.com/api/';
    private Client $Client;

    public function __construct(string $server, string $accessToken)
    {
        if (!in_array($server, [self::PRODUCTION_SERVER_URL, self::DEVELOPMENT_SERVER_URL])) {
            throw new InvalidArgumentException('Invalid server URL');
        }

        if (empty($accessToken)) {
            throw new InvalidArgumentException('Invalid access token');
        }

        $this->Client = new Client([
            'base_uri' => $server,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $accessToken,
            ],
            'http_errors' => false,
        ]);
    }

    /**
     * @param PropertyRequest $PropertyRequest
     * @return PropertyResponse
     * @throws Exception
     */
    public function sendProperty(PropertyRequest $PropertyRequest): PropertyResponse
    {
        return $this->request(PropertyResponse::class, Method::POST, 'Property/SendProperty', null, (string)$PropertyRequest);
    }

    /**
     * @template RESPONSE
     * @param class-string<RESPONSE> $reponse_class
     * @param Method $method
     * @param string $endpoint
     * @param array|null $query
     * @param string|null $json
     * @return RESPONSE
     * @throws Exception
     */
    private function request(string $reponse_class, Method $method, string $endpoint, ?array $query = null, ?string $json = null): Response
    {
        try {
            $options = [];

            if ($query) {
                $options = ['query' => $query];
            }

            if ($json) {
                $options = ['json' => $json];
            }

            $request = $this->Client->request($method->value, $endpoint, $options);
            $body = $request->getBody()->getContents();
        } catch (GuzzleException $GuzzleException) {
            throw new Exception($GuzzleException->getMessage());
        } catch (Exception $Exception) {
            throw new Exception($Exception->getMessage());
        }

        return $this->digestResponse($body, $reponse_class);
    }

    /**
     * @param string $body
     * @param string $response_class
     * @return Response
     * @throws BuilderException
     * @throws Exception
     */
    private function digestResponse(string $body, string $response_class): Response
    {
        $json = json_decode($body);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception(json_last_error_msg());
        }

        $factoryRegistry = new FactoryRegistry();
        $mapper = JsonMapperBuilder::new()
            ->withObjectConstructorMiddleware($factoryRegistry)
            ->withPropertyMapper(new PropertyMapper($factoryRegistry))
            ->withMiddleware(new TypedArrayMiddleware())
            ->build();

        /* @var Response $Response */
        $Response = $mapper->mapToClass($json, $response_class);

        if (!isset($Response->Success) || !is_object($Response->Success)) {
            throw new Exception(implode(PHP_EOL, array_column((array)$Response->Errors, 'ShortText')));
        }

        return $Response;
    }

    /**
     * @param PropertyListRequest $propertyListRequest
     * @return PropertyListResponse
     * @throws Exception
     */
    public function getPropertyList(PropertyListRequest $propertyListRequest): PropertyListResponse
    {
        return $this->request(PropertyResponse::class, Method::POST, 'Property/ListProperties', null, (string)$propertyListRequest);
    }
}
