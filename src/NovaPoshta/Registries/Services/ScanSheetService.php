<?php

namespace NovaPoshta\Registries\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\Registries\Properties\InsertDocumentsMethodProperties;
use NovaPoshta\Registries\Properties\ScanSheetMethodProperties;
use NovaPoshta\Registries\Properties\DeleteScanSheetMethodProperties;

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

    public function getScanSheet(ScanSheetMethodProperties $properties)
    {
        return $this->makeRequest(
            'getScanSheet',
            \NovaPoshta\Registries\Responses\ScanSheetResponse::class,
            $properties
        );
    }

    public function getScanSheetList()
    {
        return $this->makeRequest(
            'getScanSheetList',
            \NovaPoshta\Registries\Responses\ScanSheetListResponse::class
        );
    }

    public function deleteScanSheet(DeleteScanSheetMethodProperties $properties)
    {
        return $this->makeRequest(
            'deleteScanSheet',
            \NovaPoshta\Registries\Responses\DeleteScanSheetResponse::class,
            $properties
        );
    }
}
