<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\References\Models\CargoDescription;

class CargoDescriptionListResponse extends Response
{
    public function __construct()
    {
        parent::__construct(CargoDescription::class);
    }
}
