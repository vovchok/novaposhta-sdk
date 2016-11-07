<?php

namespace NovaPoshta\Address\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Address\Models\Warehouse;

class WarehouseResponse extends Response
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

        //if ( isset($data['item'])) {
        //	$data = $data['item'];
        //}

        foreach ($data as $key => $value) {
            $this->data[] = new Warehouse(
                $value["SiteKey"],
                $value["Description"],
                $value["DescriptionRu"],
                $value["Phone"],
                $value["TypeOfWarehouse"],
                $value["Ref"],
                $value["Number"],
                $value["CityRef"],
                $value["CityDescription"],
                $value["CityDescriptionRu"],
                $value["Longitude"],
                $value["Latitude"],
                $value["TotalMaxWeightAllowed"],
                $value["PlaceMaxWeightAllowed"],
                $value["Reception"],
                $value["Delivery"],
                $value["Schedule"]
            );
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
