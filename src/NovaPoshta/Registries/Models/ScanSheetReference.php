<?php

namespace NovaPoshta\Registries\Models;

use NovaPoshta\Model;

class ScanSheetReference extends Model
{
	public function setScanSheetRefs($scanSheetRefs)
	{
		$this->__set('ScanSheetRefs', $scanSheetRefs);
	}

	public function getScanSheetRefs()
	{
		return $this->__get('ScanSheetRefs');
	}
}
