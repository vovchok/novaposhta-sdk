<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\ExpressWaybillReference;

class DocumentDeleteResponse extends Response
{
    public function setData($data, $className = ExpressWaybillReference::class)
    {
        return parent::setData($data, $className);
    }
}
