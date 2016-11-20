<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\Oblast;

class GetAreastResponse extends Response
{
	public function __construct()
	{
		parent::__construct(Oblast::class);
	}
}
