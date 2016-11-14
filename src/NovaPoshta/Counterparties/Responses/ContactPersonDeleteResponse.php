<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Response;
use NovaPoshta\Counterparties\Models\Reference;

class ContactPersonDeleteResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Reference::class);
    }
}
