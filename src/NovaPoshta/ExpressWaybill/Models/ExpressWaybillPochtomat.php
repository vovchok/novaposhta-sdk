<?php

namespace NovaPoshta\ExpressWaybill\Models;

use NovaPoshta\Model;

class ExpressWaybillPochtomat extends Model
{
    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getCostOnSite()
    {
        return $this->__get('CostOnSite');
    }

    public function setCostOnSite($costOnSite)
    {
        $this->__set('CostOnSite', $costOnSite);
    }

    public function getEstimatedDeliveryDatey()
    {
        return $this->__get('EstimatedDeliveryDatey');
    }

    public function setEstimatedDeliveryDatey($estimatedDeliveryDatey)
    {
        $this->__set('EstimatedDeliveryDatey', $estimatedDeliveryDatey);
    }

    public function getIntDocNumber()
    {
        return $this->__get('IntDocNumber');
    }

    public function setIntDocNumber($intDocNumber)
    {
        $this->__set('IntDocNumber', $intDocNumber);
    }

    public function getTypeDocument()
    {
        return $this->__get('TypeDocument');
    }

    public function setTypeDocument($typeDocument)
    {
        $this->__set('TypeDocument', $typeDocument);
    }

    public function getRegionCode()
    {
        return $this->__get('RegionCode');
    }

    public function setRegionCode($regionCode)
    {
        $this->__set('RegionCode', $regionCode);
    }

    public function getRegionCity()
    {
        return $this->__get('RegionCity');
    }

    public function setRegionCity($regionCity)
    {
        $this->__set('RegionCity', $regionCity);
    }
}
