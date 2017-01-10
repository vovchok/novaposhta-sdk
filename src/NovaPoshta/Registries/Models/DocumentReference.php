<?php

namespace NovaPoshta\Registries\Models;

use NovaPoshta\Model;

class DocumentReference extends Model
{
	public function setDocumentRefs($DocumentRefs)
	{
		$this->__set('DocumentRefs', $DocumentRefs);
	}

	public function getDocumentRefs()
	{
		return $this->__get('DocumentRefs');
	}
}
