<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TypeOfCounterparties;

class TypesOfCounterpartiesResponse extends Response
{
    public function __construct()
    {
        parent::__construct(TypeOfCounterparties::class);
    }
}
