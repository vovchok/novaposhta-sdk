<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\ExpressWaybillPochtomat;

class DocumentPochtomatSaveResponse extends Response
{
    public function setData($data, $className = ExpressWaybillPochtomat::class)
    {
        return parent::setData($data, $className);
    }
}
