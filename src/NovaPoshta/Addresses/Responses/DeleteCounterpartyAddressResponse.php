<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\CounterpartyAddress;

class DeleteCounterpartyAddressResponse extends Response
{
    public function setData($data, $className = CounterpartyAddress::class)
    {
        parent::setData($data, $className);
    }
}
