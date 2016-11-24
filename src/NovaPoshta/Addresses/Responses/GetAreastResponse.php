<?php

namespace NovaPoshta\Addresses\Responses;

use NovaPoshta\Response;
use NovaPoshta\Addresses\Models\Oblast;

class GetAreastResponse extends Response
{
    public function setData($data, $className = Oblast::class)
    {
        parent::setData($data, $className);
    }
}
