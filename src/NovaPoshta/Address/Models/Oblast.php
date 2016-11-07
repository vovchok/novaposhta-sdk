<?php

namespace NovaPoshta\Address\Models;

class Oblast
{
    protected $description;
    protected $ref;
    protected $areasCenter;

    public function __construct($description, $ref, $areasCenter)
    {
        $this->description = $description;
        $this->ref = $ref;
        $this->areasCenter = $areasCenter;
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

    public function setAreasCenter($areasCenter)
    {
        $this->areasCenter = $areasCenter;
    }

    public function getAreasCenter()
    {
        return $this->areasCenter;
    }
}
