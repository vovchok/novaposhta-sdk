<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\CargoDescription;

class GetCargoDescriptionListResponse extends Response
{
	public function setData($data, $className = CargoDescription::class)
    {
        return parent::setData($data, $className);
    }
}
