<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Addresses\Models\City;

class CityResponse extends Response
{
    public function __construct()
    {
        parent::__construct(City::class);
    }
}
