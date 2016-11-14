<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\DocumentReference;

class RemoveDocumentsResponse extends Response
{
    public function __construct()
    {
        parent::__construct(DocumentReference::class);
    }
}
