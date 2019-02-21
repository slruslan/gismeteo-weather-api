<?php

namespace Slruslan\Gismeteo\Objects;

class BaseObject {

    public function __construct($fields) {
        foreach($fields as $index => $field) {
            $this->$index = (string) $field;
        }
    }

}
