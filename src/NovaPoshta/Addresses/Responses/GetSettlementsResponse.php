<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\Settlement;

class GetSettlementsResponse extends Response
{
    public function setData($data, $className = Settlement::class)
    {
        parent::setData($data, $className);
    }
}
