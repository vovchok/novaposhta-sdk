<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\Properties\MethodProperties;

class GenerateReportMethodProperties extends MethodProperties
{
    public function setDocumentRefs($documentRefs)
    {
        $this->__set('DocumentRefs', $documentRefs);
    }

    public function getDocumentRefs()
    {
        $this->__get('DocumentRefs');
    }

    public function setType($type)
    {
        $this->__set('Type', $type);
    }

    public function getType()
    {
        $this->__get('Type');
    }
}
