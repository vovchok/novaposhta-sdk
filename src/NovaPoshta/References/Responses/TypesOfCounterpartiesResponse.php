<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\References\Models\TypeOfCounterparties;

class TypesOfCounterpartiesResponse extends Response
{
    public function __construct()
    {
        parent::__construct(TypeOfCounterparties::class);
    }
}
