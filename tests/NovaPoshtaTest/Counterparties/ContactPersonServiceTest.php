<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\Counterparties\Services\ContactPersonService;
use NovaPoshta\Counterparties\Properties\ContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\UpdateContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\DeleteContactPersonMethodProperties;

/**
 * @group ContactPersonService
 */
class ContactPersonServiceTest extends \PHPUnit_Framework_TestCase
{
	protected static $service;

	public static function setupBeforeClass()
	{
		self::$service = new ContactPersonService(new Configuration([
            'apiKey' => '51c72f55cdfcb88f5e95e7ce8170733d',
			'contentType' => ContentTypes::JSON,
			//'sandbox' => true
		]));
	}

	public function saveContactPerson()
    {
        return [
            [
                [
                    "CounterpartyRef" => "194ef8cd-9bae-11e6-a54a-005056801333",
                    "FirstName" => "Люцифер",
                    "LastName" => "Кравченко",
                    "MiddleName" => "Борисович",
                    "Phone" => "+380997979789"
                ]
            ]
        ];
    }

    /**
     * @dataProvider saveContactPerson
     */
	public function testSave($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new ContactPersonMethodProperties($properties);

		$result = self::$service->save($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function updateContactPerson()
    {
        return [
            [
                [
                    "Ref" => "9ad69c2b-159d-11e5-ad08-005056801333",
                    "CounterpartyRef" => "194ef8cd-9bae-11e6-a54a-005056801333",
                    "FirstName" => "Иванов",
                    "LastName" => "Иван",
                    "MiddleName" => "Иван",
                    "Phone" => "+380997979789"
                ]
            ]
        ];
    }

    /**
     * @dataProvider updateContactPerson
     */
	public function testUpdate($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new UpdateContactPersonMethodProperties($properties);

		$result = self::$service->update($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

	public function deleteContactPerson()
    {
        return [
            [
                [
                    "Ref" => "9ad69c2b-159d-11e5-ad08-005056801333"
                ]
            ]
        ];
    }

    /**
     * @dataProvider deleteContactPerson
     */
	public function testDelete($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new DeleteContactPersonMethodProperties($properties);

		$result = self::$service->delete($methodProperties);

		$this->assertTrue($result->isSuccess());
	}
}
