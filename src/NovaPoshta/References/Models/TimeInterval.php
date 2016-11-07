<?php

namespace NovaPoshta\References\Models;

class TimeInterval
{
    protected $number;
    protected $start;
    protected $end;

    public function __construct($number, $start, $end)
    {
        $this->number = $number;
        $this->start = $start;
        $this->end = $end;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }
}
