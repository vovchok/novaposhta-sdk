<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Addresses\Services\AddressService;
use NovaPoshta\Addresses\Properties\GetCitiesMethodProperties;
use NovaPoshta\Addresses\Properties\GetStreetMethodProperties;
use NovaPoshta\Addresses\Properties\CounterpartyAddressMethodProperties;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

/**
 * @group AddressService
 */
class AddressServiceTest extends \PHPUnit_Framework_TestCase
{
	protected static $service;

	public static function setupBeforeClass()
	{
		self::$service = new AddressService(new Configuration([
            'apiKey' => '51c72f55cdfcb88f5e95e7ce8170733d',
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

	public function getCitiesMethodProperties()
    {
        return [
            [
                [
                    "Ref" => "ebc0eda9-93ec-11e3-b441-0050568002cf"
                ]
            ],
            [
                [
                    "FindByString" => 'Ка',
                    "Page" => 1
                ]
            ]
        ];
    }

    /**
     * @dataProvider getCitiesMethodProperties
     */
	public function testGetCities( $properties )
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCitiesMethodProperties($properties);

		$result = self::$service->getCities($methodProperties);

		$this->assertTrue($result->isSuccess());
	}


	public function getStreetMethodProperties()
    {
        return [
            [
                [
                    "CityRef" => "ebc0eda9-93ec-11e3-b441-0050568002cf",
                    "FindByString" => "Ка"
                ]
            ],
            [
                [
                    "CityRef" => "ebc0eda9-93ec-11e3-b441-0050568002cf",
                    "FindByString" => "Ка",
                    "Page" => 1
                ]
            ],
        ];
    }

    /**
     * @dataProvider getStreetMethodProperties
     */
	public function testGetStreet($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetStreetMethodProperties($properties);

		$result = self::$service->getStreet($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

	public function saveCounterpartyAddressMethodProperties()
    {
        return [
            [
                [
                    "CounterpartyRef" => "5ace4a2e-13ee-11e5-add9-005056887b8d",
                    "StreetRef" => "d4450bdb-0a58-11de-b6f5-001d92f78697",
                    "BuildingNumber" => 7,
                    "Flat" => 2,
                    "Note" => "Комментарий"
                ]
            ],
        ];
    }

    /**
     * @dataProvider saveCounterpartyAddressMethodProperties
     */
	public function testSaveCounterpartyAddress( $properties )
	{
		//$this->markTestSkipped();

		$methodProperties = new CounterpartyAddressMethodProperties($properties);

		$result = self::$service->save($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function updateCounterpartyAddressMethodProperties()
    {
        return [
            [
                [
                    "CounterpartyRef" => "5ace4a2e-13ee-11e5-add9-005056887b8d",
                    "Ref" => "5fdf0be8-c4e6-11e5-a70c-005056801333",
                    "StreetRef" => "bba0d9b3-4148-11dd-9198-001d60451983",
                    "BuildingNumber" => 45,
                    "Flat" => 12,
                    "Note" => "Комментарий"
                ]
            ]
        ];
    }

    /**
     * @dataProvider updateCounterpartyAddressMethodProperties
     */
	public function testUpdateCounterpartyAddress($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new CounterpartyAddressMethodProperties($properties);

		$result = self::$service->update($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

	public function deleteCounterpartyAddressMethodProperties()
    {
        return [
            [
                [
                    "Ref" => "d5aa1638-1dbf-11e6-a70c-005056801333"
                ]
            ]
        ];
    }

    /**
     * @dataProvider deleteCounterpartyAddressMethodProperties
     */
	public function testDeleteCounterpartyAddress($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new CounterpartyAddressMethodProperties($properties);

		$result = self::$service->delete($methodProperties);

		$this->assertTrue($result->isSuccess());
	}
}
