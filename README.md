# Get Details of Google Map Location

Install package

```php
composer require hiteshvala/google-map-marker
```

Once the package is installed, you can use it in your Laravel application by creating a new instance of the `GoogleMapMarker` class and calling the `getLocationDetails` method with the latitude and longitude parameters.

```php
use HiteshVala\GoogleMapMarker\GoogleMapMarker;

$apiKey = 'YOUR_GOOGLE_MAPS_API_KEY';

$marker = new GoogleMapMarker($apiKey);

$location = $marker->getLocationDetails($lat, $lng);

$address = $marker->getAddressDetails($address);

```

