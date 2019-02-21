<?php

namespace Slruslan\Gismeteo\Objects;

class Location extends BaseObject {

    /**
     * Location ID
     * @var int
     */
    public $id;

    /**
     * Location name
     * @var string
     */
    public $name;

    /**
     * Location genitive
     * @var string
     */
    public $name_r;

    /**
     * Country ID
     * @var int
     */
    public $country_id;

    /**
     * Country name
     * @var string
     */
    public $country_name;

    /**
     * District ID
     * @var int
     */
    public $district_id;

    /**
     * District name
     * @var string
     */
    public $district_name;

    /**
     * ??
     * @var string
     */
    public $kind;

    /**
     * Latitude
     * @var double
     */
    public $lat;

    /**
     * Longitude
     * @var double
     */
    public $lng;

    /**
     * ??
     * @var int
     */
    public $tzone;

    /**
     * Current time
     * @var string
     */
    public $cur_time;
}
