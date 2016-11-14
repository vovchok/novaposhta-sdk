<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\MethodProperties;

class GenerateReportMethodProperties extends MethodProperties
{
    public function setDateTime($DateTime)
    {
        $this->__set('DateTime', $DateTime);
    }

    public function getDateTime()
    {
        $this->__get('DateTime');
    }

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
