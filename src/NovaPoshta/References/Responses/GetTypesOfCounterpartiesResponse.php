<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TypeOfCounterparties;

class GetTypesOfCounterpartiesResponse extends Response
{
	public function setData($data, $className = TypeOfCounterparties::class)
    {
        return parent::setData($data, $className);
    }
}
