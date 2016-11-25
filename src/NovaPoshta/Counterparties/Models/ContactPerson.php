<?php

namespace NovaPoshta\Counterparties\Models;

use NovaPoshta\Model;

class ContactPerson extends Model
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

	public function getLastName()
	{
		return $this->__get('LastName');
	}

	public function setLastName($lastName)
	{
		$this->__set('LastName', $lastName);
	}

	public function getMiddleName()
	{
		return $this->__get('MiddleName');
	}

	public function setMiddleName($middleName)
	{
		$this->__set('MiddleName', $middleName);
	}

	public function getPhones()
	{
		return $this->__get('Phones');
	}

	public function setPhones($phones)
	{
		$this->__set('Phones', $phones);
	}

	public function getEmail()
	{
		return $this->__get('Email');
	}

	public function setEmail($email)
	{
		$this->__set('Email', $email);
	}
}
