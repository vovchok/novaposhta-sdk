<?php

namespace NovaPoshta\References\Models;

class Tray
{
    protected $ref;
    protected $description;
    protected $descriptionRu;
    protected $weight;

    public function __construct($ref, $description, $descriptionRu, $weight)
    {
        $this->ref = $ref;
        $this->description = $description;
        $this->descriptionRu = $descriptionRu;
        $this->weight = $weight;
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

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}
