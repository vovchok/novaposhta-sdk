<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\Organization;

class GetCounterpartiesResponse extends Response
{
	public function setData($data, $className = Organization::class)
    {
        return parent::setData($data, $className);
    }
}
