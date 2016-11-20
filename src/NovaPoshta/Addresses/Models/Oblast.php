<?php

namespace NovaPoshta\Addresses\Models;

use NovaPoshta\Model;

class Oblast extends Model
{
	public function setDescription($description)
	{
		$this->__set('Description', $description);
	}

	public function getDescription()
	{
		return $this->__get('Description');
	}

	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getRef()
	{
		return $this->__get('Ref');
	}

	public function setAreasCenter($areasCenter)
	{
		$this->__set('AreasCenter', $areasCenter);
	}

	public function getAreasCenter()
	{
		return $this->__get('AreasCenter');
	}
}
