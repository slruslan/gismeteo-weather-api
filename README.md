# Gismeteo Weather API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/slruslan/gismeteo-weather-api.svg?style=flat-square)](https://packagist.org/packages/slruslan/gismeteo-weather-api)
![License GPL](http://img.shields.io/badge/license-GPL-blue.svg?style=flat-square)

Simple PHP wrapper for Gismeteo private API.

Uses Android application endpoints, so you don't need token.

## Installation

Using Composer:

``` bash
$ composer require slruslan/gismeteo-weather-api --dev
```

## Usage

Initialize wrapper instance:
```php
$api = new \Slruslan\Gismeteo\Gismeteo();
```

Get forecast:
```php

// Pass your city id.
// See below how to get it
$cityId = 5233;

// Get forecast
$forecast = $api->getForecast($cityId);

// Get current weather data:
var_dump($forecast->fact->values);

// Get weather forecast for week:
var_dump($forecast->days);

// Get info for the city you specified:
var_dump($forecast->location);
```

The library isn't really high-documented and most fields are unknown. If you know anything about that response fields, feel free sending pull requests.

## Getting city id

Go to gismeteo.ru and open the city you wish.

Then in the page URL you'll see the number, which is city id itself.

For example:

URL: https://www.gismeteo.ru/weather-sochi-5233/now/
So the city ID for Sochi is 5233.

## API endpoint doesn't work anymore

If you download this library and see it doesn't work, it means Gismeteo changed API endpoint url.

To find a new one, download latest version of Android application (https://4pda.ru/forum/index.php?showtopic=658787) and install apktool.

Decompile the app, using apktool:
```
apktool d gismeteo.apk
```

Open file smali/ru/gismeteo/a/d.smali and refer to line 52 (may be changed in future too).

You'll see something like:

```
const-string v1, "http://45e30b7f.services.gismeteo.ru/inform-service/a407a91cfcb53e52063b77e9e777f5bd/"
```

Copy this URL and paste to Gismeteo.php file in __construct() method.

Congrats! You can use the API again.


## License

GNU General Public License v3.0 (GPL). The description is available at [LICENSE](LICENSE) file.

## Contact:

You can always reach me by email: dedagates@gmail.com

Or VK: [vk.com/slruslan](https://vk.com/slruslan)