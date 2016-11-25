<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\Tray;

class GetTraysListResponse extends Response
{
	public function setData($data, $className = Tray::class)
    {
        return parent::setData($data, $className);
    }
}
