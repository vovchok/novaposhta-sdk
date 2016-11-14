<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\MethodProperties;

class ServicesMethodProperties extends MethodProperties
{
    const USER_DONT_GIVE_DOC = 'UserDontGiveDoc';
    const USER_CALL_SENDER = 'UserCallSender';

    public function getAttorney()
    {
        return $this->__get('Attorney');
    }

    public function setAttorney($Attorney)
    {
        $this->__set('Attorney', $Attorney);
    }

    public function getWaybillNewPostWithStamp()
    {
        return $this->__get('WaybillNewPostWithStamp');
    }

    public function setWaybillNewPostWithStamp($WaybillNewPostWithStamp)
    {
        $this->__set('WaybillNewPostWithStamp', $WaybillNewPostWithStamp);
    }

    public function getWaybillNewPostWithoutStamp()
    {
        return $this->__get('WaybillNewPostWithoutStamp');
    }

    public function setWaybillNewPostWithoutStamp($WaybillNewPostWithoutStamp)
    {
        $this->__set('WaybillNewPostWithoutStamp', $WaybillNewPostWithoutStamp);
    }

    public function getWaybillStateNumber1WithoutStamp()
    {
        return $this->__get('WaybillStateNumber1WithoutStamp');
    }

    public function setWaybillStateNumber1WithoutStamp($WaybillStateNumber1WithoutStamp)
    {
        $this->__set('WaybillStateNumber1WithoutStamp', $WaybillStateNumber1WithoutStamp);
    }

    public function getWaybillStateNumber1WithStamp()
    {
        return $this->__get('WaybillStateNumber1WithStamp');
    }

    public function setWaybillStateNumber1WithStamp($WaybillStateNumber1WithStamp)
    {
        $this->__set('WaybillStateNumber1WithStamp', $WaybillStateNumber1WithStamp);
    }

    public function getCostWaybillWithoutStamp()
    {
        return $this->__get('CostWaybillWithoutStamp');
    }

    public function setCostWaybillWithoutStamp($CostWaybillWithoutStamp)
    {
        $this->__set('CostWaybillWithoutStamp', $CostWaybillWithoutStamp);
    }

    public function getCostWaybillWithStamp()
    {
        return $this->__get('CostWaybillWithStamp');
    }

    public function setCostWaybillWithStamp($CostWaybillWithStamp)
    {
        $this->__set('CostWaybillWithStamp', $CostWaybillWithStamp);
    }

    public function getInternationalWaybill()
    {
        return $this->__get('InternationalWaybill');
    }

    public function setInternationalWaybill($InternationalWaybill)
    {
        $this->__set('InternationalWaybill', $InternationalWaybill);
    }

    public function getOrderForm()
    {
        return $this->__get('OrderForm');
    }

    public function setOrderForm($OrderForm)
    {
        $this->__set('OrderForm', $OrderForm);
    }

    public function getAktPPVWithStamp()
    {
        return $this->__get('AktPPVWithStamp');
    }

    public function setAktPPVWithStamp($AktPPVWithStamp)
    {
        $this->__set('AktPPVWithStamp', $AktPPVWithStamp);
    }

    public function getAktPPVWithoutStamp()
    {
        return $this->__get('AktPPVWithoutStamp');
    }

    public function setAktPPVWithoutStamp($AktPPVWithoutStamp)
    {
        $this->__set('AktPPVWithoutStamp', $AktPPVWithoutStamp);
    }

    public function getUserActions()
    {
        return $this->__get('UserActions');
    }

    public function setUserActions($UserActions)
    {
        $this->__set('UserActions', $UserActions);
    }
}
