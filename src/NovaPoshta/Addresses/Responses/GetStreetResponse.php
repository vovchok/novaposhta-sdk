<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\Street;

class GetStreetResponse extends Response
{
    public function setData($data, $className = Street::class)
    {
        parent::setData($data, $className);
    }
}
