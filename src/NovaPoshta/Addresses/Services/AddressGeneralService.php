<?php

namespace NovaPoshta\Addresses\Services;

use NovaPoshta\MethodProperties;
use NovaPoshta\Configuration;
use NovaPoshta\Service;

class AddressGeneralService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'AddressGeneral';

        parent::__construct($config);
    }

    public function getSettlements(MethodProperties $properties)
    {
        return $this->makeRequest(
            'getSettlements',
            \NovaPoshta\Addresses\Responses\SettlementResponse::class,
            $properties
        );
    }

    public function getWarehouses(MethodProperties $properties)
    {
        return $this->makeRequest(
            'getWarehouses',
            \NovaPoshta\Addresses\Responses\WarehouseResponse::class,
            $properties
        );
    }

    public function getWarehouseTypes()
    {
        return $this->makeRequest(
            'getWarehouseTypes',
            \NovaPoshta\Addresses\Responses\WarehouseTypeResponse::class
        );
    }
}
