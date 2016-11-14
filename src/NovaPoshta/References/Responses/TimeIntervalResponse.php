<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TimeInterval;

class TimeIntervalResponse extends Response
{
    public function __construct()
    {
        parent::__construct(TimeInterval::class);
    }
}
