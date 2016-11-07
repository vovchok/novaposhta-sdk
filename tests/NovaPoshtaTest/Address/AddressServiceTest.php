<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Address\Services\AddressService;
use NovaPoshta\Address\Properties\CitiesMethodProperties;
use NovaPoshta\Address\Properties\StreetMethodProperties;
use NovaPoshta\Address\Properties\CounterpartyMethodProperties;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

class AddressServiceTest extends \PHPUnit_Framework_TestCase
{
    protected static $service;

    public static function setupBeforeClass()
    {
        self::$service = new AddressService(new Configuration([
            'apiKey' => 'YOUR_API_KEY',
            'contentType' => ContentTypes::JSON,
            //'sandbox' => true
        ]));
    }

    public function testGetAreas()
    {
        //$this->markTestSkipped();

        $result = self::$service->getAreas();

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCities()
    {
        //$this->markTestSkipped();

        $properties = new CitiesMethodProperties();
        //$properties->setRef("ebc0eda9-93ec-11e3-b441-0050568002cf");
        $properties->setFindByString('Ка');
        $properties->setPage(1);

        $result = self::$service->getCities($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetStreet()
    {
        //$this->markTestSkipped();

        $properties = new StreetMethodProperties();
        $properties->setCityRef("000655f2-4079-11de-b509-001d92f78698");
        //$properties->setFindByString('К');
        //$properties->setPage(1);

        $result = self::$service->getStreet($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testCounterpartyAddressSave()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyMethodProperties();
        $properties->setCounterpartyRef("5ace4a2e-13ee-11e5-add9-005056887b8d");
        $properties->setStreetRef('d4450bdb-0a58-11de-b6f5-001d92f78697');
        $properties->setBuildingNumber(7);
        $properties->setFlat(2);
        $properties->setNote("Комментарий");

        $result = self::$service->save($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testCounterpartyAddressUpdate()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyMethodProperties();
        $properties->setCounterpartyRef("5ace4a2e-13ee-11e5-add9-005056887b8d");
        $properties->setRef("5fdf0be8-c4e6-11e5-a70c-005056801333");
        $properties->setStreetRef('bba0d9b3-4148-11dd-9198-001d60451983');
        $properties->setBuildingNumber(45);
        $properties->setFlat(12);
        $properties->setNote("Комментарий");

        $result = self::$service->update($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testCounterpartyAddressDelete()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyMethodProperties();
        $properties->setRef("d5aa1638-1dbf-11e6-a70c-005056801333");

        $result = self::$service->delete($properties);

        $this->assertTrue($result->isSuccess());
    }
}
