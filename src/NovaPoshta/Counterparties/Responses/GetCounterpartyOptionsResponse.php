<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\CounterpartyOption;

class GetCounterpartyOptionsResponse extends Response
{
	public function setData($data, $className = CounterpartyOption::class)
    {
        return parent::setData($data, $className);
    }
}
