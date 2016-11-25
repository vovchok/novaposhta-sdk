<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TireWheel;

class GetTiresWheelsListResponse extends Response
{
	public function setData($data, $className = TireWheel::class)
    {
        return parent::setData($data, $className);
    }
}
