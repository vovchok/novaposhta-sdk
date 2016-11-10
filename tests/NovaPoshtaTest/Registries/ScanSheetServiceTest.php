<?php

namespace NovaPoshtaTest\Address;

use NovaPoshta\Configuration;
use NovaPoshta\ContentTypes;

use NovaPoshta\Registries\Services\ScanSheetService;
use NovaPoshta\Registries\Properties\InsertDocumentsMethodProperties;
use NovaPoshta\Registries\Properties\ScanSheetMethodProperties;
use NovaPoshta\Registries\Properties\DeleteScanSheetMethodProperties;
use NovaPoshta\Registries\Properties\RemoveDocumentsMethodProperties;

/**
 * @group ScanSheetService
 */
class ScanSheetServiceTest extends \PHPUnit_Framework_TestCase
{
    protected static $service;

    public static function setupBeforeClass()
    {
        self::$service = new ScanSheetService(new Configuration([
            'apiKey' => 'YOUR_API_KEY',
            'contentType' => ContentTypes::JSON,
            //'sandbox' => true
        ]));
    }

    public function testInsertDocuments()
    {
        //$this->markTestSkipped();

        $properties = new InsertDocumentsMethodProperties();
        $properties->setDocumentRefs([
            "832029fe-718c-11e4-ab6d-005056801329",
            "832029fe-718c-11e4-ab6d-005056801329"
        ]);

        $result = self::$service->insertDocuments($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetScanSheet()
    {
        //$this->markTestSkipped();

        $properties = new ScanSheetMethodProperties();
        $properties->getRef("acf7a47c-73b6-11e4-ab6d-005056801329");

        $result = self::$service->getScanSheet($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testGetScanSheetList()
    {
        //$this->markTestSkipped();

        $result = self::$service->getScanSheetList();

        $this->assertTrue($result->isSuccess());
    }

    public function testDeleteScanSheet()
    {
        //$this->markTestSkipped();

        $properties = new DeleteScanSheetMethodProperties();
        $properties->setScanSheetRefs([
            "832029fe-718c-11e4-ab6d-005056801329",
            "832029fe-718c-11e4-ab6d-005056801329"
        ]);

        $result = self::$service->deleteScanSheet($properties);

        $this->assertTrue($result->isSuccess());
    }

    public function testRemoveDocuments()
    {
        //$this->markTestSkipped();

        $properties = new RemoveDocumentsMethodProperties();
        $properties->setDocumentRefs([
            "832029fe-718c-11e4-ab6d-005056801329",
            "832029fe-718c-11e4-ab6d-005056801329"
        ]);

        $result = self::$service->removeDocuments($properties);

        $this->assertTrue($result->isSuccess());
    }

}
