<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentDeliveryDate;

class DocumentDeliveryDateResponse extends Response
{
    public function __construct()
    {
        parent::__construct(DocumentDeliveryDate::class);
    }
}
