<?php

namespace NovaPoshta\Counterparties\Models;

use NovaPoshta\Models\Model;

class Reference extends Model
{
    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }
}
