<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\OwnershipForm;

class OwnershipFormsListResponse extends Response
{
    public function __construct()
    {
        parent::__construct(OwnershipForm::class);
        $this->data = [];
    }
}
