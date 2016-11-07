<?php

namespace NovaPoshta\Address\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Address\Models\Oblast;

class OblastResponse extends Response
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
            $this->data[] = new Oblast(
                $value['Description'],
                $value['Ref'],
                $value['AreasCenter']
            );
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
