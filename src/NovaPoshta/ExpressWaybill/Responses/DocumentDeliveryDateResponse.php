<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentDeliveryDate;

class DocumentDeliveryDateResponse extends Response
{
    public function setData($data, $className = DocumentDeliveryDate::class)
    {
        return parent::setData($data, $className);
    }
}
