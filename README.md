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

```


To get address details based on full address of location calling the `getAddressDetails` method with the address parameters.
```php
$address = $marker->getAddressDetails($address);
```


To get a timezone based on location calling the `getTimezone` method with the latitude and longitude parameters, make sure your map key have timezone API access.
```php
$timezone = $marker->getTimezone($lat, $lng);
```

