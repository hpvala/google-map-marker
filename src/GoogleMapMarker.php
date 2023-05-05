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

    public function getLocationDetails($lat, $lng)
    {
        $client = new Client();

        $response = $client->get("https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&key={$this->apiKey}");

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
