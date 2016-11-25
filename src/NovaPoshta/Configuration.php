<?php

namespace NovaPoshta;

class Configuration
{
	public $apiKey;
	public $contentType;
	public $base_uri;
	public $timeout;
	public $sandbox;
	public $protocol;

	public function __construct($configuration = [])
	{
		$this->apiKey = isset($configuration['apiKey']) ? $configuration['apiKey'] : '';

		$this->timeout = isset($configuration['timeout']) ? $configuration['timeout'] : 2.0;

		$this->contentType = isset($configuration['contentType']) ?
			$configuration['contentType']
			: ContentTypes::JSON;
		$this->sandbox = (isset($configuration['sandbox']) && $configuration['sandbox']) ? 'testapi' : 'api';

		$this->protocol = (isset($configuration['sandbox']) && $configuration['sandbox']) ? 'http' : 'https';

		$this->base_uri = "{$this->protocol}://{$this->sandbox}.novaposhta.ua/v2.0/{$this->contentType}";
	}

	public function getSerializeContext($contentType)
	{
		switch ($contentType) {
			case ContentTypes::JSON :
				return [
				//    'json_encode_options' => JSON_FORCE_OBJECT
				];
			case ContentTypes::XML :
				return [
					'xml_root_node_name' => 'file',
					'xml_encoding' => 'utf-8',
					'xml_version' => "1.0"
				];
		}
		return [];
	}

	public function getDeserializeContext($contentType)
	{
		switch ($contentType) {
			case ContentTypes::JSON :
				return [];
			case ContentTypes::XML :
				return ['xml_root_node_name' => 'root'];
		}
		return [];
	}
}
