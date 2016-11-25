<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\TimeInterval;

class GetTimeIntervalsResponse extends Response
{
	public function setData($data, $className = TimeInterval::class)
    {
        return parent::setData($data, $className);
    }
}
