<?php

namespace NovaPoshta\Addresses\Models;

use NovaPoshta\Models\Model;

class Street extends Model
{
    public function setDescription($description)
    {
        $this->__set('Description', $description);
    }

    public function getDescription()
    {
        return $this->__get('Description');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setStreetsTypeRef($streetsTypeRef)
    {
        $this->__set('StreetsTypeRef', $streetsTypeRef);
    }

    public function getStreetsTypeRef()
    {
        return $this->__get('StreetsTypeRef');
    }

    public function setStreetsType($streetsType)
    {
        $this->__set('StreetsType', $streetsType);
    }

    public function getStreetsType()
    {
        return $this->__get('StreetsType');
    }
}
