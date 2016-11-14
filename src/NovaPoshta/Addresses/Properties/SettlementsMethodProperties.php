<?php

namespace NovaPoshta\Addresses\Properties;

use NovaPoshta\MethodProperties;

class SettlementsMethodProperties extends MethodProperties
{
    public function setAreaRef($areaRef)
    {
        $this->__set('AreaRef', $areaRef);
    }

    public function getAreaRef()
    {
        $this->__get('AreaRef');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        $this->__get('Ref');
    }

    public function setMainCitiesOnly($mainCitiesOnly)
    {
        $this->__set('MainCitiesOnly', $mainCitiesOnly);
    }

    public function getMainCitiesOnly()
    {
        $this->__get('MainCitiesOnly');
    }

    public function setHideMainCities($hideMainCities)
    {
        $this->__set('HideMainCities', $hideMainCities);
    }

    public function getHideMainCities()
    {
        $this->__get('HideMainCities');
    }

    public function setRegionRef($regionRef)
    {
        $this->__set('RegionRef', $regionRef);
    }

    public function getRegionRef()
    {
        $this->__get('RegionRef');
    }

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
