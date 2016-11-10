<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\Counterparties\Services\CounterpartyService;
use NovaPoshta\Counterparties\Properties\CounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyAddressesMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyOptionsMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyContactPersonsMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartiesMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyUpdateMethodProperties;
use NovaPoshta\Counterparties\Properties\CounterpartyDeleteMethodProperties;

/**
 * @group CounterpartyService
 */
class CounterpartyServiceTest extends \PHPUnit_Framework_TestCase
{
    protected static $service;

    public static function setupBeforeClass()
    {
        self::$service = new CounterpartyService(new Configuration([
            'apiKey' => 'YOUR_API_KEY',
            'contentType' => ContentTypes::JSON,
            //'sandbox' => true
        ]));
    }

    public function testSave()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyMethodProperties();
        $properties->setCityRef("db5c88d7-391c-11dd-90d9-001a92567626");
        $properties->setFirstName("Фелікс");
        $properties->setMiddleName("Едуардович");
        $properties->setLastName("Яковлєв");
        $properties->setPhone("0997979789");
        $properties->setEmail("");
        $properties->setCounterpartyType("PrivatePerson");
        $properties->setCounterpartyProperty("Recipient");

        $result = self::$service->save($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartyAddressesSender()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyAddressesMethodProperties();
        $properties->setRef("5ace4a2e-13ee-11e5-add9-005056887b8d");
        $properties->setCounterpartyProperty("Sender");

        $result = self::$service->getCounterpartyAddresses($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartyAddressesRecipient()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyAddressesMethodProperties();
        $properties->setRef("5953fb16-08d8-11e4-8958-0025909b4e33");
        $properties->setCounterpartyProperty("Recipient");

        $result = self::$service->getCounterpartyAddresses($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartyOptions()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyOptionsMethodProperties();
        $properties->setRef("5ace4a2e-13ee-11e5-add9-005056887b8d");

        $result = self::$service->getCounterpartyOptions($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartyContactPersons()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyContactPersonsMethodProperties();
        $properties->setRef("5953fb16-08d8-11e4-8958-0025909b4e33");
        $properties->setPage(22);

        $result = self::$service->getCounterpartyContactPersons($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartiesSender()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartiesMethodProperties();
        $properties->setCounterpartyProperty('Sender');
        $properties->setPage(1);

        $result = self::$service->getCounterparties($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartiesRecipient()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartiesMethodProperties();
        $properties->setCounterpartyProperty('Recipient');
        $properties->setPage(1);

        $result = self::$service->getCounterparties($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartiesSenderByEDRPOU()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartiesMethodProperties();
        $properties->setCounterpartyProperty('Sender');
        $properties->setEDRPOU('37193071');
        //$properties->setPage(1);

        $result = self::$service->getCounterparties($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetCounterpartiesRecipientByEDRPOU()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartiesMethodProperties();
        $properties->setCounterpartyProperty('Recipient');
        $properties->setEDRPOU('37193071');
        //$properties->setPage(1);

        $result = self::$service->getCounterparties($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testUpdate()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyUpdateMethodProperties();
        $properties->setRef("eb7c1c2e-cc85-11e4-bdb5-005056801329");
        $properties->setCityRef("db5c88d7-391c-11dd-90d9-001a92567626");
        $properties->setFirstName("Михайло");
        $properties->setMiddleName("Іванович");
        $properties->setLastName("Колесник");
        $properties->setPhone("0997979789");
        $properties->setEmail("");
        $properties->setCounterpartyType("PrivatePerson");
        $properties->setCounterpartyProperty("Recipient");

        $result = self::$service->update($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testDelete()
    {
        //$this->markTestSkipped();

        $properties = new CounterpartyDeleteMethodProperties();
        $properties->setRef("eb7c1c2e-cc85-11e4-bdb5-005056801329");

        $result = self::$service->delete($properties);

        $this->assertTrue($result->isSuccess());
    }

}
