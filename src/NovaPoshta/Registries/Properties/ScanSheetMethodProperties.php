<?php

namespace NovaPoshta\Registries\Properties;

use NovaPoshta\Properties\MethodProperties;

class ScanSheetMethodProperties extends MethodProperties
{
    public function setCounterpartyRef($counterpartyRef)
    {
        $this->__set('CounterpartyRef', $counterpartyRef);
    }

    public function getCounterpartyRef()
    {
        $this->__get('CounterpartyRef');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        $this->__get('Ref');
    }
}
