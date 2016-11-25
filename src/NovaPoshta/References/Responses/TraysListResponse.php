<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\Tray;

class TraysListResponse extends Response
{
	public function __construct()
	{
		parent::__construct(Tray::class);
	}
}
