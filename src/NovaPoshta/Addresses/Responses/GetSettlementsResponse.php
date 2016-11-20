<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\Settlement;

class GetSettlementsResponse extends Response
{
	public function __construct()
	{
		parent::__construct(Settlement::class);
	}
}