<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\CounterpartyAddress;

class GetCounterpartyAddressesResponse extends Response
{
	public function setData($data, $className = CounterpartyAddress::class)
    {
        return parent::setData($data, $className);
    }
}
