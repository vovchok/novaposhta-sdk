<?php

namespace NovaPoshta\Address\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\Address\Properties\CounterpartyMethodProperties;
use NovaPoshta\Address\Properties\CitiesMethodProperties;
use NovaPoshta\Address\Properties\StreetMethodProperties;

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
            \NovaPoshta\Address\Responses\CounterpartyAddressResponse::class,
            $properties
        );
    }

    public function update(CounterpartyMethodProperties $properties)
    {
        return $this->makeRequest(
            'update',
            \NovaPoshta\Address\Responses\CounterpartyAddressResponse::class,
            $properties
        );
    }

    public function delete(CounterpartyMethodProperties $properties)
    {
        return $this->makeRequest(
            'delete',
            \NovaPoshta\Address\Responses\CounterpartyAddressDeleteResponse::class,
            $properties
        );
    }

    public function getAreas()
    {
        return $this->makeRequest(
            'getAreas',
            \NovaPoshta\Address\Responses\OblastResponse::class
        );
    }

    public function getCities(CitiesMethodProperties $properties)
    {
        return $this->makeRequest(
            'getCities',
            \NovaPoshta\Address\Responses\CityResponse::class,
            $properties
        );
    }

    public function getStreet(StreetMethodProperties $properties)
    {
        return $this->makeRequest(
            'getStreet',
            \NovaPoshta\Address\Responses\StreetResponse::class,
            $properties
        );
    }
}
