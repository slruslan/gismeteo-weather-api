<?php

namespace Slruslan\Gismeteo\Objects;

class Fact extends BaseObject {

    /**
     * Date forecast valid at
     * @var string
     */
    public $valid;

    /**
     * ??
     * @var int
     */
    public $tod;

    /**
     * ??
     * (refers to sunrise time, probably in minutes)
     * @var int
     */
    public $risem;

    /**
     * ??
     * (refers to sunset time, probably in minutes)
     * @var int
     */
    public $setm;

    /**
     * ??
     * (refers to day duration)
     * @var int
     */
    public $durm;

    /**
     * Sunrise timestamp
     * @var int
     */
    public $sunrise;

    /**
     * Sunset timestamp
     * @var int
     */
    public $sunset;

    /**
     * @var Values
     */
    public $values;
}
