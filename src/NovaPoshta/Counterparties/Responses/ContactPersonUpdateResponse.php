<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\ContactPerson;

class ContactPersonUpdateResponse extends Response
{
    public function __construct()
    {
        parent::__construct(ContactPerson::class);
    }
}
