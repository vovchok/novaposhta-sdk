<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\MethodProperties;

class DocumentPriceMethodProperties extends MethodProperties
{
	public function setCitySender($citySender)
	{
		$this->__set('CitySender', $citySender);
	}

	public function getCitySender()
	{
		$this->__get('CitySender');
	}

	public function setCityRecipient($CityRecipient)
	{
		$this->__set('CityRecipient', $CityRecipient);
	}

	public function getCityRecipient()
	{
		$this->__get('CityRecipient');
	}

	public function setWeight($weight)
	{
		$this->__set('Weight', $weight);
	}

	public function getWeight()
	{
		$this->__get('Weight');
	}

	public function setServiceType($serviceType)
	{
		$this->__set('ServiceType', $serviceType);
	}

	public function getServiceType()
	{
		$this->__get('ServiceType');
	}

	public function setCost($cost)
	{
		$this->__set('Cost', $cost);
	}

	public function getCost()
	{
		$this->__get('Cost');
	}

	public function setCargoType($cargoType)
	{
		$this->__set('CargoType', $cargoType);
	}

	public function getCargoType()
	{
		$this->__get('CargoType');
	}

	public function setSeatsAmount($seatsAmount)
	{
		$this->__set('SeatsAmount', $seatsAmount);
	}

	public function getSeatsAmount()
	{
		$this->__get('SeatsAmount');
	}

	public function setRedeliveryCalculate($redeliveryCalculate)
	{
		$this->__set('RedeliveryCalculate', $redeliveryCalculate);
	}

	public function getRedeliveryCalculate()
	{
		$this->__get('RedeliveryCalculate');
	}
}
