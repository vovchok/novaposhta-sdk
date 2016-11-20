<?php

namespace NovaPoshta\Addresses\Properties;

use NovaPoshta\MethodProperties;

class CounterpartyMethodProperties extends MethodProperties
{
	public function setCounterpartyRef($counterpartyRef)
	{
		$this->__set('CounterpartyRef', $counterpartyRef);
	}

	public function getCounterpartyRef()
	{
		$this->__get('CounterpartyRef');
	}

	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getRef()
	{
		$this->__get('Ref');
	}

	public function setStreetRef($streetRef)
	{
		$this->__set('StreetRef', $streetRef);
	}

	public function getStreetRef()
	{
		$this->__get('StreetRef');
	}

	public function setBuildingNumber($buildingNumber)
	{
		$this->__set('BuildingNumber', $buildingNumber);
	}

	public function getBuildingNumber()
	{
		$this->__get('BuildingNumber');
	}

	public function setFlat($flat)
	{
		$this->__set('Flat', $flat);
	}

	public function getFlat()
	{
		$this->__get('Flat');
	}

	public function setNote($note)
	{
		$this->__set('Note', $note);
	}

	public function getNote()
	{
		$this->__get('Note');
	}
}
