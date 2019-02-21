<?php

namespace Slruslan\Gismeteo\Objects;

class Values extends BaseObject {

    /**
     * Most fields are unknown
     * @todo: discover and fix
     */

    public $t;

    public $tflt;

    public $tcflt;

    /**
     * Atmospheric pressure
     * @var int
     */
    public $p;

    public $ws;

    public $wd;

    public $hum;

    public $hi;

    public $cl;

    public $pt;

    public $pr;

    public $prflt;

    public $ts;

    /**
     * Water temperature
     * @var int
     */
    public $water_t;

    public $icon;

    /**
     * Weather conditions description
     * @var string
     */
    public $descr;

    public $grade;

    public $ph;
}
