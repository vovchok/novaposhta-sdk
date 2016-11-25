<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\ServiceType;

class ServiceTypesResponse extends Response
{
	public function __construct()
	{
		parent::__construct(ServiceType::class);
	}
}
