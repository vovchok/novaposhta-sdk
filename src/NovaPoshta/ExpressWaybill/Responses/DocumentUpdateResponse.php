<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\ExpressWaybill;

class DocumentUpdateResponse extends Response
{
    public function setData($data, $className = ExpressWaybill::class)
    {
        return parent::setData($data, $className);
    }
}
