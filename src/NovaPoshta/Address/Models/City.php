<?php

namespace NovaPoshta\Address\Models;

class City
{
    protected $description;
    protected $descriptionRu;
    protected $ref;
    protected $delivery1;
    protected $delivery2;
    protected $delivery3;
    protected $delivery4;
    protected $delivery5;
    protected $delivery6;
    protected $delivery7;
    protected $area;
    protected $conglomerates;

    public function __construct(
        $description,
        $descriptionRu,
        $ref,
        $delivery1,
        $delivery2,
        $delivery3,
        $delivery4,
        $delivery5,
        $delivery6,
        $delivery7,
        $area,
        $conglomerates)
    {
        $this->description = $description;
        $this->descriptionRu = $descriptionRu;
        $this->ref = $ref;

        $this->delivery1 = $delivery1;
        $this->delivery2 = $delivery2;
        $this->delivery3 = $delivery3;
        $this->delivery4 = $delivery4;
        $this->delivery5 = $delivery5;
        $this->delivery6 = $delivery6;

        $this->area = $area;

        $this->conglomerates = $conglomerates;
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

    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getRef()
    {
        return $this->ref;
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

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setConglomerates($conglomerates)
    {
        $this->conglomerates = $conglomerates;
    }

    public function getConglomerates()
    {
        return $this->conglomerates;
    }
}
