<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\ServiceType;

class GetServiceTypesResponse extends Response
{
	public function setData($data, $className = ServiceType::class)
    {
        return parent::setData($data, $className);
    }
}
