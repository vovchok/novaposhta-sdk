<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\ExpressWaybillReference;

class DocumentDeleteResponse extends Response
{
    public function __construct()
    {
        parent::__construct(ExpressWaybillReference::class);
    }
}
