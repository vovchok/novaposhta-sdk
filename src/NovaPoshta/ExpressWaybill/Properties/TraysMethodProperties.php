<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\Properties\MethodProperties;

class TraysMethodProperties extends MethodProperties
{
    public function getCargoDescription()
    {
        return $this->__get('CargoDescription');
    }

    public function setCargoDescription($CargoDescription)
    {
        $this->__set('CargoDescription', $CargoDescription);
    }

    public function getAmount()
    {
        return $this->__get('Amount');
    }

    public function setAmount($Amount)
    {
        $this->__set('Amount', $Amount);
    }
}
