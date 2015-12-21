# PHP Geocode class

## How to use
```php
<?php
include_once("Geocode.php");

$geocode = new Geocode();
$json = $geocode->execute("東京都新宿区西新宿２丁目８−１");
echo("latitude : " . $json->results[0]->geometry->location->lat);
```
