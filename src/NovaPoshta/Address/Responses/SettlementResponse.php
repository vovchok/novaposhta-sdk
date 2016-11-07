<?php

namespace NovaPoshta\Address\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Address\Models\Settlement;

class SettlementResponse extends Response
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
            $this->data[] = new Settlement(
                $value["Ref"],
                $value["SettlementType"],
                $value["Latitude"],
                $value["Longitude"],
                $value["Description"],
                $value["DescriptionRu"],
                $value["SettlementTypeDescription"],
                $value["SettlementTypeDescriptionRu"],
                $value["Region"],
                $value["RegionsDescription"],
                $value["RegionsDescriptionRu"],
                $value["Area"],
                $value["AreaDescription"],
                $value["AreaDescriptionRu"],
                $value["Index1"],
                $value["Index2"],
                $value["Delivery1"],
                $value["Delivery2"],
                $value["Delivery3"],
                $value["Delivery4"],
                $value["Delivery5"],
                $value["Delivery6"],
                $value["Delivery7"]
            );
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
