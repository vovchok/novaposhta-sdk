<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\City;

class GetCitiesResponse extends Response
{
    public function setData($data, $className = City::class)
    {
        parent::setData($data, $className);
    }
}
