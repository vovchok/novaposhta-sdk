<?php

namespace NovaPoshta\Counterparties\Models;

use NovaPoshta\Models\Model;

class CounterpartyOption extends Model
{
    public function getCanPayTheThirdPerson()
    {
        return $this->__get('CanPayTheThirdPerson');
    }

    public function setCanPayTheThirdPerson($canPayTheThirdPerson)
    {
        $this->__set('CanPayTheThirdPerson', $canPayTheThirdPerson);
    }

    public function getCanAfterpaymentOnGoodsCost()
    {
        return $this->__get('CanAfterpaymentOnGoodsCost');
    }

    public function setCanAfterpaymentOnGoodsCost($canAfterpaymentOnGoodsCost)
    {
        $this->__set('CanAfterpaymentOnGoodsCost', $canAfterpaymentOnGoodsCost);
    }

    public function getCanNonCashPayment()
    {
        return $this->__get('CanNonCashPayment');
    }

    public function setCanNonCashPayment($canNonCashPayment)
    {
        $this->__set('CanNonCashPayment', $canNonCashPayment);
    }

    public function getCanCreditDocuments()
    {
        return $this->__get('CanCreditDocuments');
    }

    public function setCanCreditDocuments($canCreditDocuments)
    {
        $this->__set('CanCreditDocuments', $canCreditDocuments);
    }

    public function getHideDeliveryCost()
    {
        return $this->__get('HideDeliveryCost');
    }

    public function setHideDeliveryCost($hideDeliveryCost)
    {
        $this->__set('HideDeliveryCost', $hideDeliveryCost);
    }

    public function getCanSameDayDelivery()
    {
        return $this->__get('CanSameDayDelivery');
    }

    public function setCanSameDayDelivery($canSameDayDelivery)
    {
        $this->__set('CanSameDayDelivery', $canSameDayDelivery);
    }

    public function getCanForwardingService()
    {
        return $this->__get('CanForwardingService');
    }

    public function setCanForwardingService($canForwardingService)
    {
        $this->__set('CanForwardingService', $canForwardingService);
    }

    public function getDeliveryByHand()
    {
        return $this->__get('DeliveryByHand');
    }

    public function setDeliveryByHand($deliveryByHand)
    {
        $this->__set('DeliveryByHand', $deliveryByHand);
    }

    public function getDescentFromFloor()
    {
        return $this->__get('DescentFromFloor');
    }

    public function setDescentFromFloor($descentFromFloor)
    {
        $this->__set('DescentFromFloor', $descentFromFloor);
    }

    public function getBackDeliveryValuablePapers()
    {
        return $this->__get('BackDeliveryValuablePapers');
    }

    public function setBackDeliveryValuablePapers($backDeliveryValuablePapers)
    {
        $this->__set('BackDeliveryValuablePapers', $backDeliveryValuablePapers);
    }

    public function getBackwardDeliverySubtypesDocuments()
    {
        return $this->__get('BackwardDeliverySubtypesDocuments');
    }

    public function setBackwardDeliverySubtypesDocuments($backwardDeliverySubtypesDocuments)
    {
        $this->__set('BackwardDeliverySubtypesDocuments', $backwardDeliverySubtypesDocuments);
    }

    public function getAfterpaymentType()
    {
        return $this->__get('AfterpaymentType');
    }

    public function setAfterpaymentType($afterpaymentType)
    {
        $this->__set('AfterpaymentType', $afterpaymentType);
    }

    public function getHaveMoneyWallets()
    {
        return $this->__get('HaveMoneyWallets');
    }

    public function setHaveMoneyWallets($haveMoneyWallets)
    {
        $this->__set('HaveMoneyWallets', $haveMoneyWallets);
    }
}
