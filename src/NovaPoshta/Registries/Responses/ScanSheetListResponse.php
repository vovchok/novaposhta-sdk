<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\ScanSheetItem;

class ScanSheetListResponse extends Response
{
    public function setData($data, $className = ScanSheetItem::class)
    {
        return parent::setData($data, $className);
    }
}
