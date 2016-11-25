<?php

namespace NovaPoshta\Counterparties\Services;

use NovaPoshta\ModelNames;
use NovaPoshta\Configuration;
use NovaPoshta\Service;

use NovaPoshta\Counterparties\Properties\ContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\UpdateContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\DeleteContactPersonMethodProperties;

class ContactPersonService extends Service
{
	public function __construct(Configuration $config)
	{
		$this->modelName = ModelNames::ContactPerson;

		parent::__construct($config);
	}

	public function save(ContactPersonMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\SaveContactPersonResponse::class,
			$properties
		);
	}

	public function update(UpdateContactPersonMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\UpdateContactPersonResponse::class,
			$properties
		);
	}

	public function delete(DeleteContactPersonMethodProperties $properties)
	{
		return $this->makeRequest(
			__FUNCTION__,
			\NovaPoshta\Counterparties\Responses\DeleteContactPersonResponse::class,
			$properties
		);
	}
}
