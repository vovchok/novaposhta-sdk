<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\MethodProperties;

class StatusDocumentsMethodProperties extends MethodProperties
{
	public function setDocuments(MethodProperties $Documents)
	{
		$docs = [];
		if ( is_array($Documents) ) {
			foreach ( $Documents as $doc ) {
				$docs[] = $Documents;
			}
		}

		if ( is_object($Documents)) {
			$docs[] = $Documents;
		}

		$this->__set('Documents', $docs);
	}

	public function getDocuments()
	{
		$this->__get('Documents');
	}
}
