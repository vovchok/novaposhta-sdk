<?php

namespace NovaPoshta\Counterparties\Services;

use NovaPoshta\Configuration;
use NovaPoshta\Services\Service;

use NovaPoshta\Counterparties\Properties\ContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\ContactPersonUpdateMethodProperties;
use NovaPoshta\Counterparties\Properties\ContactPersonDeleteMethodProperties;

class ContactPersonService extends Service
{
    public function __construct(Configuration $config)
    {
        $this->modelName = 'ContactPerson';

        parent::__construct($config);
    }

    public function save(ContactPersonMethodProperties $properties)
    {
        return $this->makeRequest(
            'save',
            \NovaPoshta\Counterparties\Responses\ContactPersonSaveResponse::class,
            $properties
        );
    }

    public function update(ContactPersonUpdateMethodProperties $properties)
    {
        return $this->makeRequest(
            'update',
            \NovaPoshta\Counterparties\Responses\ContactPersonSaveResponse::class,
            $properties
        );
    }

    public function delete(ContactPersonDeleteMethodProperties $properties)
    {
        return $this->makeRequest(
            'delete',
            \NovaPoshta\Counterparties\Responses\ContactPersonDeleteResponse::class,
            $properties
        );
    }
}
