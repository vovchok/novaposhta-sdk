<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TypeOfPayersForRedelivery;

class TypesOfPayersForRedeliveryResponse extends Response
{
    public function __construct()
    {
        parent::__construct(TypeOfPayersForRedelivery::class);
    }
}
