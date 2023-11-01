<?php

namespace Etsy;

use GuzzleHttp\Client;

class API
{
    const X_API_KEY = 'x-api-key';
    const AUTH_HEADER = 'Authorization';
    const CONTENT_TYPE_HEADER = 'Content-Type';
    const JSON_CONTENT_TYPE = 'application/json';
    const BASE_URI = 'https://api.etsy.com/v3/application/';
    private $apiKey;
    private $keyString;
    private $client;

    public function __construct($apiKey, $keyString)
    {
        $this->apiKey = $apiKey;
        $this->keyString = $keyString;
        $this->client = new Client([
            'base_uri' => self::BASE_URI,
            'curl' => [CURLOPT_SSL_VERIFYPEER => false ]
        ]);
    }

    public function createListing(ListingDataTransfer $listingData)
    {
        $response = $this->client->post('listings', [
            'headers' => [
                self::AUTH_HEADER => 'Bearer ' . $this->apiKey,
                self::CONTENT_TYPE_HEADER => self::JSON_CONTENT_TYPE,
                self::X_API_KEY => $this->keyString
            ],
            'json' => $listingData->toRequestArray(),
        ]);
        return json_decode($response->getBody(), true);
    }

    public function updateListing($listingId, ListingDataTransfer $listingData)
    {
        $response = $this->client->put("listings/$listingId", [
            'headers' => [
                self::AUTH_HEADER => 'Bearer ' . $this->apiKey,
                self::CONTENT_TYPE_HEADER => self::JSON_CONTENT_TYPE,
            ],
            'json' => $listingData->toRequestArray(),
        ]);
        return json_decode($response->getBody(), true);
    }

    public function getListing($listingId)
    {
        $response = $this->client->get("listings/$listingId", [
            'headers' => [
                self::AUTH_HEADER => 'Bearer ' . $this->apiKey,
            ],
        ]);
        return json_decode($response->getBody(), true);
    }

    public function searchListings($keywords, $options = [])
    {
        $query = http_build_query(array_merge(['keywords' => $keywords], $options));
        $response = $this->client->get("listings?$query", [
            'headers' => [
                self::AUTH_HEADER => 'Bearer ' . $this->apiKey,
            ],
        ]);
        return json_decode($response->getBody(), true);
    }

    public function getShopInfo($shopId)
    {
        $response = $this->client->get("shops/$shopId", [
            'headers' => [
                self::AUTH_HEADER => 'Bearer ' . $this->apiKey,
            ],
        ]);
        return json_decode($response->getBody(), true);
    }
}
