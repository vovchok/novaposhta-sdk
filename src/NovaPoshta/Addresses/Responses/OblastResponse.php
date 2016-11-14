<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\Oblast;

class OblastResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Oblast::class);
    }
}
