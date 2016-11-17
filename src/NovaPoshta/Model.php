<?php

namespace NovaPoshta;

class Model implements \ArrayAccess {

    protected $properties = [];

    public function __construct( $values = [] )
    {
        foreach ( $values as $key => $value ) {
            $this->__set($key, $value);
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

    public function __isset($key)
    {
        return isset($this->properties[$key]);
    }

    public function __unset($key)
    {
        unset($this->properties[$key]);
    }

    public function offsetSet($key, $value)
    {
        $this->__set($key, $value);
    }

    public function offsetExists($key)
    {
        return $this->__isset($key);
    }

    public function offsetUnset($key)
    {
        $this->__unset($key);
    }

    public function offsetGet($key)
    {
        return $this->__get($key);
    }
}
