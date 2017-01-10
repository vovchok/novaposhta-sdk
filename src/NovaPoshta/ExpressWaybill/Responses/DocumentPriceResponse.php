<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentPrice;

class DocumentPriceResponse extends Response
{
    public function setData($data, $className = DocumentPrice::class)
    {
        return parent::setData($data, $className);
    }
}
