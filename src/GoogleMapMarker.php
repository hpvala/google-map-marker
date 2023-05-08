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
}
