<?php

namespace NovaPoshta\Addresses\Models;

use NovaPoshta\Models\Model;

class City extends Model
{
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

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setDelivery1($delivery1)
    {
        $this->__set('Delivery1', $delivery1);
    }

    public function getDelivery1()
    {
        return $this->__get('Delivery1');
    }

    public function setDelivery2($delivery2)
    {
        $this->__set('Delivery2', $delivery2);
    }

    public function getDelivery2()
    {
        return $this->__get('Delivery2');
    }

    public function setDelivery3($delivery3)
    {
        $this->__set('Delivery3', $delivery3);
    }

    public function getDelivery3()
    {
        return $this->__get('Delivery3');
    }

    public function setDelivery4($delivery4)
    {
        $this->__set('Delivery4', $delivery4);
    }

    public function getDelivery4()
    {
        return $this->__get('Delivery4');
    }

    public function setDelivery5($delivery5)
    {
        $this->__set('Delivery5', $delivery5);
    }

    public function getDelivery5()
    {
        return $this->__get('Delivery5');
    }

    public function setDelivery6($delivery6)
    {
        $this->__set('Delivery6', $delivery6);
    }

    public function getDelivery6()
    {
        return $this->__get('Delivery6');
    }

    public function setDelivery7($delivery7)
    {
        $this->__set('Delivery7', $delivery7);
    }

    public function getDelivery7()
    {
        return $this->__get('Delivery7');
    }

    public function setArea($area)
    {
        $this->__set('Area', $area);
    }

    public function getArea()
    {
        return $this->__get('Area');
    }

    public function setConglomerates($conglomerates)
    {
        $this->__set('Conglomerates', $conglomerates);
    }

    public function getConglomerates()
    {
        return $this->__get('Conglomerates');
    }
}
