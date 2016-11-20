<?php

namespace NovaPoshta\Addresses\Services;

use NovaPoshta\ModelNames;
use NovaPoshta\Configuration;
use NovaPoshta\Service;

use NovaPoshta\Addresses\Properties\GetSettlementsMethodProperties;
use NovaPoshta\Addresses\Properties\GetWarehousesMethodProperties;

class AddressGeneralService extends Service
{
	public function __construct(Configuration $config)
	{
		$this->modelName = ModelNames::AddressGeneral;

		parent::__construct($config);
	}

	public function getSettlements(GetSettlementsMethodProperties $properties)
	{
		return $this->makeRequest(
            __FUNCTION__,
			\NovaPoshta\Addresses\Responses\GetSettlementsResponse::class,
			$properties
		);
	}

	public function getWarehouses(GetWarehousesMethodProperties $properties)
	{
		return $this->makeRequest(
            __FUNCTION__,
			\NovaPoshta\Addresses\Responses\GetWarehousesResponse::class,
			$properties
		);
	}

	public function getWarehouseTypes()
	{
		return $this->makeRequest(
            __FUNCTION__,
			\NovaPoshta\Addresses\Responses\GetWarehouseTypesResponse::class
		);
	}
}
