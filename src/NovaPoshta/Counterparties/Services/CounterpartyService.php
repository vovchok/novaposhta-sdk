<?php

namespace NovaPoshta\Counterparties\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\Counterparties\Properties\CounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyAddressesMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyOptionsMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyContactPersonsMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartiesMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyUpdateMethodProperties;

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

    public function update(CounterpartyUpdateMethodProperties $properties)
    {
        return $this->makeRequest(
            'update',
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

    public function getCounterpartyOptions(CounterpartyOptionsMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCounterpartyOptions',
            \NovaPoshta\Counterparties\Responses\CounterpartyOptionsResponse::class,
            $properties
        );
    }

    public function getCounterpartyContactPersons(CounterpartyContactPersonsMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCounterpartyContactPerson',
            \NovaPoshta\Counterparties\Responses\CounterpartyContactPersonsResponse::class,
            $properties
        );
    }

    public function getCounterparties(CounterpartiesMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCounterparties',
            \NovaPoshta\Counterparties\Responses\CounterpartiesResponse::class,
            $properties
        );
    }
}
