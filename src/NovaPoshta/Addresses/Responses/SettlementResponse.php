<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Addresses\Models\Settlement;

class SettlementResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Settlement::class);
    }
}
