<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\Counterparties\Services\CounterpartyService;
use NovaPoshta\Counterparties\Properties\CounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartyAddressesMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartyOptionsMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartyContactPersonMethodProperties;
use NovaPoshta\Counterparties\Properties\GetCounterpartiesMethodProperties;
use NovaPoshta\Counterparties\Properties\UpdateCounterpartyMethodProperties;
use NovaPoshta\Counterparties\Properties\DeleteCounterpartyMethodProperties;

/**
 * @group CounterpartyService
 */
class CounterpartyServiceTest extends \PHPUnit_Framework_TestCase
{
	protected static $service;

	public static function setupBeforeClass()
	{
		self::$service = new CounterpartyService(new Configuration([
            'apiKey' => '51c72f55cdfcb88f5e95e7ce8170733d',
			'contentType' => ContentTypes::JSON,
			//'sandbox' => true
		]));
	}

    public function saveCounterparty()
    {
        return [
            [
                [
                    "CityRef" => "db5c88d7-391c-11dd-90d9-001a92567626",
                    "FirstName" => "Фелікс",
                    "MiddleName" => "Едуардович",
                    "LastName" => "Яковлєв",
                    "Phone" => "0997979789",
                    "Email" => "",
                    "CounterpartyType" => "PrivatePerson",
                    "CounterpartyProperty" => "Recipient"
                ]
            ]
        ];
    }

    /**
     * @dataProvider saveCounterparty
     */
	public function testSave($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new CounterpartyMethodProperties($properties);

		$result = self::$service->save($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function getCounterpartyAddressesSender()
    {
        return [
            [
                [
                    "Ref" => "5ace4a2e-13ee-11e5-add9-005056887b8d",
                    "CounterpartyProperty" => "Sender"
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartyAddressesSender
     */
	public function testGetCounterpartyAddressesSender($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartyAddressesMethodProperties($properties);

		$result = self::$service->getCounterpartyAddresses($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function getCounterpartyAddressesRecipient()
    {
        return [
            [
                [
                    "Ref" => "5953fb16-08d8-11e4-8958-0025909b4e33",
                    "CounterpartyProperty" => "Recipient"
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartyAddressesRecipient
     */
	public function testGetCounterpartyAddressesRecipient($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartyAddressesMethodProperties($properties);

		$result = self::$service->getCounterpartyAddresses($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function getCounterpartyOptions()
    {
        return [
            [
                [
                    "Ref" => "5ace4a2e-13ee-11e5-add9-005056887b8d"
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartyOptions
     */
	public function testGetCounterpartyOptions($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartyOptionsMethodProperties($properties);

		$result = self::$service->getCounterpartyOptions($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function getCounterpartyContactPerson()
    {
        return [
            [
                [
                    "Ref" => "5953fb16-08d8-11e4-8958-0025909b4e33",
                    "Page" => 22
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartyContactPerson
     */
	public function testGetCounterpartyContactPerson($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartyContactPersonMethodProperties($properties);

		$result = self::$service->getCounterpartyContactPerson($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

	public function getCounterpartiesSender()
    {
        return [
            [
                [
                    "CounterpartyProperty" => 'Sender',
                    "Page" => 1
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartiesSender
     */
	public function testGetCounterpartiesSender($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartiesMethodProperties($properties);

		$result = self::$service->getCounterparties($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function getCounterpartiesRecipient()
    {
        return [
            [
                [
                    "CounterpartyProperty" => 'Recipient',
                    "Page" => 1
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartiesRecipient
     */
	public function testGetCounterpartiesRecipient($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartiesMethodProperties($properties);

		$result = self::$service->getCounterparties($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

	public function getCounterpartiesSenderByEDRPOU()
    {
        return [
            [
                [
                    "CounterpartyProperty" => 'Sender',
                    "EDRPOU" => '37193071'
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartiesSenderByEDRPOU
     */
	public function testGetCounterpartiesSenderByEDRPOU($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartiesMethodProperties($properties);

		$result = self::$service->getCounterparties($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function getCounterpartiesRecipientByEDRPOU()
    {
        return [
            [
                [
                    "CounterpartyProperty" => 'Recipient',
                    "EDRPOU" => '37193071'
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCounterpartiesRecipientByEDRPOU
     */
	public function testGetCounterpartiesRecipientByEDRPOU($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCounterpartiesMethodProperties($properties);

		$result = self::$service->getCounterparties($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function updateCounterparty()
    {
        return [
            [
                [
                    "Ref" => "eb7c1c2e-cc85-11e4-bdb5-005056801329",
                    "CityRef" => "db5c88d7-391c-11dd-90d9-001a92567626",
                    "FirstName" => "Михайло",
                    "MiddleName" => "Іванович",
                    "LastName" => "Колесник",
                    "Phone" => "0997979789",
                    "Email" => "",
                    "CounterpartyType" => "PrivatePerson",
                    "CounterpartyProperty" => "Recipient"
                ]
            ]
        ];
    }

    /**
     * @dataProvider updateCounterparty
     */
	public function testUpdate($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new UpdateCounterpartyMethodProperties($properties);

		$result = self::$service->update($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

	public function deleteCounterparty()
    {
        return [
            [
                [
                    "Ref" => "eb7c1c2e-cc85-11e4-bdb5-005056801329"
                ]
            ]
        ];
    }

    /**
     * @dataProvider deleteCounterparty
     */
	public function testDelete($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new DeleteCounterpartyMethodProperties($properties);

		$result = self::$service->delete($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

}
