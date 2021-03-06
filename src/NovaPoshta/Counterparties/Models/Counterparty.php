<?php

namespace NovaPoshta\Counterparties\Models;

use NovaPoshta\Model;

class Counterparty extends Model
{
	public function getRef()
	{
		return $this->__get('Ref');
	}

	public function setRef($ref)
	{
		$this->__set('Ref', $ref);
	}

	public function getDescription()
	{
		return $this->__get('Description');
	}

	public function setDescription($description)
	{
		$this->__set('Description', $description);
	}

	public function getFirstName()
	{
		return $this->__get('FirstName');
	}

	public function setFirstName($firstName)
	{
		$this->__set('FirstName', $firstName);
	}

	public function getMiddleName()
	{
		return $this->__get('MiddleName');
	}

	public function setMiddleName($middleName)
	{
		$this->__set('MiddleName', $middleName);
	}

	public function getLastName()
	{
		return $this->__get('LastName');
	}

	public function setLastName($lastName)
	{
		$this->__set('LastName', $lastName);
	}

	public function getCounterparty()
	{
		return $this->__get('Counterparty');
	}

	public function setCounterparty($counterparty)
	{
		$this->__set('Counterparty', $counterparty);
	}

	public function getOwnershipForm()
	{
		return $this->__get('OwnershipForm');
	}

	public function setOwnershipForm($ownershipForm)
	{
		$this->__set('OwnershipForm', $ownershipForm);
	}

	public function getOwnershipFormDescription()
	{
		return $this->__get('OwnershipFormDescription');
	}

	public function setOwnershipFormDescription($ownershipFormDescription)
	{
		$this->__set('OwnershipFormDescription', $ownershipFormDescription);
	}

	public function getEDRPOU()
	{
		return $this->__get('EDRPOU');
	}

	public function setEDRPOU($EDRPOU)
	{
		$this->__set('EDRPOU', $EDRPOU);
	}

	public function getCounterpartyType()
	{
		return $this->__get('CounterpartyType');
	}

	public function setCounterpartyType($counterpartyType)
	{
		$this->__set('CounterpartyType', $counterpartyType);
	}

	public function getContactPerson()
	{
		return $this->__get('ContactPerson');
	}

	public function setContactPerson($contactPerson)
	{
		if ( in_array($contactPerson['success'], ['true', true]) ) {

			$data = $contactPerson['data'][0];

			$this->__set('ContactPerson', new ContactPerson ( $data ));
		}
	}
}
