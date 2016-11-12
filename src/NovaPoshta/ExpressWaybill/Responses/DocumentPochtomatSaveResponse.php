<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\ExpressWaybill\Models\ExpressWaybillPochtomat;

class DocumentPochtomatSaveResponse extends Response
{
    public function __construct()
    {
        parent::__construct(ExpressWaybillPochtomat::class);
    }
}