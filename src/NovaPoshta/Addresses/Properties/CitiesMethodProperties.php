<?php

namespace NovaPoshta\Addresses\Properties;

use NovaPoshta\Properties\MethodProperties;

class CitiesMethodProperties extends MethodProperties
{
    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        $this->__get('Ref');
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
