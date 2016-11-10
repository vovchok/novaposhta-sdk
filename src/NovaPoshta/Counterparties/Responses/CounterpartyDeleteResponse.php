<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Counterparties\Models\Reference;

class CounterpartyDeleteResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Reference::class);
    }
}
