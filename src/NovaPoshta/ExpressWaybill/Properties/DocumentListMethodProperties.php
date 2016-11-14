<?php

namespace NovaPoshta\ExpressWaybill\Properties;

use NovaPoshta\MethodProperties;

class DocumentListMethodProperties extends MethodProperties
{
    public function setDateTimeFrom($dateTimeFrom)
    {
        $this->__set('DateTimeFrom', $dateTimeFrom);
    }

    public function getDateTimeFrom()
    {
        $this->__get('DateTimeFrom');
    }

    public function setDateTimeTo($dateTimeTo)
    {
        $this->__set('DateTimeTo', $dateTimeTo);
    }

    public function getDateTimeTo()
    {
        $this->__get('DateTimeTo');
    }

    public function setPage($page)
    {
        $this->__set('Page', $page);
    }

    public function getPage()
    {
        $this->__get('Page');
    }

    public function setGetFullList($getFullList)
    {
        $this->__set('GetFullList', $getFullList);
    }

    public function getGetFullList()
    {
        $this->__get('GetFullList');
    }

    public function setDateTime($dateTime)
    {
        $this->__set('DateTime', $dateTime);
    }

    public function getDateTime()
    {
        $this->__get('DateTime');
    }
}
