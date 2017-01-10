<?php

namespace NovaPoshtaTest\ExpressWaybill;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\ExpressWaybill\Properties\BackwardDeliveryDataMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\ServicesMethodProperties;
use NovaPoshta\ExpressWaybill\Services\InternetDocumentService;

use NovaPoshta\ExpressWaybill\Properties\DocumentPriceMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentDeliveryDateMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentSaveMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentSaveRecipientAddressMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentSaveInPostAddressMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\OptionsSeatMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentUpdateMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentListMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentDeleteMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\GenerateReportMethodProperties;

/**
 * @group InternetDocumentService
 */
class InternetDocumentServiceTest extends \PHPUnit_Framework_TestCase
{
	protected static $service;

	public static function setupBeforeClass()
	{
		self::$service = new InternetDocumentService(new Configuration([
			'apiKey' => '51c72f55cdfcb88f5e95e7ce8170733d',
			'contentType' => ContentTypes::JSON,
			//'sandbox' => true
		]));
	}

	public function testGetDocumentPrice()
	{
		//$this->markTestSkipped();

		$properties = new DocumentPriceMethodProperties();
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setCityRecipient("db5c88e0-391c-11dd-90d9-001a92567626");
		$properties->setWeight(10);
		$properties->setServiceType("DoorsDoors");
		$properties->setCost(100);
		$properties->setCargoType("Cargo");
		$properties->setSeatsAmount(10);

		$result = self::$service->getDocumentPrice($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testGetDocumentDeliveryDate()
	{
		//$this->markTestSkipped();

		$properties = new DocumentDeliveryDateMethodProperties();
		$properties->setDateTime( (new \DateTime())->format('d.m.Y') );
		$properties->setServiceType("WarehouseDoors");
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setCityRecipient("8d5a980d-391c-11dd-90d9-001a92567626");

		$result = self::$service->getDocumentDeliveryDate($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testSaveDocument()
	{
		//$this->markTestSkipped();

		$properties = new DocumentSaveMethodProperties();
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("02.03.2015");
		$properties->setCargoType("Cargo");
		$properties->setVolumeGeneral("0.1");
		$properties->setWeight(10);
		$properties->setServiceType("WarehouseDoors");
		$properties->setSeatsAmount(1);
		$properties->setDescription("абажур");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("6e9acced-d072-11e3-95eb-0050568046cd");
		$properties->setSenderAddress("01ae2635-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactSender("d0b9f592-b600-11e4-a77a-005056887b8d");
		$properties->setSendersPhone("380678734567");
		$properties->setCityRecipient("db5c8892-391c-11dd-90d9-001a92567626");
		$properties->setRecipient("d00f2319-b743-11e4-a77a-005056887b8d");
		$properties->setRecipientAddress("511fcfbd-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactRecipient("bc7b61ea-b6eb-11e4-a77a-005056887b8d");
		$properties->setRecipientsPhone("380631112223");

		$result = self::$service->save($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testSaveDocumentRecipientAddress()
	{
		//$this->markTestSkipped();

		$properties = new DocumentSaveRecipientAddressMethodProperties();
		$properties->setNewAddress(1);
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("02.03.2015");
		$properties->setCargoType("Cargo");
		$properties->setVolumeGeneral("0.1");
		$properties->setWeight(10);
		$properties->setServiceType("WarehouseDoors");
		$properties->setSeatsAmount(1);
		$properties->setDescription("абажур");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("6e9acced-d072-11e3-95eb-0050568046cd");
		$properties->setSenderAddress("01ae2635-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactSender("d0b9f592-b600-11e4-a77a-005056887b8d");
		$properties->setSendersPhone("380678734567");
		$properties->setRecipientCityName("київ");
		$properties->setRecipient("d00f2319-b743-11e4-a77a-005056887b8d");
		$properties->setRecipientArea("");
		$properties->setRecipientAreaRegions("");
		$properties->setRecipientAddressName("Столичне шосе");
		$properties->setRecipientHouse(20);
		$properties->setRecipientFlat(37);
		$properties->setRecipientName("Тест Тест Тест");
		$properties->setRecipientType("PrivatePerson");
		$properties->setRecipientsPhone("380991234567");

		$result = self::$service->save($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testSaveDocumentDepartment()
	{
		//$this->markTestSkipped();

		$properties = new DocumentSaveRecipientAddressMethodProperties();
		$properties->setNewAddress(1);
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("02.03.2015");
		$properties->setCargoType("Cargo");
		$properties->setVolumeGeneral("0.1");
		$properties->setWeight(10);
		$properties->setServiceType("WarehouseDoors");
		$properties->setSeatsAmount(1);
		$properties->setDescription("абажур");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("6e9acced-d072-11e3-95eb-0050568046cd");
		$properties->setSenderAddress("01ae2635-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactSender("d0b9f592-b600-11e4-a77a-005056887b8d");
		$properties->setSendersPhone("380678734567");
		$properties->setRecipient("d00f2319-b743-11e4-a77a-005056887b8d");
		$properties->setRecipientCityName("");
		$properties->setRecipientArea("");
		$properties->setRecipientAreaRegions("");
		$properties->setRecipientAddressName("");
		$properties->setRecipientHouse("");
		$properties->setRecipientFlat("");
		$properties->setRecipientName("Тест Тест Тест");
		$properties->setRecipientType("PrivatePerson");
		$properties->setRecipientsPhone("380991234567");

		$result = self::$service->save($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testSaveDocumentInPost()
	{
		//$this->markTestSkipped();

		$properties = new DocumentSaveInPostAddressMethodProperties();
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("02.03.2015");
		$properties->setCargoType("Cargo");

		$optionsSeat = new OptionsSeatMethodProperties();
		$optionsSeat->setVolumetricVolume(1);
		$optionsSeat->setVolumetricHeight(30);
		$optionsSeat->setVolumetricWidth(30);
		$optionsSeat->setVolumetricLength(30);
		$optionsSeat->setWeight(28);

		$properties->setOptionsSeat( $optionsSeat );

		$properties->setServiceType("WarehouseWarehouse");
		$properties->setSeatsAmount(1);
		$properties->setDescription("одяг");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("5ace4a2e-13ee-11e5-add9-005056887b8d");
		$properties->setSenderAddress("31866ddc-0097-11e6-a70c-005056801333");
		$properties->setContactSender("613b77c4-1411-11e5-ad08-005056801333");
		$properties->setSendersPhone("380677777788");

		$properties->setCityRecipient("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setRecipient("768da332-159d-11e5-ad08-005056801333");
		$properties->setRecipientAddress("4d9df143-e789-11e5-899e-005056887b8d");
		$properties->setContactRecipient("e5ac6c51-deef-11e5-a70c-005056801333");
		$properties->setRecipientsPhone("380991234567");

		$result = self::$service->saveWithPochtomatAddress($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testSaveDocumentNovaPoshta()
	{
		//$this->markTestSkipped();

		$properties = new DocumentSaveInPostAddressMethodProperties();
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("02.03.2015");
		$properties->setCargoType("Cargo");

		$optionsSeat = new OptionsSeatMethodProperties();
		$optionsSeat->setVolumetricVolume(1);
		$optionsSeat->setVolumetricHeight(30);
		$optionsSeat->setVolumetricWidth(30);
		$optionsSeat->setVolumetricLength(30);
		$optionsSeat->setWeight(28);

		$properties->setOptionsSeat( $optionsSeat );

		$properties->setServiceType("WarehouseWarehouse");
		$properties->setSeatsAmount(1);
		$properties->setDescription("одяг");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("5ace4a2e-13ee-11e5-add9-005056887b8d");
		$properties->setSenderAddress("31866ddc-0097-11e6-a70c-005056801333");
		$properties->setContactSender("613b77c4-1411-11e5-ad08-005056801333");
		$properties->setSendersPhone("380677777788");

		$properties->setCityRecipient("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setRecipient("768da332-159d-11e5-ad08-005056801333");
		$properties->setRecipientAddress("29071f12-1381-11e6-971e-005056887b8d");
		$properties->setContactRecipient("e5ac6c51-deef-11e5-a70c-005056801333");
		$properties->setRecipientsPhone("380997979789");

		$result = self::$service->saveWithPochtomatAddress($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testSaveDocumentPrivateBank()
	{
		//$this->markTestSkipped();

		$properties = new DocumentSaveInPostAddressMethodProperties();
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("02.03.2015");
		$properties->setCargoType("Cargo");

		$optionsSeat = new OptionsSeatMethodProperties();
		$optionsSeat->setVolumetricVolume(1);
		$optionsSeat->setVolumetricHeight(30);
		$optionsSeat->setVolumetricWidth(30);
		$optionsSeat->setVolumetricLength(30);
		$optionsSeat->setWeight(28);

		$properties->setOptionsSeat( $optionsSeat );

		$properties->setServiceType("WarehouseWarehouse");
		$properties->setSeatsAmount(1);
		$properties->setDescription("одяг");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("5ace4a2e-13ee-11e5-add9-005056887b8d");
		$properties->setSenderAddress("31866ddc-0097-11e6-a70c-005056801333");
		$properties->setContactSender("613b77c4-1411-11e5-ad08-005056801333");
		$properties->setSendersPhone("380677777788");

		$properties->setCityRecipient("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setRecipient("768da332-159d-11e5-ad08-005056801333");
		$properties->setRecipientAddress("e77f2c07-60f6-11e4-acce-0050568002cf");
		$properties->setContactRecipient("e5ac6c51-deef-11e5-a70c-005056801333");
		$properties->setRecipientsPhone("380997979789");

		$result = self::$service->saveWithPochtomatAddress($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testUpdateDocument()
	{
		//$this->markTestSkipped();

		$properties = new DocumentUpdateMethodProperties();
		$properties->setRef("06188e5f-1dc2-11e6-a70c-005056801333");
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("21.05.2016");
		$properties->setCargoType("Cargo");
		$properties->setVolumeGeneral(10);
		$properties->setWeight(10);
		$properties->setServiceType("WarehouseDoors");
		$properties->setSeatsAmount(1);
		$properties->setDescription("абажур");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("6e9acced-d072-11e3-95eb-0050568046cd");
		$properties->setSenderAddress("01ae2635-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactSender("d0b9f592-b600-11e4-a77a-005056887b8d");
		$properties->setSendersPhone("380678734567");
		$properties->setCityRecipient("db5c8892-391c-11dd-90d9-001a92567626");
		$properties->setRecipient("d00f2319-b743-11e4-a77a-005056887b8d");
		$properties->setRecipientAddress("511fcfbd-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactRecipient("bc7b61ea-b6eb-11e4-a77a-005056887b8d");
		$properties->setRecipientsPhone("380631112223");

		$result = self::$service->update($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testGetDocumentList()
	{
		$properties = new DocumentListMethodProperties();
		$properties->setDateTimeFrom('21.06.2016');
		$properties->setDateTimeTo('24.06.2016');
		$properties->setPage(0);
		$properties->setGetFullList(0);

		$result = self::$service->getDocumentList($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testDelete()
	{
		$properties = new DocumentDeleteMethodProperties();
		$properties->setDocumentRefs("2813aec6-be5b-11e4-a77a-005056887b8d");

		$result = self::$service->delete($properties);

		$this->assertTrue($result->isSuccess());
	}

	public function testGenerateReport()
	{
		$properties = new GenerateReportMethodProperties();
		//$properties->setDateTime( (new \DateTime())->format("d.m.Y") );
		$properties->setDateTime("24.09.2015");
		$properties->setDocumentRefs(
			[
				"1fb8943e-14e4-11e5-ad08-005056801333",
				"230a3869-14e4-11e5-ad08-005056801333"
			]
		);
		$properties->setType("Pdf");

		$result = self::$service->generateReport($properties);

		$this->assertTrue($result->isSuccess());
	}

	/**
	 * Формирование запроса с заказом услуги «Обратная доставка документов с различными подтипами»
	 */
	public function testDocumentSaveWithOrderService1()
	{
		$properties = new DocumentSaveMethodProperties();
		$properties->setPayerType("Sender");
		$properties->setPaymentMethod("Cash");
		$properties->setDateTime("02.03.2016");
		$properties->setCargoType("Cargo");
		$properties->setVolumeGeneral("0.1");
		$properties->setWeight(10);
		$properties->setServiceType("WarehouseDoors");
		$properties->setSeatsAmount(1);
		$properties->setDescription("абажур");
		$properties->setCost(500);
		$properties->setCitySender("8d5a980d-391c-11dd-90d9-001a92567626");
		$properties->setSender("6e9acced-d072-11e3-95eb-0050568046cd");
		$properties->setSenderAddress("01ae2635-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactSender("d0b9f592-b600-11e4-a77a-005056887b8d");
		$properties->setSendersPhone("380678734567");
		$properties->setCityRecipient("db5c8892-391c-11dd-90d9-001a92567626");
		$properties->setRecipient("d00f2319-b743-11e4-a77a-005056887b8d");
		$properties->setRecipientAddress("511fcfbd-e1c2-11e3-8c4a-0050568002cf");
		$properties->setContactRecipient("bc7b61ea-b6eb-11e4-a77a-005056887b8d");
		$properties->setRecipientsPhone("380631112223");

		$backwardDeliveryData = new BackwardDeliveryDataMethodProperties();
		$backwardDeliveryData->setPayerType("Sender");
		$backwardDeliveryData->setCargoType("Documents");

		$services = new ServicesMethodProperties();
		$services->setAttorney(true);
		$services->setWaybillNewPostWithStamp(true);
		$services->setUserActions(ServicesMethodProperties::USER_CALL_SENDER);

		$backwardDeliveryData->setServices( $services );

		$properties->setBackwardDeliveryData( [ $backwardDeliveryData ] );

		$result = self::$service->save($properties);

		$this->assertTrue($result->isSuccess());
	}
}
