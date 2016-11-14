<?php

namespace NovaPoshta\Addresses\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Service;

use NovaPoshta\Addresses\Properties\CounterpartyMethodProperties;
use NovaPoshta\Addresses\Properties\CitiesMethodProperties;
use NovaPoshta\Addresses\Properties\StreetMethodProperties;

class AddressService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'Address';

        parent::__construct($config);
    }

    public function save(CounterpartyMethodProperties $properties)
    {
        return $this->makeRequest(
            'save',
            \NovaPoshta\Addresses\Responses\CounterpartyAddressResponse::class,
            $properties
        );
    }

    public function update(CounterpartyMethodProperties $properties)
    {
        return $this->makeRequest(
            'update',
            \NovaPoshta\Addresses\Responses\CounterpartyAddressResponse::class,
            $properties
        );
    }

    public function delete(CounterpartyMethodProperties $properties)
    {
        return $this->makeRequest(
            'delete',
            \NovaPoshta\Addresses\Responses\CounterpartyAddressDeleteResponse::class,
            $properties
        );
    }

    public function getAreas()
    {
        return $this->makeRequest(
            'getAreas',
            \NovaPoshta\Addresses\Responses\OblastResponse::class
        );
    }

    public function getCities(CitiesMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCities',
            \NovaPoshta\Addresses\Responses\CityResponse::class,
            $properties
        );
    }

    public function getStreet(StreetMethodProperties $properties)
    {
        return $this->makeRequest(
            'getStreet',
            \NovaPoshta\Addresses\Responses\StreetResponse::class,
            $properties
        );
    }
}
