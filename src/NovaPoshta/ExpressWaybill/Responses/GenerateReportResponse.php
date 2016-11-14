<?php

namespace NovaPoshta\ExpressWaybill\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\ExpressWaybill\Models\Report;

class GenerateReportResponse extends Response
{
    public function __construct()
    {
        parent::__construct(Report::class);
    }
}