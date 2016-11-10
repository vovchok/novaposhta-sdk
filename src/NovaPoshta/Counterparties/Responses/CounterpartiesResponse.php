<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Counterparties\Models\Organization;

class CounterpartiesResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Organization::class);
    }
}
