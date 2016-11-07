<?php

namespace NovaPoshta\References\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;
use NovaPoshta\References\Properties\TimeIntervalMethodProperties;

class CommonService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'Common';

        parent::__construct($config);
    }

    public function getTimeIntervals(TimeIntervalMethodProperties $properties)
    {
        return $this->makeRequest(
            'getTimeIntervals',
            \NovaPoshta\References\Responses\TimeIntervalResponse::class,
            $properties
        );
    }

    public function getCargoTypes()
    {
        return $this->makeRequest(
            'getCargoTypes',
            \NovaPoshta\References\Responses\CargoTypesResponse::class
        );
    }
}
