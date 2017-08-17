<?php

namespace Slruslan\Gismeteo;

use SimpleXMLElement;
use Slruslan\Gismeteo\Objects\Day;
use Slruslan\Gismeteo\Objects\Fact;
use Slruslan\Gismeteo\Objects\Forecast;
use Slruslan\Gismeteo\Objects\Location;
use Slruslan\Gismeteo\Objects\Values;

class ForecastResponse {

    /**
     * Forecast location object
     * @var Objects\Location
     */
    public $location;

    /**
     * Current weather object
     * @var Objects\Fact
     */
    public $fact;

    /**
     * Days forecast
     * @var Objects\Day[]
     */
    public $days;

    public function __construct($response) {
        $xml = new SimpleXMLElement($response);

        $this->location = new Location($xml->location[0]->attributes());

        $this->fact = new Fact($xml->location[0]->fact[0]->attributes());
        $this->fact->values = new Values($xml->location[0]->fact[0]->values[0]->attributes());

        foreach($xml->location[0]->day as $day) {
            $dayObj = new Day($day->attributes());

            foreach($day->forecast as $fc) {
                $forecastObj = new Forecast($fc->attributes());
                $forecastObj->values = new Values($fc->values[0]->attributes());

                $dayObj->forecasts[] = $forecastObj;
            }

            $this->days[] = $dayObj;
        }
    }
}