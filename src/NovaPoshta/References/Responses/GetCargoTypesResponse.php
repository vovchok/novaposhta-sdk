<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\CargoType;

class GetCargoTypesResponse extends Response
{
	public function setData($data, $className = CargoType::class)
    {
        return parent::setData($data, $className);
    }
}
