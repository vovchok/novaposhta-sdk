<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\Counterparty;

class CounterpartyUpdateResponse extends Response
{
	public function __construct()
	{
		parent::__construct(Counterparty::class);
	}
}
