<?php

namespace NovaPoshta\Registries\Models;

use NovaPoshta\Models\Model;

class ScanSheetItem extends Model
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

    public function setPrinted($printed)
    {
        $this->__set('Printed', $printed);
    }

    public function getPrinted()
    {
        return $this->__get('Printed');
    }
}
