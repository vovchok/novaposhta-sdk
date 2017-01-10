<?php

namespace NovaPoshtaTest\ExpressWaybill;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\ExpressWaybill\Services\TrackingDocumentService;
use NovaPoshta\ExpressWaybill\Properties\StatusDocumentsMethodProperties;
use NovaPoshta\ExpressWaybill\Properties\DocumentMethodProperties;

/**
 * @group TrackingDocumentService
 */
class TrackingDocumentServiceTest extends \PHPUnit_Framework_TestCase
{
	protected static $service;

	public static function setupBeforeClass()
	{
		self::$service = new TrackingDocumentService(new Configuration([
			'apiKey' => '51c72f55cdfcb88f5e95e7ce8170733d',
			'contentType' => ContentTypes::JSON,
			//'sandbox' => true
		]));
	}

	public function testGetDocumentPrice()
	{
		//$this->markTestSkipped();

		$properties = new StatusDocumentsMethodProperties();

		$document = new DocumentMethodProperties();
		$document->setDocumentNumber("20400021980421");
		$document->setPhone("380ХХХХХХХ");
		$properties->setDocuments($document);

		$result = self::$service->getStatusDocuments($properties);

		$this->assertTrue($result->isSuccess());
	}
}
