<?php

namespace NovaPoshta\ExpressWaybill\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\ExpressWaybill\Properties\DocumentPriceMethodProperties;

class InternetDocumentService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'InternetDocument';

        parent::__construct($config);
    }

    public function getDocumentPrice(DocumentPriceMethodProperties $properties)
    {
        return $this->makeRequest(
            'getDocumentPrice',
            \NovaPoshta\ExpressWaybill\Responses\DocumentPriceResponse::class,
            $properties
        );
    }
}
