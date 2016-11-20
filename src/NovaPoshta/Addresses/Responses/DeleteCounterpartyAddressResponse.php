<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\CounterpartyAddress;

class DeleteCounterpartyAddressResponse extends Response
{
	public function __construct()
	{
		parent::__construct(CounterpartyAddress::class);
	}
}