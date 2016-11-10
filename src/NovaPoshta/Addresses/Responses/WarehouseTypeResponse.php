<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Addresses\Models\WarehouseType;

class WarehouseTypeResponse extends Response
{
    public function __construct()
    {
        parent::__construct(WarehouseType::class);
    }
}
