<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Addresses\Models\CounterpartyAddress;

class CounterpartyAddressResponse extends Response
{
    public function __construct()
    {
        parent::__construct(CounterpartyAddress::class);
    }
}
