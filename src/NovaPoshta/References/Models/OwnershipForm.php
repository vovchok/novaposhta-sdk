<?php

namespace NovaPoshta\References\Models;

class OwnershipForm
{
    protected $ref;
    protected $description;
    protected $fullName;

    public function __construct($ref, $description, $fullName)
    {
        $this->ref = $ref;
        $this->description = $description;
        $this->fullName = $fullName;
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

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
}
