<?php

namespace NovaPoshta\Registries\Models;

use NovaPoshta\Models\Model;

class Document extends Model
{
    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setNumber($number)
    {
        $this->__set('Number', $number);
    }

    public function getNumber()
    {
        return $this->__get('Number');
    }

    public function setDate($Date)
    {
        $this->__set('Date', $Date);
    }

    public function getDate()
    {
        return $this->__get('Date');
    }
}
