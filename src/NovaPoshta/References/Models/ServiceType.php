<?php

namespace NovaPoshta\References\Models;

use NovaPoshta\Model;

class ServiceType extends Model
{
	public function getDescription()
	{
		return $this->__get('Description');
	}

	public function setDescription($description)
	{
		$this->__set('Description', $description);
	}

	public function getRef()
	{
		return $this->__get('Ref');
	}

	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}
}
