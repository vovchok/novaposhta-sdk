<?php

namespace NovaPoshta;

class MethodProperties implements \JsonSerializable
{
    private $properties = [];

    public function __construct( $values = [] )
    {
        foreach ( $values as $key => $value ) {
            $this->__set($key, $value);
        }
    }

    public function __get($key)
    {
        if (isset($this->properties[$key])) {
            return $this->properties[$key];
        }
    }

    public function __set($key, $value)
    {
        $this->properties[$key] = $value;
    }

    public function jsonSerialize()
    {
        return $this->properties;
    }

}
