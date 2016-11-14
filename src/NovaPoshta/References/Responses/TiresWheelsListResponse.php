<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TireWheel;

class TiresWheelsListResponse extends Response
{
    public function __construct()
    {
        parent::__construct(TireWheel::class);
    }
}
