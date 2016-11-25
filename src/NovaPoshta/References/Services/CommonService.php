<?php

namespace NovaPoshta\References\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Service;
use NovaPoshta\References\Properties\GetTimeIntervalsMethodProperties;
use NovaPoshta\References\Properties\GetCargoDescriptionListMethodProperties;

class CommonService extends Service
{
	public function __construct(Configuration $config)
	{
		$this->modelName = 'Common';

		parent::__construct($config);
	}

	public function getTimeIntervals(GetTimeIntervalsMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetTimeIntervalsResponse::class,
			$properties
		);
	}

	public function getCargoTypes()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetCargoTypesResponse::class
		);
	}

	public function getBackwardDeliveryCargoTypes()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetBackwardDeliveryCargoTypesResponse::class
		);
	}

	public function getTypesOfPayers()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetTypesOfPayersResponse::class
		);
	}

	public function getTypesOfPayersForRedelivery()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetTypesOfPayersForRedeliveryResponse::class
		);
	}

	public function getTiresWheelsList()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetTiresWheelsListResponse::class
		);
	}

	public function getCargoDescriptionList(GetCargoDescriptionListMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetCargoDescriptionListResponse::class,
			$properties
		);
	}

	public function getServiceTypes()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetServiceTypesResponse::class
		);
	}

	public function getTypesOfCounterparties()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetTypesOfCounterpartiesResponse::class
		);
	}

	public function getTraysList()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetTraysListResponse::class
		);
	}

	public function getPaymentForms()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetPaymentFormsResponse::class
		);
	}

	public function getOwnershipFormsList()
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\References\Responses\GetOwnershipFormsListResponse::class
		);
	}
}
