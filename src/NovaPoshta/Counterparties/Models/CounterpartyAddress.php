<?php

namespace NovaPoshta\Counterparties\Models;

use NovaPoshta\Model;

class CounterpartyAddress extends Model
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
}
