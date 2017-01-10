<?php

namespace NovaPoshta\ExpressWaybill\Models;

use NovaPoshta\Model;

class DocumentListItem extends Model
{
	public function getDateTimeFrom()
	{
		return $this->__get('DateTimeFrom');
	}

	public function setDateTimeFrom($dateTimeFrom)
	{
		$this->__set('DateTimeFrom', $dateTimeFrom);
	}

	public function getDateTimeTo()
	{
		return $this->__get('DateTimeTo');
	}

	public function setDateTimeTo($dateTimeTo)
	{
		$this->__set('DateTimeTo', $dateTimeTo);
	}

	public function getPage()
	{
		return $this->__get('Page');
	}

	public function setPage($page)
	{
		$this->__set('Page', $page);
	}

	public function getGetFullList()
	{
		return $this->__get('GetFullList');
	}

	public function setGetFullList($getFullList)
	{
		$this->__set('GetFullList', $getFullList);
	}
}
