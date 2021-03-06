<?php

namespace NovaPoshta;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer;

class Service
{
    protected $config;
    protected $modelName;
    protected $client;
    protected $serializer;

    public function __construct(Configuration $config)
    {
        $this->config = $config;

        $this->client = new Client([
            'base_uri' => "{$this->config->base_uri}/{$this->modelName}/",
            'timeout' => $this->config->timeout
        ]);

        $this->serializer = new Serializer(
            [
                new JsonSerializableNormalizer(),
                new GetSetMethodNormalizer()
            ],
            [
                'json' => new JsonEncoder(),
                'xml' => new XmlEncoder()
            ]
        );
    }

    protected function makeRequest($calledMethod, $responseType, MethodProperties $properties = null)
    {

        $request = new Request([
            'modelName' => $this->modelName,
            'calledMethod' => $calledMethod,
            'apiKey' => $this->config->apiKey,
            'methodProperties' => $properties
        ]);

        $serialized = $this->serialize($request);

        $content = $this->send($request, $serialized);

        $deserialized = $this->deserialize($content, $responseType);

        return $deserialized;
    }

    protected function serialize($request)
    {
        return $this->serializer->serialize(
            $request,
            $this->config->contentType,
            $this->config->getSerializeContext($this->config->contentType)
        );
    }

    protected function deserialize($content, $type)
    {
        return $this->serializer->deserialize(
            $content,
            $type,
            $this->config->contentType,
            $this->config->getDeserializeContext($this->config->contentType)
        );
    }

    protected function send($request, $content)
    {
        $response = $this->client->request('POST', $request->getCalledMethod(), [
            'headers' => [
                'Content-Type' => Psr7\mimetype_from_extension($this->config->contentType)
            ],
            'body' => $content
        ]);

        return $response->getBody()->getContents();
    }
}
