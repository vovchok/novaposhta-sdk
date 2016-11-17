<?php

namespace NovaPoshta;

class Request
{
    protected $modelName;
    protected $calledMethod;
    protected $apiKey;
    protected $methodProperties;

    public function __construct(
        $modelName,
        $calledMethod,
        $apiKey,
        $methodProperties = null)
    {
        $this->modelName = $modelName;
        $this->calledMethod = $calledMethod;
        $this->apiKey = $apiKey;
        $this->methodProperties = $methodProperties;
    }

    public function getModelName()
    {
        return $this->modelName;
    }

    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
    }

    public function getCalledMethod()
    {
        return $this->calledMethod;
    }

    public function setCalledMethod($calledMethod)
    {
        $this->calledMethod = $calledMethod;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getMethodProperties()
    {
        return $this->methodProperties;
    }

    public function setMethodProperties($methodProperties)
    {
        $this->methodProperties = $methodProperties;
    }
}
