<?php

namespace NovaPoshta\Address\Models;

class Street
{
    protected $description;
    protected $ref;
    protected $streetsTypeRef;
    protected $streetsType;

    public function __construct($description, $ref, $streetsTypeRef, $streetsType)
    {
        $this->description = $description;
        $this->ref = $ref;
        $this->streetsTypeRef = $streetsTypeRef;
        $this->streetsType = $streetsType;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setStreetsTypeRef($streetsTypeRef)
    {
        $this->streetsTypeRef = $streetsTypeRef;
    }

    public function getStreetsTypeRef()
    {
        return $this->streetsTypeRef;
    }

    public function setStreetsType($streetsType)
    {
        $this->streetsType = $streetsType;
    }

    public function getStreetsType()
    {
        return $this->streetsType;
    }
}
