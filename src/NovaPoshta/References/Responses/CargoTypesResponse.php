<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\CargoType;

class CargoTypesResponse extends Response
{
    public function __construct()
    {
        parent::__construct(CargoType::class);
    }
}
