<?php

namespace NovaPoshta\Counterparties\Properties;

use NovaPoshta\MethodProperties;

class CounterpartyDeleteMethodProperties extends MethodProperties
{
    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        $this->__get('Ref');
    }
}
