<?php

namespace NovaPoshtaTest\Addresses;

use NovaPoshta\Addresses\Services\AddressGeneralService;
use NovaPoshta\Addresses\Properties\GetSettlementsMethodProperties;
use NovaPoshta\Addresses\Properties\GetWarehousesMethodProperties;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

/**
 * @group AddressGeneralService
 */
class AddressGeneralServiceTest extends \PHPUnit_Framework_TestCase
{

	protected static $service;

	public static function setupBeforeClass()
	{
		self::$service = new AddressGeneralService(new Configuration([
			'apiKey' => '51c72f55cdfcb88f5e95e7ce8170733d',
			'contentType' => ContentTypes::JSON,
			//'sandbox' => true
		]));
	}

	public function settlementsMethodProperties()
    {
        return [

            [
                [
                    "AreaRef" => "dcaadb64-4b33-11e4-ab6d-005056801329",
                    "Ref" => "0e451e40-4b3a-11e4-ab6d-005056801329",
                    "MainCitiesOnly" => true,
                    "RegionRef" => "e4b03a8f-4b33-11e4-ab6d-005056801329",
                    "Page" => 1
                ]
            ],
            [
                [
                    "AreaRef" => "dcaadb64-4b33-11e4-ab6d-005056801329",
                    "MainCitiesOnly" => true
                ]
            ],
            [
                [
                    "AreaRef" => "dcaadb64-4b33-11e4-ab6d-005056801329",
                    "MainCitiesOnly" => false,
                    "Page" => 2
                ]
            ],
            [
                [
                    "RegionRef" => "e4b03a8f-4b33-11e4-ab6d-005056801329",
                    "MainCitiesOnly" => false
                ]
            ],
            [
                [
                    "Ref" => "0e451e40-4b3a-11e4-ab6d-005056801329"
                ]
            ],
            [
                [
                    "FindByString" => "Ка"
                ]
            ]
        ];
    }

    /**
     *
     * @dataProvider settlementsMethodProperties
     */
	public function testGetSettlements($properties)
	{
	//	$this->markTestSkipped();

        $methodProperties = new GetSettlementsMethodProperties($properties);

		$result = self::$service->getSettlements($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

    public function warehouseMethodProperties()
    {
        return [
            [
                [
                    "CityRef" => "20982d74-9b6c-11e2-a57a-d4ae527baec3",
                    "CityName" => "Бахмач",
                ]
            ],
        ];
    }

    /**
     *
     * @dataProvider warehouseMethodProperties
     */
	public function testGetWarehouses($properties)
	{
		//$this->markTestSkipped();

        $methodProperties = new GetWarehousesMethodProperties($properties);

		$result = self::$service->getWarehouses($methodProperties);

		$this->assertTrue($result->isSuccess());
	}

	public function testGetWarehouseTypes()
	{
		//$this->markTestSkipped();

		$result = self::$service->getWarehouseTypes();

		$this->assertTrue($result->isSuccess());
	}

}
