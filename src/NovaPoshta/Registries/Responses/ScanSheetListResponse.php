<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\ScanSheetItem;

class ScanSheetListResponse extends Response
{
    public function __construct()
    {
        parent::__construct(ScanSheetItem::class);
    }
}
