<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\WarehouseType;

class GetWarehouseTypesResponse extends Response
{
	public function __construct()
	{
		parent::__construct(WarehouseType::class);
	}
}