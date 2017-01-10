<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\Document;

class InsertDocumentsResponse extends Response
{
    public function setData($data, $className = Document::class)
    {
        return parent::setData($data, $className);
    }
}
