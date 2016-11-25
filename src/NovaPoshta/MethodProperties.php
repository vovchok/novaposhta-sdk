<?php

namespace NovaPoshta;

class MethodProperties extends Model implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return $this->properties;
    }
}
