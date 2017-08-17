<?php

namespace Slruslan\Gismeteo\Objects;

class Object {

    public function __construct($fields) {
        foreach($fields as $index => $field) {
            $this->$index = (string) $field;
        }
    }

}
