<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\DocumentListItem;

class DocumentListResponse extends Response
{
    public function setData($data, $className = DocumentListItem::class)
    {
        return parent::setData($data, $className);
    }
}
