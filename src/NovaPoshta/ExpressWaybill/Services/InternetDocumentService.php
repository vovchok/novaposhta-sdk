<?php

namespace NovaPoshta\ExpressWaybill\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\ExpressWaybill\Properties\DocumentPriceMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentDeliveryDateMethodProperties;

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

    public function getDocumentDeliveryDate(DocumentDeliveryDateMethodProperties $properties)
    {
        return $this->makeRequest(
            'getDocumentDeliveryDate',
            \NovaPoshta\ExpressWaybill\Responses\DocumentDeliveryDateResponse::class,
            $properties
        );
    }
}
