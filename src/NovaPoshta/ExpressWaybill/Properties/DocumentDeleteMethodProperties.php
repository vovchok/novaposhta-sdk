<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\MethodProperties;

class DocumentDeleteMethodProperties extends MethodProperties
{
	public function setDocumentRefs($documentRefs)
	{
		$this->__set('DocumentRefs', $documentRefs);
	}

	public function getDocumentRefs()
	{
		$this->__get('DocumentRefs');
	}
}
