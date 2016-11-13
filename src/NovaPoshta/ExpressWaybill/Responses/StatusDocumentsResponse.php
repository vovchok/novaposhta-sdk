<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentStatus;

class StatusDocumentsResponse extends Response
{
    public function __construct()
    {
        parent::__construct(DocumentStatus::class);
    }
}
