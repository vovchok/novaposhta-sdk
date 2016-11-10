<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\Counterparties\Services\ContactPersonService;
use NovaPoshta\Counterparties\Properties\ContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\ContactPersonUpdateMethodProperties;
use NovaPoshta\Counterparties\Properties\ContactPersonDeleteMethodProperties;

/**
 * @group ContactPersonService
 */
class ContactPersonServiceTest extends \PHPUnit_Framework_TestCase
{
    protected static $service;

    public static function setupBeforeClass()
    {
        self::$service = new ContactPersonService(new Configuration([
            'apiKey' => 'YOUR_API_KEY',
            'contentType' => ContentTypes::JSON,
            //'sandbox' => true
        ]));
    }

    public function testSave()
    {
        //$this->markTestSkipped();

        $properties = new ContactPersonMethodProperties();
        $properties->setCounterpartyRef("194ef8cd-9bae-11e6-a54a-005056801333");
        $properties->setFirstName("Люцифер");
        $properties->setLastName("Кравченко");
        $properties->setMiddleName("Борисович");
        $properties->setPhone("+380997979789");

        $result = self::$service->save($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testUpdate()
    {
        //$this->markTestSkipped();

        $properties = new ContactPersonUpdateMethodProperties();
        $properties->setRef("9ad69c2b-159d-11e5-ad08-005056801333");
        $properties->setCounterpartyRef("194ef8cd-9bae-11e6-a54a-005056801333");
        $properties->setFirstName("Иванов");
        $properties->setLastName("Иван");
        $properties->setMiddleName("Иван");
        $properties->setPhone("+380997979789");

        $result = self::$service->update($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testDelete()
    {
        //$this->markTestSkipped();

        $properties = new ContactPersonDeleteMethodProperties();
        $properties->setRef("9ad69c2b-159d-11e5-ad08-005056801333");

        $result = self::$service->delete($properties);

        $this->assertTrue($result->isSuccess());
    }

}
