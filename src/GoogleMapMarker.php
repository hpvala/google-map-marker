<?php

namespace HiteshVala\GoogleMapMarker;

use GuzzleHttp\Client;

class GoogleMapMarker
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get details of locations based on latitude and longitude
     *
     * @param float $lat
     * @param float $lng
     * @return array|null
     */
    public function getLocationDetails($lat, $lng): ?array
    {
        $client = new Client();

        $response = $client->get("https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&key={$this->apiKey}");

        $result = json_decode($response->getBody()->getContents(), true) ?? null;

        return $result;
    }

    /**
     * Get details of full address based on address
     *
     * @param string $address
     * @return array|null
     */
    public function getAddressDetails($address): ?array
    {
        $client = new Client();

        $response = $client->get("https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$this->apiKey}");

        $result = json_decode($response->getBody()->getContents(), true) ?? null;

        return $result;
    }

    /**
     * Get timezone of passed location
     *
     * @param float $lat
     * @param float $lng
     * @param null|timestamp $timestamp
     * @return array|null
     */
    public function getTimezone($lat, $lng, $timestamp = null): ?array
    {
        $client = new Client();

        $query = [
            'location' => "{$lat},{$lng}",
            'key' => $this->apiKey,
        ];

        if ($timestamp) {
            $query['timestamp'] = $timestamp;
        }

        $response = $client->get('https://maps.googleapis.com/maps/api/timezone/json', [
            'query' => $query,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
