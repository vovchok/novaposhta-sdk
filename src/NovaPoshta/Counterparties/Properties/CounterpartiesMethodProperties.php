<?php

namespace NovaPoshta\Counterparties\Properties;

use NovaPoshta\Properties\MethodProperties;

class CounterpartiesMethodProperties extends MethodProperties
{
    public function setCounterpartyProperty($counterpartyProperty)
    {
        $this->__set('CounterpartyProperty', $counterpartyProperty);
    }

    public function getCounterpartyProperty()
    {
        $this->__get('CounterpartyProperty');
    }

    public function setPage($page)
    {
        $this->__set('Page', $page);
    }

    public function getPage()
    {
        $this->__get('Page');
    }
}
