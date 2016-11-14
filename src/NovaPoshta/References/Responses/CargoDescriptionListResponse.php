<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\CargoDescription;

class CargoDescriptionListResponse extends Response
{
    public function __construct()
    {
        parent::__construct(CargoDescription::class);
    }
}
