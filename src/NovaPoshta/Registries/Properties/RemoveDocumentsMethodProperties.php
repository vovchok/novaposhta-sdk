<?php

namespace NovaPoshta\Registries\Properties;

use NovaPoshta\MethodProperties;

class RemoveDocumentsMethodProperties extends MethodProperties
{
    public function setDocumentRefs($documentRefs)
    {
        $this->__set('DocumentRefs', $documentRefs);
    }

    public function getDocumentRefs()
    {
        $this->__get('DocumentRefs');
    }

    public function setRef($ref)
    {
        $this->__set('Ref', $ref);
    }

    public function getRef()
    {
        $this->__get('Ref');
    }
}
