<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Counterparties\Models\Counterparty;

class CounterpartySaveResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Counterparty::class);
    }
}
