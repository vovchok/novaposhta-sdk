<?php

namespace NovaPoshta\Address\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Address\Models\City;

class CityResponse extends Response
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
            $this->data[] = new City(
                $value['Description'],
                $value['DescriptionRu'],
                $value['Ref'],
                $value['Delivery1'],
                $value['Delivery2'],
                $value['Delivery3'],
                $value['Delivery4'],
                $value['Delivery5'],
                $value['Delivery6'],
                $value['Delivery7'],
                $value['Area'],
                $value['Conglomerates']
            );
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
