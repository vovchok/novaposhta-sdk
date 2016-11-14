<?php

namespace NovaPoshta\References\Models;

use NovaPoshta\Model;

class TireWheel extends Model
{
    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getDescription()
    {
        return $this->__get('Description');
    }

    public function setDescription($description)
    {
        $this->__set('Description', $description);
    }

    public function getDescriptionRu()
    {
        return $this->__get('DescriptionRu');
    }

    public function setDescriptionRu($descriptionRu)
    {
        $this->__set('DescriptionRu', $descriptionRu);
    }

    public function getWight()
    {
        return $this->__get('Wight');
    }

    public function setWight($wight)
    {
        $this->__set('Wight', $wight);
    }

    public function getDescriptionType()
    {
        return $this->__get('DescriptionType');
    }

    public function setDescriptionType($descriptionType)
    {
        $this->__set('DescriptionType', $descriptionType);
    }
}
