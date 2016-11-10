<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Registries\Models\DocumentReference;

class RemoveDocumentsResponse extends Response
{
    public function __construct()
    {
        parent::__construct(DocumentReference::class);
    }
}
