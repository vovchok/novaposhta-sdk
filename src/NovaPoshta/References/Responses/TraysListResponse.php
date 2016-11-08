<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\References\Models\Tray;

class TraysListResponse extends Response
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
            $this->data[] = new Tray(
                $value['Ref'],
                $value['Description'],
                $value['DescriptionRu'],
                $value['Weight']
            );
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
