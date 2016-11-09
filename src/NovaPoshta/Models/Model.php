<?php

namespace NovaPoshta\Models;

class Model {

    private $properties = [];

    public function __construct( $values = [] )
    {
        foreach ( $values as $key => $value ) {
            $this->{$key} = $value;
        }
    }

    public function __get($key)
    {
        if (isset($this->properties[$key]) ) {
            return $this->properties[$key];
        }
    }

    public function __set($key, $value)
    {
        $this->properties[$key] = $value;
    }
}
