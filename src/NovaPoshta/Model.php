<?php

namespace NovaPoshta;

class Model implements \ArrayAccess {

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

    public function offsetSet($key, $value)
    {
        $this->__set($key, $value);
    }

    public function offsetExists($key)
    {
        return isset($this->properties[$key]);
    }

    public function offsetUnset($key)
    {
        unset($this->properties[$key]);
    }

    public function offsetGet($key)
    {
        return $this->__get($key);
    }
}
