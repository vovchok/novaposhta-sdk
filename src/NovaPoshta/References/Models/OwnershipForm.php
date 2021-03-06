<?php

namespace NovaPoshta\References\Models;

use NovaPoshta\Model;

class OwnershipForm extends Model
{
	public function getRef()
	{
		return $this->__get('Ref');
	}

	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getDescription()
	{
		return $this->__get('Description');
	}

	public function setDescription($description)
	{
		$this->__set('Description', $description);
	}

	public function getFullName()
	{
		return $this->__get('FullName');
	}

	public function setFullName($fullName)
	{
		$this->__set('FullName', $fullName);
	}
}
