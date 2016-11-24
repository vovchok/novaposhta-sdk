<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\WarehouseType;

class GetWarehouseTypesResponse extends Response
{
    public function setData($data, $className = WarehouseType::class)
    {
        parent::setData($data, $className);
    }
}
