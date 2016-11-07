<?php

namespace NovaPoshta\Address\Models;

class Settlement
{
    protected $ref;
    protected $settlementType;
    protected $latitude;
    protected $longitude;
    protected $description;
    protected $descriptionRu;
    protected $settlementTypeDescription;
    protected $settlementTypeDescriptionRu;
    protected $region;
    protected $regionsDescription;
    protected $regionsDescriptionRu;
    protected $area;
    protected $areaDescription;
    protected $areaDescriptionRu;
    protected $index1;
    protected $index2;
    protected $delivery1;
    protected $delivery2;
    protected $delivery3;
    protected $delivery4;
    protected $delivery5;
    protected $delivery6;
    protected $delivery7;

    public function __construct(
        $ref,
        $settlementType,
        $latitude,
        $longitude,
        $description,
        $descriptionRu,
        $settlementTypeDescription,
        $settlementTypeDescriptionRu,
        $region,
        $regionsDescription,
        $regionsDescriptionRu,
        $area,
        $areaDescription,
        $areaDescriptionRu,
        $index1,
        $index2,
        $delivery1,
        $delivery2,
        $delivery3,
        $delivery4,
        $delivery5,
        $delivery6,
        $delivery7)
    {
        $this->ref = $ref;
        $this->settlementType = $settlementType;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->description = $description;
        $this->descriptionRu = $descriptionRu;
        $this->settlementTypeDescription = $settlementTypeDescription;
        $this->settlementTypeDescriptionRu = $settlementTypeDescriptionRu;
        $this->region = $region;
        $this->regionsDescription = $regionsDescription;
        $this->regionsDescriptionRu = $regionsDescriptionRu;
        $this->area = $area;
        $this->areaDescription = $areaDescription;
        $this->areaDescriptionRu = $areaDescriptionRu;
        $this->index1 = $index1;
        $this->index2 = $index2;
        $this->delivery1 = $delivery1;
        $this->delivery2 = $delivery2;
        $this->delivery3 = $delivery3;
        $this->delivery4 = $delivery4;
        $this->delivery5 = $delivery5;
        $this->delivery6 = $delivery6;
        $this->delivery7 = $delivery7;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setSettlementType($settlementType)
    {
        $this->settlementType = $settlementType;
    }

    public function getSettlementType()
    {
        return $this->settlementType;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
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

    public function setSettlementTypeDescription($settlementTypeDescription)
    {
        $this->settlementTypeDescription = $settlementTypeDescription;
    }

    public function getSettlementTypeDescription()
    {
        return $this->settlementTypeDescription;
    }

    public function setSettlementTypeDescriptionRu($settlementTypeDescriptionRu)
    {
        $this->settlementTypeDescriptionRu = $settlementTypeDescriptionRu;
    }

    public function getSettlementTypeDescriptionRu()
    {
        return $this->settlementTypeDescriptionRu;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegionsDescription($regionsDescription)
    {
        $this->regionsDescription = $regionsDescription;
    }

    public function getRegionsDescription()
    {
        return $this->regionsDescription;
    }

    public function setRegionsDescriptionRu($regionsDescriptionRu)
    {
        $this->regionsDescriptionRu = $regionsDescriptionRu;
    }

    public function getRegionsDescriptionRu()
    {
        return $this->regionsDescriptionRu;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setAreaDescription($areaDescription)
    {
        $this->areaDescription = $areaDescription;
    }

    public function getAreaDescription()
    {
        return $this->areaDescription;
    }

    public function setAreaDescriptionRu($areaDescriptionRu)
    {
        $this->areaDescriptionRu = $areaDescriptionRu;
    }

    public function getAreaDescriptionRu()
    {
        return $this->areaDescriptionRu;
    }

    public function setIndex1($index1)
    {
        $this->index1 = $index1;
    }

    public function getIndex1()
    {
        return $this->index1;
    }

    public function setIndex2($index2)
    {
        $this->index2 = $index2;
    }

    public function getIndex2()
    {
        return $this->index2;
    }

    public function setDelivery1($delivery1)
    {
        $this->delivery1 = $delivery1;
    }

    public function getDelivery1()
    {
        return $this->delivery1;
    }

    public function setDelivery2($delivery2)
    {
        $this->delivery2 = $delivery2;
    }

    public function getDelivery2()
    {
        return $this->delivery2;
    }

    public function setDelivery3($delivery3)
    {
        $this->delivery3 = $delivery3;
    }

    public function getDelivery3()
    {
        return $this->delivery3;
    }

    public function setDelivery4($delivery4)
    {
        $this->delivery4 = $delivery4;
    }

    public function getDelivery4()
    {
        return $this->delivery4;
    }

    public function setDelivery5($delivery5)
    {
        $this->delivery5 = $delivery5;
    }

    public function getDelivery5()
    {
        return $this->delivery5;
    }

    public function setDelivery6($delivery6)
    {
        $this->delivery6 = $delivery6;
    }

    public function getDelivery6()
    {
        return $this->delivery6;
    }

    public function setDelivery7($delivery7)
    {
        $this->delivery7 = $delivery7;
    }

    public function getDelivery7()
    {
        return $this->delivery7;
    }
}
