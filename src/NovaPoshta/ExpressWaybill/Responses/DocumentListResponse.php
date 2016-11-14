<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentListItem;

class DocumentListResponse extends Response
{
    public function __construct()
    {
        parent::__construct(DocumentListItem::class);
    }
}
