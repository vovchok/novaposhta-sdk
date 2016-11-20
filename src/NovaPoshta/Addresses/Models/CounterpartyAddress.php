<?php

namespace NovaPoshta\Addresses\Models;

use NovaPoshta\Model;

class CounterpartyAddress extends Model
{
	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getRef()
	{
		return $this->__get('Ref');
	}

	public function setDescription($description)
	{
		$this->__set('Description', $description);
	}

	public function getDescription()
	{
		return $this->__get('Description');
	}
}
