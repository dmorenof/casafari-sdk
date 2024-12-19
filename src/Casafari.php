<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Requests\PropertyRequest;
use CasafariSDK\Responses\PropertyResponse;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use InvalidArgumentException;
use JsonMapper;

class Casafari
{
    const string PRODUCTION_SERVER_URL = 'https://crmapi.casafaricrm.com/api/';
    const string DEVELOPMENT_SERVER_URL = 'https://crmapi.proppydev.com/api/';
    private string $accessToken;
    private Client $httpClient;

    public function __construct(string $server, string $accessToken)
    {
        if (!in_array($server, [self::PRODUCTION_SERVER_URL, self::DEVELOPMENT_SERVER_URL])) {
            throw new InvalidArgumentException('Invalid server URL');
        }

        if (empty($accessToken)) {
            throw new InvalidArgumentException('Invalid access token');
        }

        $this->accessToken = $accessToken;
        $this->httpClient = new Client([
            'base_uri' => $server,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->accessToken,
            ],
        ]);
    }

    /**
     * @param PropertyRequest $PropertyRequest
     * @return PropertyResponse
     * @throws Exception
     */
    public function sendProperty(PropertyRequest $PropertyRequest): PropertyResponse
    {
        $response = $this->request(Method::POST, 'Property/SendProperty', null, (string)$PropertyRequest);

        $JsonMapper = new JsonMapper();
        $PropertyResponse = $JsonMapper->map($response, PropertyResponse::class);

        if (!is_object($PropertyResponse->Success)) {
            throw new Exception('Success is not an object');
        }

        return $PropertyResponse;
    }

    /**
     * @param Method $method
     * @param string $endpoint
     * @param array|null $query
     * @param string|null $data
     * @return object|string
     * @throws Exception
     */
    private function request(Method $method, string $endpoint, ?array $query = null, ?string $data = null): object|string
    {
        try {
            $options = [];

            if ($query) {
                $options = ['query' => $query];
            }

            if ($data) {
                $options = ['json' => $data];
            }

            $request = $this->httpClient->request($method->value, $endpoint, $options);
            $body = $request->getBody()->getContents();
        } catch (RequestException $RequestException) {
            $body = $RequestException->getResponse()->getBody()->getContents();
        } catch (GuzzleException $GuzzleException) {
            throw new Exception($GuzzleException->getMessage());
        } catch (Exception $Exception) {
            throw new Exception($Exception->getMessage());
        }

        return json_decode($body) ?? $body;
    }
}
