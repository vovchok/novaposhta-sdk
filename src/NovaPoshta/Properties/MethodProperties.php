<?php

namespace NovaPoshta\Properties;

class MethodProperties
{
    private $properties = [];

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

    public function getProperties()
    {
        return $this->properties;
    }
}
