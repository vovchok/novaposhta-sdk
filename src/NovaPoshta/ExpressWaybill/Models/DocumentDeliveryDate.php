<?php

namespace NovaPoshta\ExpressWaybill\Models;

use NovaPoshta\Models\Model;

class DocumentDeliveryDate extends Model
{
    public function getDeliveryDate()
    {
        return $this->__get('DeliveryDate');
    }

    public function setDeliveryDate($deliveryDate)
    {
        $this->__set('DeliveryDate', $deliveryDate);
    }
}
