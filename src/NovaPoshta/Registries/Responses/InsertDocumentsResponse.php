<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\Document;

class InsertDocumentsResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Document::class);
    }
}
