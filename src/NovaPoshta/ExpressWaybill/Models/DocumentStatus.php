<?php

namespace NovaPoshta\ExpressWaybill\Models;

use NovaPoshta\Models\Model;

class DocumentStatus extends Model
{
    public function getNumber()
    {
        return $this->__get('Number');
    }

    public function setNumber($Number)
    {
        $this->__set('Number', $Number);
    }

    public function getDateCreated()
    {
        return $this->__get('DateCreated');
    }

    public function setDateCreated($DateCreated)
    {
        $this->__set('DateCreated', $DateCreated);
    }

    public function getDocumentWeight()
    {
        return $this->__get('DocumentWeight');
    }

    public function setDocumentWeight($DocumentWeight)
    {
        $this->__set('DocumentWeight', $DocumentWeight);
    }

    public function getCheckWeight()
    {
        return $this->__get('CheckWeight');
    }

    public function setCheckWeight($CheckWeight)
    {
        $this->__set('CheckWeight', $CheckWeight);
    }

    public function getDocumentCost()
    {
        return $this->__get('DocumentCost');
    }

    public function setDocumentCost($DocumentCost)
    {
        $this->__set('DocumentCost', $DocumentCost);
    }

    public function getSumBeforeCheckWeight()
    {
        return $this->__get('SumBeforeCheckWeight');
    }

    public function setSumBeforeCheckWeight($SumBeforeCheckWeight)
    {
        $this->__set('SumBeforeCheckWeight', $SumBeforeCheckWeight);
    }

    public function getPayerType()
    {
        return $this->__get('PayerType');
    }

    public function setPayerType($PayerType)
    {
        $this->__set('PayerType', $PayerType);
    }

    public function getRecipientFullName()
    {
        return $this->__get('RecipientFullName');
    }

    public function setRecipientFullName($RecipientFullName)
    {
        $this->__set('RecipientFullName', $RecipientFullName);
    }

    public function getRecipientDateTime()
    {
        return $this->__get('RecipientDateTime');
    }

    public function setRecipientDateTime($RecipientDateTime)
    {
        $this->__set('RecipientDateTime', $RecipientDateTime);
    }

    public function getOwnerDocumentType()
    {
        return $this->__get('OwnerDocumentType');
    }

    public function setOwnerDocumentType($OwnerDocumentType)
    {
        $this->__set('OwnerDocumentType', $OwnerDocumentType);
    }

    public function getScheduledDeliveryDate()
    {
        return $this->__get('ScheduledDeliveryDate');
    }

    public function setScheduledDeliveryDate($ScheduledDeliveryDate)
    {
        $this->__set('ScheduledDeliveryDate', $ScheduledDeliveryDate);
    }

    public function getPaymentMethod()
    {
        return $this->__get('PaymentMethod');
    }

    public function setPaymentMethod($PaymentMethod)
    {
        $this->__set('PaymentMethod', $PaymentMethod);
    }

    public function getCargoDescriptionString()
    {
        return $this->__get('CargoDescriptionString');
    }

    public function setCargoDescriptionString($CargoDescriptionString)
    {
        $this->__set('CargoDescriptionString', $CargoDescriptionString);
    }

    public function getCargoType()
    {
        return $this->__get('CargoType');
    }

    public function setCargoType($CargoType)
    {
        $this->__set('CargoType', $CargoType);
    }

    public function getCitySender()
    {
        return $this->__get('CitySender');
    }

    public function setCitySender($CitySender)
    {
        $this->__set('CitySender', $CitySender);
    }

    public function getCityRecipient()
    {
        return $this->__get('CityRecipient');
    }

    public function setCityRecipient($CityRecipient)
    {
        $this->__set('CityRecipient', $CityRecipient);
    }

    public function getWarehouseRecipient()
    {
        return $this->__get('WarehouseRecipient');
    }

    public function setWarehouseRecipient($WarehouseRecipient)
    {
        $this->__set('WarehouseRecipient', $WarehouseRecipient);
    }

    public function getCounterpartyType()
    {
        return $this->__get('CounterpartyType');
    }

    public function setCounterpartyType($CounterpartyType)
    {
        $this->__set('CounterpartyType', $CounterpartyType);
    }

    public function getRedelivery()
    {
        return $this->__get('Redelivery');
    }

    public function setRedelivery($Redelivery)
    {
        $this->__set('Redelivery', $Redelivery);
    }

    public function getRedeliverySum()
    {
        return $this->__get('RedeliverySum');
    }

    public function setRedeliverySum($RedeliverySum)
    {
        $this->__set('RedeliverySum', $RedeliverySum);
    }

    public function getRedeliveryNum()
    {
        return $this->__get('RedeliveryNum');
    }

    public function setRedeliveryNum($RedeliveryNum)
    {
        $this->__set('RedeliveryNum', $RedeliveryNum);
    }

    public function getRedeliveryPayer()
    {
        return $this->__get('RedeliveryPayer');
    }

    public function setRedeliveryPayer($RedeliveryPayer)
    {
        $this->__set('RedeliveryPayer', $RedeliveryPayer);
    }

    public function getAfterpaymentOnGoodsCost()
    {
        return $this->__get('AfterpaymentOnGoodsCost');
    }

    public function setAfterpaymentOnGoodsCost($AfterpaymentOnGoodsCost)
    {
        $this->__set('AfterpaymentOnGoodsCost', $AfterpaymentOnGoodsCost);
    }

    public function getServiceType()
    {
        return $this->__get('ServiceType');
    }

    public function setServiceType($ServiceType)
    {
        $this->__set('ServiceType', $ServiceType);
    }

    public function getUndeliveryReasonsSubtypeDescription()
    {
        return $this->__get('UndeliveryReasonsSubtypeDescription');
    }

    public function setUndeliveryReasonsSubtypeDescription($UndeliveryReasonsSubtypeDescription)
    {
        $this->__set('UndeliveryReasonsSubtypeDescription', $UndeliveryReasonsSubtypeDescription);
    }

    public function getWarehouseRecipientNumber()
    {
        return $this->__get('WarehouseRecipientNumber');
    }

    public function setWarehouseRecipientNumber($WarehouseRecipientNumber)
    {
        $this->__set('WarehouseRecipientNumber', $WarehouseRecipientNumber);
    }

    public function getLastCreatedOnTheBasisNumber()
    {
        return $this->__get('LastCreatedOnTheBasisNumber');
    }

    public function setLastCreatedOnTheBasisNumber($LastCreatedOnTheBasisNumber)
    {
        $this->__set('LastCreatedOnTheBasisNumber', $LastCreatedOnTheBasisNumber);
    }

    public function getLastCreatedOnTheBasisDocumentType()
    {
        return $this->__get('LastCreatedOnTheBasisDocumentType');
    }

    public function setLastCreatedOnTheBasisDocumentType($LastCreatedOnTheBasisDocumentType)
    {
        $this->__set('LastCreatedOnTheBasisDocumentType', $LastCreatedOnTheBasisDocumentType);
    }

    public function getLastCreatedOnTheBasisPayerType()
    {
        return $this->__get('LastCreatedOnTheBasisPayerType');
    }

    public function setLastCreatedOnTheBasisPayerType($LastCreatedOnTheBasisPayerType)
    {
        $this->__set('LastCreatedOnTheBasisPayerType', $LastCreatedOnTheBasisPayerType);
    }

    public function getLastCreatedOnTheBasisDateTime()
    {
        return $this->__get('LastCreatedOnTheBasisDateTime');
    }

    public function setLastCreatedOnTheBasisDateTime($LastCreatedOnTheBasisDateTime)
    {
        $this->__set('LastCreatedOnTheBasisDateTime', $LastCreatedOnTheBasisDateTime);
    }

    public function getLastTransactionStatusGM()
    {
        return $this->__get('LastTransactionStatusGM');
    }

    public function setLastTransactionStatusGM($LastTransactionStatusGM)
    {
        $this->__set('LastTransactionStatusGM', $LastTransactionStatusGM);
    }

    public function getPhoneRecipient()
    {
        return $this->__get('PhoneRecipient');
    }

    public function setPhoneRecipient($PhoneRecipient)
    {
        $this->__set('PhoneRecipient', $PhoneRecipient);
    }

    public function getRecipientFullNameEW()
    {
        return $this->__get('RecipientFullNameEW');
    }

    public function setRecipientFullNameEW($RecipientFullNameEW)
    {
        $this->__set('RecipientFullNameEW', $RecipientFullNameEW);
    }

    public function getWarehouseRecipientInternetAddressRef()
    {
        return $this->__get('WarehouseRecipientInternetAddressRef');
    }

    public function setWarehouseRecipientInternetAddressRef($WarehouseRecipientInternetAddressRef)
    {
        $this->__set('WarehouseRecipientInternetAddressRef', $WarehouseRecipientInternetAddressRef);
    }

    public function getMarketplacePartnerToken()
    {
        return $this->__get('MarketplacePartnerToken');
    }

    public function setMarketplacePartnerToken($MarketplacePartnerToken)
    {
        $this->__set('MarketplacePartnerToken', $MarketplacePartnerToken);
    }

    public function getClientBarcode()
    {
        return $this->__get('ClientBarcode');
    }

    public function setClientBarcode($ClientBarcode)
    {
        $this->__set('ClientBarcode', $ClientBarcode);
    }

    public function getRecipientAddress()
    {
        return $this->__get('RecipientAddress');
    }

    public function setRecipientAddress($RecipientAddress)
    {
        $this->__set('RecipientAddress', $RecipientAddress);
    }

    public function getCounterpartyRecipientDescription()
    {
        return $this->__get('CounterpartyRecipientDescription');
    }

    public function setCounterpartyRecipientDescription($CounterpartyRecipientDescription)
    {
        $this->__set('CounterpartyRecipientDescription', $CounterpartyRecipientDescription);
    }

    public function getCounterpartySenderType()
    {
        return $this->__get('CounterpartySenderType');
    }

    public function setCounterpartySenderType($CounterpartySenderType)
    {
        $this->__set('CounterpartySenderType', $CounterpartySenderType);
    }

    public function getDateScan()
    {
        return $this->__get('DateScan');
    }

    public function setDateScan($DateScan)
    {
        $this->__set('DateScan', $DateScan);
    }

    public function getStatus()
    {
        return $this->__get('Status');
    }

    public function setStatus($Status)
    {
        $this->__set('Status', $Status);
    }

    public function getStatusCode()
    {
        return $this->__get('StatusCode');
    }

    public function setStatusCode($StatusCode)
    {
        $this->__set('StatusCode', $StatusCode);
    }

    public function getRefEW()
    {
        return $this->__get('RefEW');
    }

    public function setRefEW($RefEW)
    {
        $this->__set('RefEW', $RefEW);
    }

    public function getBackwardDeliverySubTypesServices()
    {
        return $this->__get('BackwardDeliverySubTypesServices');
    }

    public function setBackwardDeliverySubTypesServices($BackwardDeliverySubTypesServices)
    {
        $this->__set('BackwardDeliverySubTypesServices', $BackwardDeliverySubTypesServices);
    }

    public function getBackwardDeliverySubTypesActions()
    {
        return $this->__get('BackwardDeliverySubTypesActions');
    }

    public function setBackwardDeliverySubTypesActions($BackwardDeliverySubTypesActions)
    {
        $this->__set('BackwardDeliverySubTypesActions', $BackwardDeliverySubTypesActions);
    }

    public function getUndeliveryReasons()
    {
        return $this->__get('UndeliveryReasons');
    }

    public function setUndeliveryReasons($UndeliveryReasons)
    {
        $this->__set('UndeliveryReasons', $UndeliveryReasons);
    }
}
