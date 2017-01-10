<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Response;
use NovaPoshta\ExpressWaybill\Models\Report;

class GenerateReportResponse extends Response
{
    public function setData($data, $className = Report::class)
    {
        return parent::setData($data, $className);
    }
}
