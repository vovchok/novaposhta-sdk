<?php

namespace NovaPoshta\Addresses\Properties;

use NovaPoshta\MethodProperties;

class GetWarehousesMethodProperties extends MethodProperties
{
	public function setCityRef($сityRef)
	{
		$this->__set('CityRef', $сityRef);
	}

	public function getCityRef()
	{
		$this->__get('CityRef');
	}

	public function setCityName($сityName)
	{
		$this->__set('CityName', $сityName);
	}

	public function getCityName()
	{
		$this->__get('CityName');
	}

	public function setPage($page)
	{
		$this->__set('Page', $page);
	}

	public function getPage()
	{
		$this->__get('Page');
	}
}
