<?php

namespace NovaPoshta\References\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Service;
use NovaPoshta\References\Properties\TimeIntervalMethodProperties;
use NovaPoshta\References\Properties\CargoDescriptionMethodProperties;

class CommonService extends Service
{
	public function __construct(Configuration $config)
	{
		$this->modelName = 'Common';

		parent::__construct($config);
	}

	public function getTimeIntervals(TimeIntervalMethodProperties $properties)
	{
		return $this->makeRequest(
			'getTimeIntervals',
			\NovaPoshta\References\Responses\TimeIntervalResponse::class,
			$properties
		);
	}

	public function getCargoTypes()
	{
		return $this->makeRequest(
			'getCargoTypes',
			\NovaPoshta\References\Responses\CargoTypesResponse::class
		);
	}

	public function getBackwardDeliveryCargoTypes()
	{
		return $this->makeRequest(
			'getBackwardDeliveryCargoTypes',
			\NovaPoshta\References\Responses\BackwardDeliveryCargoTypesResponse::class
		);
	}

	public function getTypesOfPayers()
	{
		return $this->makeRequest(
			'getTypesOfPayers',
			\NovaPoshta\References\Responses\TypesOfPayersResponse::class
		);
	}

	public function getTypesOfPayersForRedelivery()
	{
		return $this->makeRequest(
			'getTypesOfPayersForRedelivery',
			\NovaPoshta\References\Responses\TypesOfPayersForRedeliveryResponse::class
		);
	}

	public function getTiresWheelsList()
	{
		return $this->makeRequest(
			'getTiresWheelsList',
			\NovaPoshta\References\Responses\TiresWheelsListResponse::class
		);
	}

	public function getCargoDescriptionList(CargoDescriptionMethodProperties $properties)
	{
		return $this->makeRequest(
			'getCargoDescriptionList',
			\NovaPoshta\References\Responses\CargoDescriptionListResponse::class,
			$properties
		);
	}

	public function getServiceTypes()
	{
		return $this->makeRequest(
			'getServiceTypes',
			\NovaPoshta\References\Responses\ServiceTypesResponse::class
		);
	}

	public function getTypesOfCounterparties()
	{
		return $this->makeRequest(
			'getTypesOfCounterparties',
			\NovaPoshta\References\Responses\TypesOfCounterpartiesResponse::class
		);
	}

	public function getTraysList()
	{
		return $this->makeRequest(
			'getTraysList',
			\NovaPoshta\References\Responses\TraysListResponse::class
		);
	}

	public function getPaymentForms()
	{
		return $this->makeRequest(
			'getPaymentForms',
			\NovaPoshta\References\Responses\PaymentFormsResponse::class
		);
	}

	public function getOwnershipFormsList()
	{
		return $this->makeRequest(
			'getOwnershipFormsList',
			\NovaPoshta\References\Responses\OwnershipFormsListResponse::class
		);
	}
}
