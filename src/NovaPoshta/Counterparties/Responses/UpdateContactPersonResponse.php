<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\ContactPerson;

class UpdateContactPersonResponse extends Response
{
	public function setData($data, $className = ContactPerson::class)
    {
        return parent::setData($data, $className);
    }
}
