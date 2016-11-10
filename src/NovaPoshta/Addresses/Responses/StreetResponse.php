<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Addresses\Models\Street;

class StreetResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Street::class);
    }
}