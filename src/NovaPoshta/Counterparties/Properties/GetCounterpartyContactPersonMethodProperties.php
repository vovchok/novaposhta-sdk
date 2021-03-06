<?php

namespace NovaPoshta\Counterparties\Properties;

use NovaPoshta\MethodProperties;

class GetCounterpartyContactPersonMethodProperties extends MethodProperties
{
	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getRef()
	{
		$this->__get('Ref');
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
