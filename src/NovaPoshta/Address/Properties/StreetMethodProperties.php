<?php

namespace NovaPoshta\Address\Properties;

use NovaPoshta\Properties\MethodProperties;

class StreetMethodProperties extends MethodProperties
{
    public function setCityRef($cityRef)
    {
        $this->__set('CityRef', $cityRef);
    }

    public function getCityRef()
    {
        $this->__get('CityRef');
    }

    public function setPage($page)
    {
        $this->__set('Page', $page);
    }

    public function getPage()
    {
        $this->__get('Page');
    }

    public function setFindByString($findByString)
    {
        $this->__set('FindByString', $findByString);
    }

    public function getFindByString()
    {
        $this->__get('FindByString');
    }
}
