<?php

namespace NovaPoshta\Counterparties\Properties;

use NovaPoshta\MethodProperties;

class ContactPersonMethodProperties extends MethodProperties
{
    public function setCounterpartyRef($CounterpartyRef)
    {
        $this->__set('CounterpartyRef', $CounterpartyRef);
    }

    public function getCounterpartyRef()
    {
        $this->__get('CounterpartyRef');
    }

    public function setFirstName($firstName)
    {
        $this->__set('FirstName', $firstName);
    }

    public function getFirstName()
    {
        $this->__get('FirstName');
    }

    public function setMiddleName($middleName)
    {
        $this->__set('MiddleName', $middleName);
    }

    public function getMiddleName()
    {
        $this->__get('MiddleName');
    }

    public function setLastName($lastName)
    {
        $this->__set('LastName', $lastName);
    }

    public function getLastName()
    {
        $this->__get('LastName');
    }

    public function setPhone($phone)
    {
        $this->__set('Phone', $phone);
    }

    public function getPhone()
    {
        $this->__get('Phone');
    }
}
