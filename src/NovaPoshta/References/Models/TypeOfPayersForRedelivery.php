<?php

namespace NovaPoshta\References\Models;

class TypeOfPayersForRedelivery
{
    protected $description;
    protected $ref;

    public function __construct($description, $ref)
    {
        $this->description = $description;
        $this->ref = $ref;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;
    }
}
