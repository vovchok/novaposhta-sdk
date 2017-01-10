<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\ScanSheet;

class ScanSheetResponse extends Response
{
    public function setData($data, $className = ScanSheet::class)
    {
        return parent::setData($data, $className);
    }
}
