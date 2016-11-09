<?php

namespace NovaPoshta\Counterparties\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\Counterparties\Properties\CounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyAddressesMethodProperties;


class CounterpartyService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'Counterparty';

        parent::__construct($config);
    }

    public function save(CounterpartyMethodProperties $properties)
    {
        return $this->makeRequest(
            'save',
            \NovaPoshta\Counterparties\Responses\CounterpartySaveResponse::class,
            $properties
        );
    }

    public function getCounterpartyAddresses(CounterpartyAddressesMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCounterpartyAddresses',
            \NovaPoshta\Counterparties\Responses\CounterpartyAddressesResponse::class,
            $properties
        );
    }

}
