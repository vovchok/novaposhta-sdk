<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\References\Models\TireWheel;

class TiresWheelsListResponse extends Response
{
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->data = [];
    }

    public function setData($data)
    {
        if (empty($data)) {
            return;
        }

        if (isset($data['item'])) {
            $data = $data['item'];
        }

        foreach ($data as $key => $value) {
            $this->data[] = new TireWheel(
                $value['Ref'],
                $value['Description'],
                $value['DescriptionRu'],
                $value['Weight'],
                $value['DescriptionType']
            );
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
