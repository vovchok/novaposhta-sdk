<?php

namespace NovaPoshta\References\Properties;

use NovaPoshta\MethodProperties;

class TimeIntervalMethodProperties extends MethodProperties
{
	public function setRecipientCityRef($recipientCityRef)
	{
		$this->__set('RecipientCityRef', $recipientCityRef);
	}

	public function getRecipientCityRef()
	{
		$this->__get('RecipientCityRef');
	}

	public function setDateTime($dateTime)
	{
		$this->__set('DateTime', $dateTime);
	}

	public function getDateTime()
	{
		$this->__get('DateTime');
	}
}
