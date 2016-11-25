<?php

namespace NovaPoshta\Counterparties\Properties;

use NovaPoshta\MethodProperties;

class GetCounterpartyAddressesMethodProperties extends MethodProperties
{
	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getRef()
	{
		$this->__get('Ref');
	}

	public function setCounterpartyProperty($counterpartyProperty)
	{
		$this->__set('CounterpartyProperty', $counterpartyProperty);
	}

	public function getCounterpartyProperty()
	{
		$this->__get('CounterpartyProperty');
	}
}
