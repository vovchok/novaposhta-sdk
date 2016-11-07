<?php

namespace NovaPoshta\Address\Services;

use NovaPoshta\Properties\MethodProperties;
use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

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
            \NovaPoshta\Address\Responses\SettlementResponse::class,
            $properties
        );
    }

    public function getWarehouses(MethodProperties $properties)
    {
        return $this->makeRequest(
            'getWarehouses',
            \NovaPoshta\Address\Responses\WarehouseResponse::class,
            $properties
        );
    }

    public function getWarehouseTypes()
    {
        return $this->makeRequest(
            'getWarehouseTypes',
            \NovaPoshta\Address\Responses\WarehouseTypeResponse::class
        );
    }
}
