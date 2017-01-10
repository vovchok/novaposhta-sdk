<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentStatus;

class StatusDocumentsResponse extends Response
{
    public function setData($data, $className = DocumentStatus::class)
    {
        return parent::setData($data, $className);
    }
}
