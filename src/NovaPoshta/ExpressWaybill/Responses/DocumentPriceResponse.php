<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentPrice;

class DocumentPriceResponse extends Response
{
    public function __construct()
    {
        parent::__construct(DocumentPrice::class);
    }
}
