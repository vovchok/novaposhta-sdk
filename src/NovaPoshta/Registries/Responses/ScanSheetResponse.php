<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Registries\Models\ScanSheet;

class ScanSheetResponse extends Response
{
    public function __construct()
    {
        parent::__construct(ScanSheet::class);
    }
}
