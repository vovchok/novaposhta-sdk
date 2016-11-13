<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\Properties\MethodProperties;

class DocumentMethodProperties extends MethodProperties
{
    public function getDocumentNumber()
    {
        return $this->__get('DocumentNumber');
    }

    public function setDocumentNumber($DocumentNumber)
    {
        $this->__set('DocumentNumber', $DocumentNumber);
    }

    public function getPhone()
    {
        return $this->__get('Phone');
    }

    public function setPhone($Phone)
    {
        $this->__set('Phone', $Phone);
    }
}
