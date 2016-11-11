<?php

namespace NovaPoshta\ExpressWaybill\Models;

use NovaPoshta\Models\Model;

class DocumentPrice extends Model
{
    public function getAssessedCost()
    {
        return $this->__get('AssessedCost');
    }

    public function setAssessedCost($assessedCost)
    {
        $this->__set('AssessedCost', $assessedCost);
    }

    public function getCost()
    {
        return $this->__get('Cost');
    }

    public function setCost($cost)
    {
        $this->__set('Cost', $cost);
    }

    public function getCostRedelivery()
    {
        return $this->__get('CostRedelivery');
    }

    public function setCostRedelivery($costRedelivery)
    {
        $this->__set('CostRedelivery', $costRedelivery);
    }
}
