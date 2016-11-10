<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Registries\Models\ScanSheetReference;

class DeleteScanSheetResponse extends Response
{
    public function __construct()
    {
        parent::__construct(ScanSheetReference::class);
    }
}
