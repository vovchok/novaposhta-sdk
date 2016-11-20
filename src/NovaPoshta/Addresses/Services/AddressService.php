<?php

namespace NovaPoshta\Addresses\Services;

use NovaPoshta\ModelNames;
use NovaPoshta\Configuration;
use NovaPoshta\Service;

use NovaPoshta\Addresses\Properties\CounterpartyMethodProperties;
use NovaPoshta\Addresses\Properties\GetCitiesMethodProperties;
use NovaPoshta\Addresses\Properties\GetStreetMethodProperties;

class AddressService extends Service
{
	public function __construct(Configuration $config)
	{
		$this->modelName = ModelNames::Address;

		parent::__construct($config);
	}

	public function save(CounterpartyMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Addresses\Responses\CounterpartyAddressResponse::class,
			$properties
		);
	}

	public function update(CounterpartyMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Addresses\Responses\CounterpartyAddressResponse::class,
			$properties
		);
	}

	public function delete(CounterpartyMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Addresses\Responses\DeleteCounterpartyAddressResponse::class,
			$properties
		);
	}

	public function getAreas()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Addresses\Responses\GetAreastResponse::class
		);
	}

	public function getCities(GetCitiesMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Addresses\Responses\GetCitiesResponse::class,
			$properties
		);
	}

	public function getStreet(GetStreetMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Addresses\Responses\GetStreetResponse::class,
			$properties
		);
	}
}
