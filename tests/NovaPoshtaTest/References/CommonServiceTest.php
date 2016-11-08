<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\References\Services\CommonService;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\References\Properties\TimeIntervalMethodProperties;
use NovaPoshta\References\Properties\CargoDescriptionMethodProperties;

class CommonServiceTest extends \PHPUnit_Framework_TestCase
{
    protected static $service;

    public static function setupBeforeClass()
    {
        self::$service = new CommonService(new Configuration([
            'apiKey' => 'YOUR_API_KEY',
            'contentType' => ContentTypes::JSON,
            //'sandbox' => true
        ]));
    }

    public function testGetTimeIntervals()
    {
        //$this->markTestSkipped();

        $properties = new TimeIntervalMethodProperties();
        $properties->setRecipientCityRef("8d5a980d-391c-11dd-90d9-001a92567626");
        $properties->setDateTime( (new \DateTime())->format('d.m.Y') );

        $result = self::$service->getTimeIntervals($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCargoTypes()
    {
        //$this->markTestSkipped();

        $result = self::$service->getCargoTypes();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetBackwardDeliveryCargoTypes()
    {
        //$this->markTestSkipped();

        $result = self::$service->getBackwardDeliveryCargoTypes();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetTypesOfPayers()
    {
        //$this->markTestSkipped();

        $result = self::$service->getTypesOfPayers();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetTypesOfPayersForRedelivery()
    {
        //$this->markTestSkipped();

        $result = self::$service->getTypesOfPayersForRedelivery();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetTiresWheelsList()
    {
        //$this->markTestSkipped();

        $result = self::$service->getTiresWheelsList();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCargoDescriptionList()
    {
        //$this->markTestSkipped();

        $properties = new CargoDescriptionMethodProperties();
        $properties->setFindByString("абажур");
        //$properties->setPage(1);

        $result = self::$service->getCargoDescriptionList($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetServiceTypes()
    {
        //$this->markTestSkipped();

        $result = self::$service->getServiceTypes();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetTypesOfCounterparties()
    {
        //$this->markTestSkipped();

        $result = self::$service->getTypesOfCounterparties();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetTraysList()
    {
        //$this->markTestSkipped();

        $result = self::$service->getTraysList();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetPaymentForms()
    {
        //$this->markTestSkipped();

        $result = self::$service->getPaymentForms();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetOwnershipFormsList()
    {
        //$this->markTestSkipped();

        $result = self::$service->getOwnershipFormsList();

        $this->assertTrue($result->isSuccess());
    }
}
