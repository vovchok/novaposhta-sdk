<?php

namespace NovaPoshta\Counterparties\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Counterparties\Properties\CounterpartyMethodProperties;
use NovaPoshta\Services\Service;

class CounterpartyService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'Counterparty';

        parent::__construct($config);
    }

    public function save(CounterpartyMethodProperties $properties)
    {
        return $this->makeRequest(
            'save',
            \NovaPoshta\Counterparties\Responses\CounterpartySaveResponse::class,
            $properties
        );
    }

}
