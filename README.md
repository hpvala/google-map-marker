# Get Details of Google Map Location

<p align="center"><a href="https://github.com/hiteshsamcom/google-map-marker" target="_blank"><img src="https://www.samcomtechnobrains.com/gruvonsi/2023/05/hitesh_vala.png" width="150" alt="Hitesh Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/hiteshvala/google-map-marker"><img src="https://img.shields.io/packagist/dt/hiteshvala/google-map-marker.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hiteshvala/google-map-marker"><img src="https://img.shields.io/github/v/release/hiteshsamcom/google-map-marker.svg?style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/hiteshvala/google-map-marker"><img src="https://img.shields.io/github/languages/code-size/hiteshsamcom/google-map-marker" alt="Code Size"></a>
</p>

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

