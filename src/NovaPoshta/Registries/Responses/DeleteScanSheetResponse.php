<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\ScanSheetReference;

class DeleteScanSheetResponse extends Response
{
    public function setData($data, $className = ScanSheetReference::class)
    {
        return parent::setData($data, $className);
    }
}
