<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Counterparties\Models\CounterpartyOption;

class CounterpartyOptionsResponse extends Response
{
    public function __construct()
    {
        parent::__construct(CounterpartyOption::class);
    }
}
