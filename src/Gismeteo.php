<?php

namespace Slruslan\Gismeteo;

use GuzzleHttp\Client;

/**
 * Class Gismeteo
 *
 * Wrapper for Gismeteo private endpoints,
 * which originally used in mobile application.
 * Thereby you can get access to
 * forecast without API token.
 */
class Gismeteo
{
    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var Client
     */
    private $client;

    public function __construct()
    {
        $this->baseUri = 'http://45e30b7f.services.gismeteo.ru/inform-service/a407a91cfcb53e52063b77e9e777f5bd/';

        $this->client = new Client([
            'base_uri' => $this->baseUri
        ]);
    }

    /**
     * Get weather forecast for city.
     *
     * @param $city_id (can be found at gismeteo.ru)
     * @return ForecastResponse
     */
    public function getForecast($city_id)
    {
        $params = [
            'lang' => 'ru',
            'city' => $city_id,
        ];

        return new ForecastResponse($this->sendRequest('forecast', $params));
    }

    /**
     * Send API request using Guzzle.
     *
     * @param $method
     * @param $params
     * @return mixed
     */
    private function sendRequest($method, $params)
    {
        $response = $this->client->get($method, [
            'query' => $params,
            'headers' => [
                'User-Agent' => 'Gismeteo Android v2, Asus Nexus 7, 1.1.10',
            ]
        ]);

        return $response->getBody();
    }
}