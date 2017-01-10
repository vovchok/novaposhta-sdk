<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\MethodProperties;

class DocumentDeliveryDateMethodProperties extends MethodProperties
{
	public function setDateTime($dateTime)
	{
		$this->__set('DateTime', $dateTime);
	}

	public function getDateTime()
	{
		$this->__get('DateTime');
	}

	public function setServiceType($serviceType)
	{
		$this->__set('ServiceType', $serviceType);
	}

	public function getServiceType()
	{
		$this->__get('ServiceType');
	}

	public function setCitySender($citySender)
	{
		$this->__set('CitySender', $citySender);
	}

	public function getCitySender()
	{
		$this->__get('CitySender');
	}

	public function setCityRecipient($cityRecipient)
	{
		$this->__set('CityRecipient', $cityRecipient);
	}

	public function getCityRecipient()
	{
		$this->__get('CityRecipient');
	}
}
