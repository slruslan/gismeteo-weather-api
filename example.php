<?php

// Simple example
// Gets weather in Sochi and outputs current water temperature

// First of all, include composer autoloader
require 'vendor/autoload.php';
use Slruslan\Gismeteo\Gismeteo;

// Initialize new class instance
$gismeteo = new Gismeteo();

// And get forecast for city ID 5233
//
// You can get city id on gismeteo.ru
// Just open any city you wish and copy
// the number you'll see in url.
//
// For example
// https://www.gismeteo.ru/weather-sochi-5233/now/
// => id is 5233
$forecast = $gismeteo->getForecast(5233);

// Get current weather conditions
$currentFact = $forecast->fact;

echo sprintf("Water temperature in Sochi is %s degree", $currentFact->values->water_t);