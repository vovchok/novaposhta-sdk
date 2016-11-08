<?php

namespace NovaPoshta\References\Models;

class TireWheel
{
    protected $ref;
    protected $description;
    protected $descriptionRu;
    protected $wight;
    protected $descriptionType;

    public function __construct($ref, $description, $descriptionRu, $wight, $descriptionType)
    {
        $this->ref = $ref;
        $this->description = $description;
        $this->descriptionRu = $descriptionRu;
        $this->wight = $wight;
        $this->descriptionType = $descriptionType;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setRef($ref)
    {
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

    public function getDescriptionRu()
    {
        return $this->descriptionRu;
    }

    public function setDescriptionRu($descriptionRu)
    {
        $this->descriptionRu = $descriptionRu;
    }

    public function getWight()
    {
        return $this->wight;
    }

    public function setWight($wight)
    {
        $this->wight = $wight;
    }

    public function getDescriptionType()
    {
        return $this->descriptionType;
    }

    public function setDescriptionType($descriptionType)
    {
        $this->descriptionType = $descriptionType;
    }
}
