<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\OwnershipForm;

class GetOwnershipFormsListResponse extends Response
{
	public function setData($data, $className = OwnershipForm::class)
    {
        return parent::setData($data, $className);
    }

}
