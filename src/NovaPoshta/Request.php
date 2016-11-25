<?php

namespace NovaPoshta;

class Request extends MethodProperties
{
    public function getModelName()
    {
        return $this->__get('modelName');
    }

    public function setModelName($modelName)
    {
        $this->__set('modelName', $modelName);
    }

    public function getCalledMethod()
    {
        return $this->__get('calledMethod');
    }

    public function setCalledMethod($calledMethod)
    {
        $this->__set('calledMethod', $calledMethod);
    }

    public function getApiKey()
    {
        return $this->__get('apiKey');
    }

    public function setApiKey($apiKey)
    {
        $this->__set('apiKey', $apiKey);
    }

    public function getMethodProperties()
    {
        return $this->__get('methodProperties');
    }

    public function setMethodProperties($methodProperties)
    {
        $this->__set('methodProperties', $methodProperties);
    }
}
