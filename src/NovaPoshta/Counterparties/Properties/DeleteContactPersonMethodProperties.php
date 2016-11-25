<?php

namespace NovaPoshta\Counterparties\Properties;

use NovaPoshta\MethodProperties;

class DeleteContactPersonMethodProperties extends MethodProperties
{
	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getRef()
	{
		$this->__get('Ref');
	}
}
