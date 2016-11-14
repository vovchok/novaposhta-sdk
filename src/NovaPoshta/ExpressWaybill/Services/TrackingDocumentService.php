<?php

namespace NovaPoshta\ExpressWaybill\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Service;

use NovaPoshta\ExpressWaybill\Properties\StatusDocumentsMethodProperties;

class TrackingDocumentService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'TrackingDocument';

        parent::__construct($config);
    }

    public function getStatusDocuments(StatusDocumentsMethodProperties $properties)
    {
        return $this->makeRequest(
            'getStatusDocuments',
            \NovaPoshta\ExpressWaybill\Responses\StatusDocumentsResponse::class,
            $properties
        );
    }
}
