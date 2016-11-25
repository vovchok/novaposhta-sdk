<?php

namespace NovaPoshta\Counterparties\Services;

use NovaPoshta\ModelNames;
use NovaPoshta\Configuration;
use NovaPoshta\Service;

use NovaPoshta\Counterparties\Properties\CounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartyAddressesMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartyOptionsMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartyContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartiesMethodProperties;
use NovaPoshta\Counterparties\Properties\UpdateCounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\DeleteCounterpartyMethodProperties;

class CounterpartyService extends Service
{
	public function __construct(Configuration $config)
	{
		$this->modelName = ModelNames::Counterparty;

		parent::__construct($config);
	}

	public function save(CounterpartyMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\SaveCounterpartyResponse::class,
			$properties
		);
	}

	public function update(UpdateCounterpartyMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\UpdateCounterpartyResponse::class,
			$properties
		);
	}

	public function delete(DeleteCounterpartyMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\DeleteCounterpartyResponse::class,
			$properties
		);
	}

	public function getCounterpartyAddresses(GetCounterpartyAddressesMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\GetCounterpartyAddressesResponse::class,
			$properties
		);
	}

	public function getCounterpartyOptions(GetCounterpartyOptionsMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\GetCounterpartyOptionsResponse::class,
			$properties
		);
	}

	public function getCounterpartyContactPerson(GetCounterpartyContactPersonMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\GetCounterpartyContactPersonResponse::class,
			$properties
		);
	}

	public function getCounterparties(GetCounterpartiesMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\GetCounterpartiesResponse::class,
			$properties
		);
	}
}
