<?php

namespace Slruslan\Gismeteo\Objects;

class Forecast extends BaseObject {
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
     * Forecast values
     * @var Values
     */
    public $values;
}
