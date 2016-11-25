<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TypeOfPayers;

class TypesOfPayersResponse extends Response
{
	public function __construct()
	{
		parent::__construct(TypeOfPayers::class);
	}
}
