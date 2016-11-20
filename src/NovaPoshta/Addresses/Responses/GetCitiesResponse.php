<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\City;

class GetCitiesResponse extends Response
{
	public function __construct()
	{
		parent::__construct(City::class);
	}
}
