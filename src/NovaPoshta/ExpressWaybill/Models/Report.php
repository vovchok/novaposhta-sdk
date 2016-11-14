<?php

namespace NovaPoshta\ExpressWaybill\Models;

use NovaPoshta\Model;

class Report extends Model
{
    public function getRef()
    {
        return $this->__get('Ref');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getDateTime()
    {
        return $this->__get('DateTime');
    }

    public function setDateTime($dateTime)
    {
        $this->__set('DateTime', $dateTime);
    }

    public function getPreferredDeliveryDate()
    {
        return $this->__get('PreferredDeliveryDate');
    }

    public function setPreferredDeliveryDate($preferredDeliveryDate)
    {
        $this->__set('PreferredDeliveryDate', $preferredDeliveryDate);
    }

    public function getWeight()
    {
        return $this->__get('Weight');
    }

    public function setWeight($weight)
    {
        $this->__set('Weight', $weight);
    }

    public function getSeatsAmount()
    {
        return $this->__get('SeatsAmount');
    }

    public function setSeatsAmount($seatsAmount)
    {
        $this->__set('SeatsAmount', $seatsAmount);
    }

    public function getIntDocNumber()
    {
        return $this->__get('IntDocNumber');
    }

    public function setIntDocNumber($intDocNumber)
    {
        $this->__set('IntDocNumber', $intDocNumber);
    }

    public function getCost()
    {
        return $this->__get('Cost');
    }

    public function setCost($cost)
    {
        $this->__set('Cost', $cost);
    }

    public function getCitySender()
    {
        return $this->__get('CitySender');
    }

    public function setCitySender($citySender)
    {
        $this->__set('CitySender', $citySender);
    }

    public function getCityRecipient()
    {
        return $this->__get('CityRecipient');
    }

    public function setCityRecipient($cityRecipient)
    {
        $this->__set('CityRecipient', $cityRecipient);
    }

    public function getState()
    {
        return $this->__get('State');
    }

    public function setState($state)
    {
        $this->__set('State', $state);
    }

    public function getSenderAddress()
    {
        return $this->__get('SenderAddress');
    }

    public function setSenderAddress($senderAddress)
    {
        $this->__set('SenderAddress', $senderAddress);
    }

    public function getRecipientAddress()
    {
        return $this->__get('RecipientAddress');
    }

    public function setRecipientAddress($recipientAddress)
    {
        $this->__set('RecipientAddress', $recipientAddress);
    }

    public function getCostOnSite()
    {
        return $this->__get('CostOnSite');
    }

    public function setCostOnSite($costOnSite)
    {
        $this->__set('CostOnSite', $costOnSite);
    }

    public function getPayerType()
    {
        return $this->__get('PayerType');
    }

    public function setPayerType($payerType)
    {
        $this->__set('PayerType', $payerType);
    }

    public function getPaymentMethod()
    {
        return $this->__get('PaymentMethod');
    }

    public function setPaymentMethod($paymentMethod)
    {
        $this->__set('PaymentMethod', $paymentMethod);
    }

    public function getAfterpaymentOnGoodsCost()
    {
        return $this->__get('AfterpaymentOnGoodsCost');
    }

    public function setAfterpaymentOnGoodsCost($afterpaymentOnGoodsCost)
    {
        $this->__set('AfterpaymentOnGoodsCost', $afterpaymentOnGoodsCost);
    }

    public function getPackingNumber()
    {
        return $this->__get('PackingNumber');
    }

    public function setPackingNumber($packingNumber)
    {
        $this->__set('PackingNumber', $packingNumber);
    }

    public function getNumber()
    {
        return $this->__get('Number');
    }

    public function setNumber($Number)
    {
        $this->__set('Number', $Number);
    }

    public function getPosted()
    {
        return $this->__get('Posted');
    }

    public function setPosted($Posted)
    {
        $this->__set('Posted', $Posted);
    }

    public function getDeletionMark()
    {
        return $this->__get('DeletionMark');
    }

    public function setDeletionMark($DeletionMark)
    {
        $this->__set('DeletionMark', $DeletionMark);
    }

    public function getCargoType()
    {
        return $this->__get('CargoType');
    }

    public function setCargoType($CargoType)
    {
        $this->__set('CargoType', $CargoType);
    }

    public function getRoute()
    {
        return $this->__get('Route');
    }

    public function setRoute($Route)
    {
        $this->__set('Route', $Route);
    }

    public function getEWNumber()
    {
        return $this->__get('EWNumber');
    }

    public function setEWNumber($EWNumber)
    {
        $this->__set('EWNumber', $EWNumber);
    }

    public function getDescription()
    {
        return $this->__get('Description');
    }

    public function setDescription($Description)
    {
        $this->__set('Description', $Description);
    }

    public function getSaturdayDelivery()
    {
        return $this->__get('SaturdayDelivery');
    }

    public function setSaturdayDelivery($SaturdayDelivery)
    {
        $this->__set('SaturdayDelivery', $SaturdayDelivery);
    }

    public function getExpressWaybill()
    {
        return $this->__get('ExpressWaybill');
    }

    public function setExpressWaybill($ExpressWaybill)
    {
        $this->__set('ExpressWaybill', $ExpressWaybill);
    }

    public function getCarCall()
    {
        return $this->__get('CarCall');
    }

    public function setCarCall($CarCall)
    {
        $this->__set('CarCall', $CarCall);
    }

    public function getServiceType()
    {
        return $this->__get('ServiceType');
    }

    public function setServiceType($ServiceType)
    {
        $this->__set('ServiceType', $ServiceType);
    }

    public function getDeliveryDateFrom()
    {
        return $this->__get('DeliveryDateFrom');
    }

    public function setDeliveryDateFrom($DeliveryDateFrom)
    {
        $this->__set('DeliveryDateFrom', $DeliveryDateFrom);
    }

    public function getVip()
    {
        return $this->__get('Vip');
    }

    public function setVip($Vip)
    {
        $this->__set('Vip', $Vip);
    }

    public function getAdditionalInformation()
    {
        return $this->__get('AdditionalInformation');
    }

    public function setAdditionalInformation($AdditionalInformation)
    {
        $this->__set('AdditionalInformation', $AdditionalInformation);
    }

    public function getLastModificationDate()
    {
        return $this->__get('LastModificationDate');
    }

    public function setLastModificationDate($LastModificationDate)
    {
        $this->__set('LastModificationDate', $LastModificationDate);
    }

    public function getReceiptDate()
    {
        return $this->__get('ReceiptDate');
    }

    public function setReceiptDate($ReceiptDate)
    {
        $this->__set('ReceiptDate', $ReceiptDate);
    }

    public function getLoyaltyCard()
    {
        return $this->__get('LoyaltyCard');
    }

    public function setLoyaltyCard($LoyaltyCard)
    {
        $this->__set('LoyaltyCard', $LoyaltyCard);
    }

    public function getSender()
    {
        return $this->__get('Sender');
    }

    public function setSender($Sender)
    {
        $this->__set('Sender', $Sender);
    }

    public function getContactSender()
    {
        return $this->__get('ContactSender');
    }

    public function setContactSender($ContactSender)
    {
        $this->__set('ContactSender', $ContactSender);
    }

    public function getSendersPhone()
    {
        return $this->__get('SendersPhone');
    }

    public function setSendersPhone($SendersPhone)
    {
        $this->__set('SendersPhone', $SendersPhone);
    }

    public function getRecipient()
    {
        return $this->__get('Recipient');
    }

    public function setRecipient($Recipient)
    {
        $this->__set('Recipient', $Recipient);
    }

    public function getContactRecipient()
    {
        return $this->__get('ContactRecipient');
    }

    public function setContactRecipient($ContactRecipient)
    {
        $this->__set('ContactRecipient', $ContactRecipient);
    }

    public function getRecipientsPhone()
    {
        return $this->__get('RecipientsPhone');
    }

    public function setRecipientsPhone($RecipientsPhone)
    {
        $this->__set('RecipientsPhone', $RecipientsPhone);
    }

    public function getRedelivery()
    {
        return $this->__get('Redelivery');
    }

    public function setRedelivery($Redelivery)
    {
        $this->__set('Redelivery', $Redelivery);
    }

    public function getSaturdayDeliveryString()
    {
        return $this->__get('SaturdayDeliveryString');
    }

    public function setSaturdayDeliveryString($SaturdayDeliveryString)
    {
        $this->__set('SaturdayDeliveryString', $SaturdayDeliveryString);
    }

    public function getNote()
    {
        return $this->__get('Note');
    }

    public function setNote($Note)
    {
        $this->__set('Note', $Note);
    }

    public function getThirdPerson()
    {
        return $this->__get('ThirdPerson');
    }

    public function setThirdPerson($ThirdPerson)
    {
        $this->__set('ThirdPerson', $ThirdPerson);
    }

    public function getForwarding()
    {
        return $this->__get('Forwarding');
    }

    public function setForwarding($Forwarding)
    {
        $this->__set('Forwarding', $Forwarding);
    }

    public function getNumberOfFloorsLifting()
    {
        return $this->__get('NumberOfFloorsLifting');
    }

    public function setNumberOfFloorsLifting($NumberOfFloorsLifting)
    {
        $this->__set('NumberOfFloorsLifting', $NumberOfFloorsLifting);
    }

    public function getStatementOfAcceptanceTransferCargoID()
    {
        return $this->__get('StatementOfAcceptanceTransferCargoID');
    }

    public function setStatementOfAcceptanceTransferCargoID($StatementOfAcceptanceTransferCargoID)
    {
        $this->__set('StatementOfAcceptanceTransferCargoID', $StatementOfAcceptanceTransferCargoID);
    }

    public function getStateId()
    {
        return $this->__get('StateId');
    }

    public function setStateId($StateId)
    {
        $this->__set('StateId', $StateId);
    }

    public function getStateName()
    {
        return $this->__get('StateName');
    }

    public function setStateName($StateName)
    {
        $this->__set('StateName', $StateName);
    }

    public function getRecipientFullName()
    {
        return $this->__get('RecipientFullName');
    }

    public function setRecipientFullName($RecipientFullName)
    {
        $this->__set('RecipientFullName', $RecipientFullName);
    }

    public function getRecipientPost()
    {
        return $this->__get('RecipientPost');
    }

    public function setRecipientPost($RecipientPost)
    {
        $this->__set('RecipientPost', $RecipientPost);
    }

    public function getRecipientDateTime()
    {
        return $this->__get('RecipientDateTime');
    }

    public function setRecipientDateTime($RecipientDateTime)
    {
        $this->__set('RecipientDateTime', $RecipientDateTime);
    }

    public function getRejectionReason()
    {
        return $this->__get('RejectionReason');
    }

    public function setRejectionReason($RejectionReason)
    {
        $this->__set('RejectionReason', $RejectionReason);
    }

    public function getCitySenderDescription()
    {
        return $this->__get('CitySenderDescription');
    }

    public function setCitySenderDescription($CitySenderDescription)
    {
        $this->__set('CitySenderDescription', $CitySenderDescription);
    }

    public function getCityRecipientDescription()
    {
        return $this->__get('CityRecipientDescription');
    }

    public function setCityRecipientDescription($CityRecipientDescription)
    {
        $this->__set('CityRecipientDescription', $CityRecipientDescription);
    }

    public function getSenderDescription()
    {
        return $this->__get('SenderDescription');
    }

    public function setSenderDescription($SenderDescription)
    {
        $this->__set('SenderDescription', $SenderDescription);
    }

    public function getRecipientDescription()
    {
        return $this->__get('RecipientDescription');
    }

    public function setRecipientDescription($RecipientDescription)
    {
        $this->__set('RecipientDescription', $RecipientDescription);
    }

    public function getRecipientContactPhone()
    {
        return $this->__get('RecipientContactPhone');
    }

    public function setRecipientContactPhone($RecipientContactPhone)
    {
        $this->__set('RecipientContactPhone', $RecipientContactPhone);
    }

    public function getRecipientContactPerson()
    {
        return $this->__get('RecipientContactPerson');
    }

    public function setRecipientContactPerson($RecipientContactPerson)
    {
        $this->__set('RecipientContactPerson', $RecipientContactPerson);
    }

    public function getSenderAddressDescription()
    {
        return $this->__get('SenderAddressDescription');
    }

    public function setSenderAddressDescription($SenderAddressDescription)
    {
        $this->__set('SenderAddressDescription', $SenderAddressDescription);
    }

    public function getRecipientAddressDescription()
    {
        return $this->__get('RecipientAddressDescription');
    }

    public function setRecipientAddressDescription($RecipientAddressDescription)
    {
        $this->__set('RecipientAddressDescription', $RecipientAddressDescription);
    }

    public function getPrinted()
    {
        return $this->__get('Printed');
    }

    public function setPrinted($Printed)
    {
        $this->__set('Printed', $Printed);
    }

    public function getFulfillment()
    {
        return $this->__get('Fulfillment');
    }

    public function setFulfillment($Fulfillment)
    {
        $this->__set('Fulfillment', $Fulfillment);
    }

    public function getEstimatedDeliveryDate()
    {
        return $this->__get('EstimatedDeliveryDate');
    }

    public function setEstimatedDeliveryDate($EstimatedDeliveryDate)
    {
        $this->__set('EstimatedDeliveryDate', $EstimatedDeliveryDate);
    }

    public function getDateLastUpdatedStatus()
    {
        return $this->__get('DateLastUpdatedStatus');
    }

    public function setDateLastUpdatedStatus($DateLastUpdatedStatus)
    {
        $this->__set('DateLastUpdatedStatus', $DateLastUpdatedStatus);
    }

    public function getCreateTime()
    {
        return $this->__get('CreateTime');
    }

    public function setCreateTime($CreateTime)
    {
        $this->__set('CreateTime', $CreateTime);
    }

    public function getScanSheetNumber()
    {
        return $this->__get('ScanSheetNumber');
    }

    public function setScanSheetNumber($ScanSheetNumber)
    {
        $this->__set('ScanSheetNumber', $ScanSheetNumber);
    }

    public function getInfoRegClientBarcodes()
    {
        return $this->__get('InfoRegClientBarcodes');
    }

    public function setInfoRegClientBarcodes($InfoRegClientBarcodes)
    {
        $this->__set('InfoRegClientBarcodes', $InfoRegClientBarcodes);
    }

    public function getStatePayId()
    {
        return $this->__get('StatePayId');
    }

    public function setStatePayId($StatePayId)
    {
        $this->__set('StatePayId', $StatePayId);
    }

    public function getStatePayName()
    {
        return $this->__get('StatePayName');
    }

    public function setStatePayName($StatePayName)
    {
        $this->__set('StatePayName', $StatePayName);
    }

    public function getBackwardDeliveryCargoType()
    {
        return $this->__get('BackwardDeliveryCargoType');
    }

    public function setBackwardDeliveryCargoType($BackwardDeliveryCargoType)
    {
        $this->__set('BackwardDeliveryCargoType', $BackwardDeliveryCargoType);
    }
}
