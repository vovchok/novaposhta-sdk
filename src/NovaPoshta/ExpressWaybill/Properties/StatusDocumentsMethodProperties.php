<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\Properties\MethodProperties;

class StatusDocumentsMethodProperties extends MethodProperties
{
    public function setDocuments(MethodProperties $Documents)
    {
        $docs = [];
        if ( is_array($Documents) ) {
            foreach ( $Documents as $doc ) {
                $docs[] = $Documents->getProperties();
            }
        }

        if ( is_object($Documents)) {
            $docs[] = $Documents->getProperties();
        }

        $this->__set('Documents', $docs);
    }

    public function getDocuments()
    {
        $this->__get('Documents');
    }
}
