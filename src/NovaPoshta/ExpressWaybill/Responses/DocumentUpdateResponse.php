<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\ExpressWaybill;

class DocumentUpdateResponse extends Response
{
    public function __construct()
    {
        parent::__construct(ExpressWaybill::class);
    }
}
