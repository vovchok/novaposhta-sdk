<?php

namespace NovaPoshta\Registries\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\Registries\Properties\InsertDocumentsMethodProperties;

class ScanSheetService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'ScanSheet';

        parent::__construct($config);
    }

    public function insertDocuments(InsertDocumentsMethodProperties $properties)
    {
        return $this->makeRequest(
            'insertDocuments',
            \NovaPoshta\Registries\Responses\InsertDocumentsResponse::class,
            $properties
        );
    }
}
