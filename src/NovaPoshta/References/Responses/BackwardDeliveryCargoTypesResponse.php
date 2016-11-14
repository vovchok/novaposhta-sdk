<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\BackwardDeliveryCargoType;

class BackwardDeliveryCargoTypesResponse extends Response
{
    public function __construct()
    {
        parent::__construct(BackwardDeliveryCargoType::class);
    }
}
