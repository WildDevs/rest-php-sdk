<?php

namespace WildDevs\Models;

function snakeToCamel($txt) {
    return lcfirst(str_replace('_', '', ucwords($txt, '_')));
}

function snakeToCamelArray($arr) {
    $transformed = array();

    foreach ($arr as $key => $value) {
        $transformed[snakeToCamel($key)] = $value;
    }

    return $transformed;
}

abstract class Base {
    public function __construct($data) {
        if ($data) {
            foreach ($data as $key => $value) {
                $camelCased = snakeToCamel($key);
                $this->{$camelCased} = $value;
            }
        }
    }
}
