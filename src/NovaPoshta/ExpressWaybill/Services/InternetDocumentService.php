<?php

namespace NovaPoshta\ExpressWaybill\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\ExpressWaybill\Properties\DocumentPriceMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentDeliveryDateMethodProperties;
use NovaPoshta\Properties\MethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentUpdateMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentListMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentDeleteMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\GenerateReportMethodProperties;

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

    public function save(MethodProperties $properties)
    {
        return $this->makeRequest(
            'save',
            \NovaPoshta\ExpressWaybill\Responses\DocumentSaveResponse::class,
            $properties
        );
    }

    public function saveWithPochtomatAddress(MethodProperties $properties)
    {
        return $this->makeRequest(
            'save',
            \NovaPoshta\ExpressWaybill\Responses\DocumentPochtomatSaveResponse::class,
            $properties
        );
    }

    public function update(DocumentUpdateMethodProperties $properties)
    {
        return $this->makeRequest(
            'update',
            \NovaPoshta\ExpressWaybill\Responses\DocumentUpdateResponse::class,
            $properties
        );
    }

    public function getDocumentList(DocumentListMethodProperties $properties)
    {
        return $this->makeRequest(
            'getDocumentList',
            \NovaPoshta\ExpressWaybill\Responses\DocumentListResponse::class,
            $properties
        );
    }

    public function delete(DocumentDeleteMethodProperties $properties)
    {
        return $this->makeRequest(
            'delete',
            \NovaPoshta\ExpressWaybill\Responses\DocumentDeleteResponse::class,
            $properties
        );
    }

    public function generateReport(GenerateReportMethodProperties $properties)
    {
        return $this->makeRequest(
            'generateReport',
            \NovaPoshta\ExpressWaybill\Responses\GenerateReportResponse::class,
            $properties
        );
    }
}
