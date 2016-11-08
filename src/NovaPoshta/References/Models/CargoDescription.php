<?php

namespace NovaPoshta\References\Models;

class CargoDescription
{
    protected $ref;
    protected $description;
    protected $descriptionRu;

    public function __construct($ref, $description, $descriptionRu)
    {
        $this->ref = $ref;
        $this->description = $description;
        $this->descriptionRu = $descriptionRu;
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
}
