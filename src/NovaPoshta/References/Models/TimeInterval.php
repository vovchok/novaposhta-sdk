<?php

namespace NovaPoshta\References\Models;

use NovaPoshta\Models\Model;

class TimeInterval extends Model
{
    public function getNumber()
    {
        return $this->__get('Number');
    }

    public function setNumber($number)
    {
        $this->__set('Number', $number);
    }

    public function getStart()
    {
        return $this->__get('Start');
    }

    public function setStart($start)
    {
        $this->__set('Start', $start);
    }

    public function getEnd()
    {
        return $this->__get('End');
    }

    public function setEnd($end)
    {
        $this->__set('End', $end);
    }
}
