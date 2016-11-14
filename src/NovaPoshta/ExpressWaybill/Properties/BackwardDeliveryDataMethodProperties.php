<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\Properties\MethodProperties;

class BackwardDeliveryDataMethodProperties extends MethodProperties
{
    public function getPayerType()
    {
        return $this->__get('PayerType');
    }

    public function setPayerType($PayerType)
    {
        $this->__set('PayerType', $PayerType);
    }

    public function getCargoType()
    {
        return $this->__get('CargoType');
    }

    public function setCargoType($CargoType)
    {
        $this->__set('CargoType', $CargoType);
    }

    public function getServices()
    {
        return $this->__get('Services');
    }

    public function setServices(ServicesMethodProperties $Services)
    {
        $this->__set('Services', $Services->getProperties());
    }

    public function getRedeliveryString()
    {
        return $this->__get('RedeliveryString');
    }

    public function setRedeliveryString($RedeliveryString)
    {
        $this->__set('RedeliveryString', $RedeliveryString);
    }

    public function getTrays()
    {
        return $this->__get('Trays');
    }

    public function setTrays($Trays)
    {
        $this->__set('Trays', $Trays);
    }
}
