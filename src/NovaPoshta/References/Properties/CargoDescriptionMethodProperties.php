<?php

namespace NovaPoshta\References\Properties;

use NovaPoshta\Properties\MethodProperties;

class CargoDescriptionMethodProperties extends MethodProperties
{
    public function setFindByString($findByString)
    {
        $this->__set('FindByString', $findByString);
    }

    public function getFindByString()
    {
        $this->__get('FindByString');
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
