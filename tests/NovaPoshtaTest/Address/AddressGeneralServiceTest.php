<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Address\Services\AddressGeneralService;
use NovaPoshta\Address\Properties\SettlementsMethodProperties;
use NovaPoshta\Address\Properties\WarehouseMethodProperties;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

class AddressGeneralServiceTest extends \PHPUnit_Framework_TestCase
{

    protected static $service;

    public static function setupBeforeClass()
    {
        self::$service = new AddressGeneralService(new Configuration([
            'apiKey' => 'YOUR_API_KEY',
            'contentType' => ContentTypes::JSON,
            //'sandbox' => true
        ]));
    }

    public function testGetSettlements()
    {
        //$this->markTestSkipped();

        $properties = new SettlementsMethodProperties();
        $properties->setAreaRef("dcaadb64-4b33-11e4-ab6d-005056801329");
        $properties->setRef("0e451e40-4b3a-11e4-ab6d-005056801329");
        $properties->setMainCitiesOnly(true);
        $properties->setRegionRef("e4b03a8f-4b33-11e4-ab6d-005056801329");
        $properties->setPage(3);

        $result = self::$service->getSettlements($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetWarehouses()
    {
        //$this->markTestSkipped();

        $properties = new WarehouseMethodProperties();
        $properties->setCityName("Бахмач");
        $properties->setCityRef("20982d74-9b6c-11e2-a57a-d4ae527baec3");

        $result = self::$service->getWarehouses($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetWarehouseTypes()
    {
        //$this->markTestSkipped();

        $result = self::$service->getWarehouseTypes();

        $this->assertTrue($result->isSuccess());
    }

}
