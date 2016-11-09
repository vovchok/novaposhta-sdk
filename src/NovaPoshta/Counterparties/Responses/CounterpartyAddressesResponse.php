<?php

namespace NovaPoshta\Counterparties\Responses;

use NovaPoshta\Responses\Response;
use NovaPoshta\Counterparties\Models\CounterpartyAddress;

class CounterpartyAddressesResponse extends Response
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

        foreach ($data as $key => $values) {
            $this->data[] = new CounterpartyAddress(
                $values
            );
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
