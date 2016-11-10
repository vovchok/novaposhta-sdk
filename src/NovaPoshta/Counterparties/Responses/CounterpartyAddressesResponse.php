<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Counterparties\Models\CounterpartyAddress;

class CounterpartyAddressesResponse extends Response
{
    public function __construct()
    {
        parent::__construct(CounterpartyAddress::class);
    }
}
