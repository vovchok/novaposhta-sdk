<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TypeOfPayersForRedelivery;

class GetTypesOfPayersForRedeliveryResponse extends Response
{
	public function setData($data, $className = TypeOfPayersForRedelivery::class)
    {
        return parent::setData($data, $className);
    }
}
