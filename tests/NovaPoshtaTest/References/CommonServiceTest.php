<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\References\Services\CommonService;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\References\Properties\GetTimeIntervalsMethodProperties;
use NovaPoshta\References\Properties\GetCargoDescriptionListMethodProperties;

/**
 * @group CommonService
 */
class CommonServiceTest extends \PHPUnit_Framework_TestCase
{
	protected static $service;

	public static function setupBeforeClass()
	{
		self::$service = new CommonService(new Configuration([
			'apiKey' => '51c72f55cdfcb88f5e95e7ce8170733d',
			'contentType' => ContentTypes::JSON,
			//'sandbox' => true
		]));
	}

	public function getTimeIntervals()
    {
        return [
            [
                [
                    "RecipientCityRef" => "8d5a980d-391c-11dd-90d9-001a92567626",
                    "DateTime" => (new \DateTime())->format('d.m.Y')
                ]
            ]
        ];
    }

    /**
     * @dataProvider getTimeIntervals
     */
	public function testGetTimeIntervals($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetTimeIntervalsMethodProperties($properties);

		$result = self::$service->getTimeIntervals($methodProperties);

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

	public function getCargoDescriptionList()
    {
        return [
            [
                [
                    "FindByString" => "абажур"
                ]
            ]
        ];
    }
    /**
     * @dataProvider getCargoDescriptionList
     */
	public function testGetCargoDescriptionList($properties)
	{
		//$this->markTestSkipped();

		$methodProperties = new GetCargoDescriptionListMethodProperties($properties);

		$result = self::$service->getCargoDescriptionList($methodProperties);

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
