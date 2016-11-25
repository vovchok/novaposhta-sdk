<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TypeOfPayers;

class GetTypesOfPayersResponse extends Response
{
	public function setData($data, $className = TypeOfPayers::class)
    {
        return parent::setData($data, $className);
    }
}
