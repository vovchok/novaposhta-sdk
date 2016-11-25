<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\Counterparty;

class UpdateCounterpartyResponse extends Response
{
	public function setData($data, $className = Counterparty::class)
    {
        return parent::setData($data, $className);
    }
}
