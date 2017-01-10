<?php

namespace NovaPoshta\Registries\Responses;

use NovaPoshta\Response;
use NovaPoshta\Registries\Models\DocumentReference;

class RemoveDocumentsResponse extends Response
{
    public function setData($data, $className = DocumentReference::class)
    {
        return parent::setData($data, $className);
    }
}
