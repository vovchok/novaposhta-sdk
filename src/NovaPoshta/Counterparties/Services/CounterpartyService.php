<?php

namespace NovaPoshta\Counterparties\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\Counterparties\Properties\CounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyAddressesMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyOptionsMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyContactPersonMethodProperties;


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

    public function getCounterpartyOptions(CounterpartyOptionsMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCounterpartyOptions',
            \NovaPoshta\Counterparties\Responses\CounterpartyOptionsResponse::class,
            $properties
        );
    }

    public function getCounterpartyContactPerson(CounterpartyContactPersonMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCounterpartyContactPerson',
            \NovaPoshta\Counterparties\Responses\CounterpartyContactPersonResponse::class,
            $properties
        );
    }
}
