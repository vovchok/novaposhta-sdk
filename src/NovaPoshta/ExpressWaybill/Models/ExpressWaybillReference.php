<?php

namespace NovaPoshta\ExpressWaybill\Models;

use NovaPoshta\Model;

class ExpressWaybillReference extends Model
{
	public function getRef()
	{
		return $this->__get('Ref');
	}

	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}
}
