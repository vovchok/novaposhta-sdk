<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\Reference;

class DeleteContactPersonResponse extends Response
{
	public function setData($data, $className = Reference::class)
    {
        return parent::setData($data, $className);
    }
}
