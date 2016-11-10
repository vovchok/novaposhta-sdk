<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Addresses\Models\Warehouse;

class WarehouseResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Warehouse::class);
    }
}
