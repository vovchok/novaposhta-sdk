<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\BackwardDeliveryCargoType;

class GetBackwardDeliveryCargoTypesResponse extends Response
{
	public function setData($data, $className = BackwardDeliveryCargoType::class)
    {
        return parent::setData($data, $className);
    }
}
