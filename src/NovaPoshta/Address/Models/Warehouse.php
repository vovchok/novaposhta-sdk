<?php

namespace NovaPoshta\Address\Models;

class Warehouse
{
    protected $siteKey;
    protected $description;
    protected $descriptionRu;
    protected $phone;
    protected $typeOfWarehouse;
    protected $ref;
    protected $number;
    protected $cityRef;
    protected $cityDescription;
    protected $cityDescriptionRu;
    protected $longitude;
    protected $latitude;
    protected $totalMaxWeightAllowed;
    protected $placeMaxWeightAllowed;
    protected $reception;
    protected $delivery;
    protected $schedule;

    public function __construct(
        $siteKey,
        $description,
        $descriptionRu,
        $phone,
        $typeOfWarehouse,
        $ref,
        $number,
        $cityRef,
        $cityDescription,
        $cityDescriptionRu,
        $longitude,
        $latitude,
        $totalMaxWeightAllowed,
        $placeMaxWeightAllowed,
        $reception,
        $delivery,
        $schedule)
    {
        $this->siteKey = $siteKey;
        $this->description = $description;
        $this->descriptionRu = $descriptionRu;
        $this->phone = $phone;
        $this->typeOfWarehouse = $typeOfWarehouse;
        $this->ref = $ref;
        $this->number = $number;
        $this->cityRef = $cityRef;
        $this->cityDescription = $cityDescription;
        $this->cityDescriptionRu = $cityDescriptionRu;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->totalMaxWeightAllowed = $totalMaxWeightAllowed;
        $this->placeMaxWeightAllowed = $placeMaxWeightAllowed;
        $this->reception = $reception;
        $this->delivery = $delivery;
        $this->schedule = $schedule;
    }

    public function setSiteKey($siteKey)
    {
        $this->siteKey = $siteKey;
    }

    public function getSiteKey()
    {
        return $this->siteKey;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescriptionRu($descriptionRu)
    {
        $this->descriptionRu = $descriptionRu;
    }

    public function getDescriptionRu()
    {
        return $this->descriptionRu;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setTypeOfWarehouse($typeOfWarehouse)
    {
        $this->typeOfWarehouse = $typeOfWarehouse;
    }

    public function getTypeOfWarehouse()
    {
        return $this->typeOfWarehouse;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setCityRef($cityRef)
    {
        $this->cityRef = $cityRef;
    }

    public function getCityRef()
    {
        return $this->cityRef;
    }

    public function setCityDescription($cityDescription)
    {
        $this->cityDescription = $cityDescription;
    }

    public function getCityDescription()
    {
        return $this->cityDescription;
    }

    public function setCityDescriptionRu($cityDescriptionRu)
    {
        $this->cityDescriptionRu = $cityDescriptionRu;
    }

    public function getCityDescriptionRu()
    {
        return $this->cityDescriptionRu;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setTotalMaxWeightAllowed($totalMaxWeightAllowed)
    {
        $this->totalMaxWeightAllowed = $totalMaxWeightAllowed;
    }

    public function getTotalMaxWeightAllowed()
    {
        return $this->totalMaxWeightAllowed;
    }

    public function setPlaceMaxWeightAllowed($placeMaxWeightAllowed)
    {
        $this->placeMaxWeightAllowed = $placeMaxWeightAllowed;
    }

    public function getPlaceMaxWeightAllowed()
    {
        return $this->placeMaxWeightAllowed;
    }

    public function setReception($reception)
    {
        $this->reception = $reception;
    }

    public function getReception()
    {
        return $this->reception;
    }

    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }

    public function getSchedule()
    {
        return $this->schedule;
    }
}
