<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\Warehouse;

class GetWarehousesResponse extends Response
{
    public function setData($data, $className = Warehouse::class)
    {
        parent::setData($data, $className);
    }
}
