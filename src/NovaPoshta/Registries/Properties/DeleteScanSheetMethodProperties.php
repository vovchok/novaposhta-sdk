<?php

namespace NovaPoshta\Registries\Properties;

use NovaPoshta\MethodProperties;

class DeleteScanSheetMethodProperties extends MethodProperties
{
	public function setScanSheetRefs($scanSheetRefs)
	{
		$this->__set('ScanSheetRefs', $scanSheetRefs);
	}

	public function getScanSheetRefs()
	{
		$this->__get('ScanSheetRefs');
	}
}
