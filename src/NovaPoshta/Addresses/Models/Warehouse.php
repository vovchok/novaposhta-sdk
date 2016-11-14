<?php

namespace NovaPoshta\Addresses\Models;

use NovaPoshta\Model;

class Warehouse extends Model
{
    public function setSiteKey($siteKey)
    {
        $this->__set('SiteKey', $siteKey);
    }

    public function getSiteKey()
    {
        return $this->__get('SiteKey');
    }

    public function setDescription($description)
    {
        $this->__set('Description', $description);
    }

    public function getDescription()
    {
        return $this->__get('Description');
    }

    public function setDescriptionRu($descriptionRu)
    {
        $this->__set('DescriptionRu', $descriptionRu);
    }

    public function getDescriptionRu()
    {
        return $this->__get('DescriptionRu');
    }

    public function setPhone($phone)
    {
        $this->__set('Phone', $phone);
    }

    public function getPhone()
    {
        return $this->__get('Phone');
    }

    public function setTypeOfWarehouse($typeOfWarehouse)
    {
        $this->__set('TypeOfWarehouse', $typeOfWarehouse);
    }

    public function getTypeOfWarehouse()
    {
        return $this->__get('TypeOfWarehouse');
    }

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

    public function setCityRef($cityRef)
    {
        $this->__set('CityRef', $cityRef);
    }

    public function getCityRef()
    {
        return $this->__get('CityRef');
    }

    public function setCityDescription($cityDescription)
    {
        $this->__set('CityDescription', $cityDescription);
    }

    public function getCityDescription()
    {
        return $this->__get('CityDescription');
    }

    public function setCityDescriptionRu($cityDescriptionRu)
    {
        $this->__set('CityDescriptionRu', $cityDescriptionRu);
    }

    public function getCityDescriptionRu()
    {
        return $this->__get('CityDescriptionRu');
    }

    public function setLongitude($longitude)
    {
        $this->__set('Longitude', $longitude);
    }

    public function getLongitude()
    {
        return $this->__get('Longitude');
    }

    public function setLatitude($latitude)
    {
        $this->__set('Latitude', $latitude);
    }

    public function getLatitude()
    {
        return $this->__get('Latitude');
    }

    public function setTotalMaxWeightAllowed($totalMaxWeightAllowed)
    {
        $this->__set('TotalMaxWeightAllowed', $totalMaxWeightAllowed);
    }

    public function getTotalMaxWeightAllowed()
    {
        return $this->__get('TotalMaxWeightAllowed');
    }

    public function setPlaceMaxWeightAllowed($placeMaxWeightAllowed)
    {
        $this->__set('PlaceMaxWeightAllowed', $placeMaxWeightAllowed);
    }

    public function getPlaceMaxWeightAllowed()
    {
        return $this->__get('PlaceMaxWeightAllowed');
    }

    public function setReception($reception)
    {
        $this->__set('Reception', $reception);
    }

    public function getReception()
    {
        return $this->__get('Reception');
    }

    public function setDelivery($delivery)
    {
        $this->__set('Delivery', $delivery);
    }

    public function getDelivery()
    {
        return $this->__get('Delivery');
    }

    public function setSchedule($schedule)
    {
        $this->__set('Schedule', $schedule);
    }

    public function getSchedule()
    {
        return $this->__get('Schedule');
    }
}
