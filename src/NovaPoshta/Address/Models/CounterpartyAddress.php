<?php

namespace NovaPoshta\Address\Models;

class CounterpartyAddress
{
    protected $ref;
    protected $description;

    public function __construct($ref, $description = '')
    {
        $this->ref = $ref;
        $this->description = $description;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
