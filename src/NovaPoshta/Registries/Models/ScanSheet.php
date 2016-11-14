<?php

namespace NovaPoshta\Registries\Models;

use NovaPoshta\Model;

class ScanSheet extends Model
{
    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setNumber($number)
    {
        $this->__set('Number', $number);
    }

    public function getNumber()
    {
        return $this->__get('Number');
    }

    public function setDateTime($dateTime)
    {
        $this->__set('DateTime', $dateTime);
    }

    public function getDateTime()
    {
        return $this->__get('DateTime');
    }

    public function setCount($count)
    {
        $this->__set('Count', $count);
    }

    public function getCount()
    {
        return $this->__get('Count');
    }

    public function setCitySenderRef($citySenderRef)
    {
        $this->__set('CitySenderRef', $citySenderRef);
    }

    public function getCitySenderRef()
    {
        return $this->__get('CitySenderRef');
    }

    public function setCitySender($citySender)
    {
        $this->__set('CitySender', $citySender);
    }

    public function getCitySender()
    {
        return $this->__get('CitySender');
    }

    public function setSenderAddressRef($senderAddressRef)
    {
        $this->__set('SenderAddressRef', $senderAddressRef);
    }

    public function getSenderAddressRef()
    {
        return $this->__get('SenderAddressRef');
    }

    public function setSenderRef($senderRef)
    {
        $this->__set('SenderRef', $senderRef);
    }

    public function getSenderRef()
    {
        return $this->__get('SenderRef');
    }

    public function setSender($sender)
    {
        $this->__set('Sender', $sender);
    }

    public function getSender()
    {
        return $this->__get('Sender');
    }
}
